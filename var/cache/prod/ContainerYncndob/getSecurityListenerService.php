<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\EventListener\SecurityListener' shared autowired service.

include_once $this->targetDirs[3].'/src/Eccube/EventListener/SecurityListener.php';

return $this->services['Eccube\EventListener\SecurityListener'] = new \Eccube\EventListener\SecurityListener(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\CartService']) ? $this->services['Eccube\Service\CartService'] : $this->getCartServiceService()) && false ?: '_'}, ${($_ = isset($this->services['eccube.purchase.flow.cart']) ? $this->services['eccube.purchase.flow.cart'] : $this->load('getEccube_Purchase_Flow_CartService.php')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});