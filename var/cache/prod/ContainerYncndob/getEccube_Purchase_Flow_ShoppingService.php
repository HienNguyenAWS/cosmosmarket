<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.purchase.flow.shopping' shared service.

include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/PurchaseFlow.php';
include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/ItemHolderPreprocessor.php';
include_once $this->targetDirs[3].'/app/Plugin/ghtk/Service/PurchaseFlow/GHTKPreprocessor.php';

$this->services['eccube.purchase.flow.shopping'] = $instance = new \Eccube\Service\PurchaseFlow\PurchaseFlow();

$instance->setFlowType('shopping');
$instance->setItemValidators(${($_ = isset($this->services['eccube.purchase.flow.shopping.item_validators']) ? $this->services['eccube.purchase.flow.shopping.item_validators'] : $this->load('getEccube_Purchase_Flow_Shopping_ItemValidatorsService.php')) && false ?: '_'});
$instance->setItemHolderValidators(${($_ = isset($this->services['eccube.purchase.flow.shopping.holder_validators']) ? $this->services['eccube.purchase.flow.shopping.holder_validators'] : $this->load('getEccube_Purchase_Flow_Shopping_HolderValidatorsService.php')) && false ?: '_'});
$instance->setItemHolderPreprocessors(${($_ = isset($this->services['eccube.purchase.flow.shopping.holder_preprocessors']) ? $this->services['eccube.purchase.flow.shopping.holder_preprocessors'] : $this->load('getEccube_Purchase_Flow_Shopping_HolderPreprocessorsService.php')) && false ?: '_'});
$instance->setDiscountProcessors(${($_ = isset($this->services['eccube.purchase.flow.shopping.discount_processors']) ? $this->services['eccube.purchase.flow.shopping.discount_processors'] : $this->load('getEccube_Purchase_Flow_Shopping_DiscountProcessorsService.php')) && false ?: '_'});
$instance->setItemHolderPostValidators(${($_ = isset($this->services['eccube.purchase.flow.shopping.holder_post_validators']) ? $this->services['eccube.purchase.flow.shopping.holder_post_validators'] : $this->load('getEccube_Purchase_Flow_Shopping_HolderPostValidatorsService.php')) && false ?: '_'});
$instance->setPurchaseProcessors(${($_ = isset($this->services['eccube.purchase.flow.shopping.purchase']) ? $this->services['eccube.purchase.flow.shopping.purchase'] : $this->load('getEccube_Purchase_Flow_Shopping_PurchaseService.php')) && false ?: '_'});
$instance->addItemHolderPreprocessor(new \Plugin\ghtk\Service\PurchaseFlow\GHTKPreprocessor(${($_ = isset($this->services['Eccube\Repository\BaseInfoRepository']) ? $this->services['Eccube\Repository\BaseInfoRepository'] : $this->getBaseInfoRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\ghtk\Repository\ConfigRepository']) ? $this->services['Plugin\ghtk\Repository\ConfigRepository'] : $this->load('getConfigRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Plugin\ghtk\Service\GhtkApi']) ? $this->services['Plugin\ghtk\Service\GhtkApi'] : $this->load('getGhtkApiService.php')) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\Master\PrefRepository']) ? $this->services['Eccube\Repository\Master\PrefRepository'] : $this->load('getPrefRepositoryService.php')) && false ?: '_'}));

return $instance;
