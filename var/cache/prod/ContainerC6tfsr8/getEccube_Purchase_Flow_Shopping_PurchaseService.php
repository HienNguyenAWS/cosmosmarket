<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.purchase.flow.shopping.purchase' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php';
include_once $this->targetDirs[3].'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php';
include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/PurchaseProcessor.php';
include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/Processor/PreOrderIdValidator.php';
include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/Processor/AbstractPurchaseProcessor.php';
include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/Processor/CustomerPurchaseInfoProcessor.php';
include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/Processor/OrderUpdateProcessor.php';

return $this->services['eccube.purchase.flow.shopping.purchase'] = new \Doctrine\Common\Collections\ArrayCollection([0 => new \Eccube\Service\PurchaseFlow\Processor\PreOrderIdValidator(${($_ = isset($this->services['Eccube\Service\CartService']) ? $this->services['Eccube\Service\CartService'] : $this->getCartServiceService()) && false ?: '_'}), 1 => ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\PointProcessor']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\PointProcessor'] : $this->load('getPointProcessorService.php')) && false ?: '_'}, 2 => ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\StockReduceProcessor']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\StockReduceProcessor'] : $this->load('getStockReduceProcessorService.php')) && false ?: '_'}, 3 => new \Eccube\Service\PurchaseFlow\Processor\CustomerPurchaseInfoProcessor(), 4 => new \Eccube\Service\PurchaseFlow\Processor\OrderUpdateProcessor(${($_ = isset($this->services['Eccube\Repository\Master\OrderStatusRepository']) ? $this->services['Eccube\Repository\Master\OrderStatusRepository'] : $this->load('getOrderStatusRepositoryService.php')) && false ?: '_'})]);
