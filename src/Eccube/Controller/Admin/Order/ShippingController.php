<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Controller\Admin\Order;

use Doctrine\Common\Collections\ArrayCollection;
use Eccube\Controller\AbstractController;
use Eccube\Entity\Order;
use Eccube\Entity\OrderItem;
use Eccube\Entity\Shipping;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Form\Type\Admin\SearchProductType;
use Eccube\Form\Type\Admin\ShippingType;
use Eccube\Repository\CategoryRepository;
use Eccube\Repository\DeliveryRepository;
use Eccube\Repository\OrderItemRepository;
use Eccube\Repository\ShippingRepository;
use Eccube\Service\MailService;
use Eccube\Service\OrderStateMachine;
use Eccube\Service\TaxRuleService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ShippingController extends AbstractController
{
    /**
     * @var OrderItemRepository
     */
    protected $orderItemRepository;

    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var DeliveryRepository
     */
    protected $deliveryRepository;

    /**
     * @var TaxRuleService
     */
    protected $taxRuleService;

    /**
     * @var ShippingRepository
     */
    protected $shippingRepository;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @var \Eccube\Service\MailService
     */
    protected $mailService;

    /**
     * @var OrderStateMachine
     */
    private $orderStateMachine;

    /**
     * EditController constructor.
     *
     * @param MailService $mailService
     * @param OrderItemRepository $orderItemRepository
     * @param CategoryRepository $categoryRepository
     * @param DeliveryRepository $deliveryRepository
     * @param TaxRuleService $taxRuleService
     * @param ShippingRepository $shippingRepository
     * @param SerializerInterface $serializer
     * @param OrderStateMachine $orderStateMachine
     */
    public function __construct(
        MailService $mailService,
        OrderItemRepository $orderItemRepository,
        CategoryRepository $categoryRepository,
        DeliveryRepository $deliveryRepository,
        TaxRuleService $taxRuleService,
        ShippingRepository $shippingRepository,
        SerializerInterface $serializer,
        OrderStateMachine $orderStateMachine
    ) {
        $this->mailService = $mailService;
        $this->orderItemRepository = $orderItemRepository;
        $this->categoryRepository = $categoryRepository;
        $this->deliveryRepository = $deliveryRepository;
        $this->taxRuleService = $taxRuleService;
        $this->shippingRepository = $shippingRepository;
        $this->serializer = $serializer;
        $this->orderStateMachine = $orderStateMachine;
    }

    /**
     * ????????????/????????????.
     *
     * @Route("/%eccube_admin_route%/shipping/{id}/edit", requirements={"id" = "\d+"}, name="admin_shipping_edit")
     * @Template("@admin/Order/shipping.twig")
     */
    public function index(Request $request, Order $Order)
    {
        $TargetShippings = $Order->getShippings();

        // ?????????????????????????????????
        $OriginShippings = new ArrayCollection();
        $OriginOrderItems = [];

        foreach ($TargetShippings as $key => $TargetShipping) {
            $OriginShippings->add($TargetShipping);

            // ??????????????????????????????????????????????????????
            $OriginOrderItems[$key] = new ArrayCollection();

            foreach ($TargetShipping->getOrderItems() as $OrderItem) {
                $OriginOrderItems[$key]->add($OrderItem);
            }
        }

        $builder = $this->formFactory->createBuilder();
        $builder
            ->add('shippings', CollectionType::class, [
                'entry_type' => ShippingType::class,
                'data' => $TargetShippings,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
            ]);

        // ???????????????????????????
        $builder
            ->add('add_shipping', HiddenType::class, [
                'mapped' => false,
            ]);

        // ????????????????????????????????????????????????????????????????????????????????????
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            if ($data['add_shipping']) {
                $Shippings = $data['shippings'];
                $newShipping = ['Delivery' => ''];
                $Shippings[] = $newShipping;
                $data['shippings'] = $Shippings;
                $data['add_shipping'] = '';
                $event->setData($data);
            }
        });

        $event = new EventArgs(
            [
                'builder' => $builder,
                'OriginShippings' => $OriginShippings,
                'TargetShippings' => $TargetShippings,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_SHIPPING_EDIT_INDEX_INITIALIZE, $event);

        $form = $builder->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $request->get('mode') == 'register') {
            log_info('??????????????????', [$TargetShipping->getId()]);

            // ??????????????????????????????
            /** @var Shipping $OriginShipping */
            foreach ($OriginShippings as $key => $OriginShipping) {
                if (false === $TargetShippings->contains($OriginShipping)) {
                    // ??????????????????????????????????????????
                    // ??????????????????????????????????????????????????????
                    /** @var OrderItem $OriginOrderItem */
                    foreach ($OriginOrderItems[$key] as $OriginOrderItem) {
                        $this->entityManager->remove($OriginOrderItem);
                    }

                    // ????????????????????????????????????
                    $this->entityManager->remove($OriginShipping);
                } else {
                    // ?????????????????????????????????????????????
                    // ??????????????????????????????
                    /** @var OrderItem $OriginOrderItem */
                    foreach ($OriginOrderItems[$key] as $OriginOrderItem) {
                        if (false === $TargetShippings[$key]->getOrderItems()->contains($OriginOrderItem)) {
                            $this->entityManager->remove($OriginOrderItem);
                        }
                    }
                }
            }

            // ??????????????????????????????
            foreach ($TargetShippings as $TargetShipping) {
                // ??????????????????????????????
                foreach ($TargetShipping->getOrderItems() as $OrderItem) {
                    $OrderItem->setShipping($TargetShipping);
                    $OrderItem->setOrder($Order);
                }

                // ????????????????????????????????????
                $TargetShipping->setOrder($Order);
            }

            $event = new EventArgs(
                [
                    'builder' => $builder,
                    'OriginShippings' => $OriginShippings,
                    'TargetShippings' => $TargetShippings,
                ],
                $request
            );
            $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_SHIPPING_EDIT_INDEX_COMPLETE, $event);

            try {
                foreach ($TargetShippings as $TargetShipping) {
                    $this->entityManager->persist($TargetShipping);
                }
                $this->entityManager->flush();

                $this->addInfo('admin.order.shipping_save_message', 'admin');
                $this->addSuccess('admin.common.save_complete', 'admin');
                log_info('??????????????????', [$Order->getId()]);

                return $this->redirectToRoute('admin_shipping_edit', ['id' => $Order->getId()]);
            } catch (\Exception $e) {
                log_error('?????????????????????', [$Order->getId(), $e]);
                $this->addError('admin.flash.register_failed', 'admin');
            }
        } elseif ($form->isSubmitted() && $request->get('mode') == 'register' && $form->getErrors(true)) {
            $this->addError('admin.common.save_error', 'admin');
        }

        // ????????????????????????
        $builder = $this->formFactory
            ->createBuilder(SearchProductType::class);

        $searchProductModalForm = $builder->getForm();

        // ??????????????????????????????
        $times = [];
        $deliveries = $this->deliveryRepository->findAll();
        foreach ($deliveries as $Delivery) {
            $deliveryTimes = $Delivery->getDeliveryTimes();
            foreach ($deliveryTimes as $DeliveryTime) {
                $times[$Delivery->getId()][$DeliveryTime->getId()] = $DeliveryTime->getDeliveryTime();
            }
        }

        return [
            'form' => $form->createView(),
            'searchProductModalForm' => $searchProductModalForm->createView(),
            'Order' => $Order,
            'shippingDeliveryTimes' => $this->serializer->serialize($times, 'json'),
        ];
    }

    /**
     * @Route("/%eccube_admin_route%/shipping/preview_notify_mail/{id}", requirements={"id" = "\d+"}, name="admin_shipping_preview_notify_mail")
     *
     * @param Shipping $Shipping
     *
     * @return Response
     *
     * @throws \Twig_Error
     */
    public function previewShippingNotifyMail(Shipping $Shipping)
    {
        return new Response($this->mailService->getShippingNotifyMailBody($Shipping, $Shipping->getOrder(), null, true));
    }

    /**
     * @Route("/%eccube_admin_route%/shipping/notify_mail/{id}", requirements={"id" = "\d+"}, name="admin_shipping_notify_mail", methods={"PUT"})
     *
     * @param Shipping $Shipping
     *
     * @return JsonResponse
     *
     * @throws \Twig_Error
     */
    public function notifyMail(Shipping $Shipping)
    {
        $this->isTokenValid();

        $this->mailService->sendShippingNotifyMail($Shipping);

        $Shipping->setMailSendDate(new \DateTime());
        $this->shippingRepository->save($Shipping);
        $this->entityManager->flush();

        return $this->json([
            'mail' => true,
            'shipped' => false,
        ]);
    }
}
