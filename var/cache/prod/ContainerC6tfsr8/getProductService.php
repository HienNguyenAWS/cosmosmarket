<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'autowired.Eccube\Entity\Product' shared autowired service.

include_once $this->targetDirs[3].'/src/Eccube/Entity/AbstractEntity.php';
include_once $this->targetDirs[3].'/app/Plugin/ghtk/Entity/GhtkProductTrait.php';
include_once $this->targetDirs[3].'/app/proxy/entity/Product.php';

return $this->services['autowired.Eccube\Entity\Product'] = new \Eccube\Entity\Product();
