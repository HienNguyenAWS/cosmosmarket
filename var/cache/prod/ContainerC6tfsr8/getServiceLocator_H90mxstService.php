<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.h90mxst' shared service.

return $this->services['service_locator.h90mxst'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['Mail' => function () {
    $f = function (\Eccube\Entity\MailTemplate $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Eccube\Entity\MailTemplate']) ? $this->services['autowired.Eccube\Entity\MailTemplate'] : ($this->services['autowired.Eccube\Entity\MailTemplate'] = new \Eccube\Entity\MailTemplate())) && false ?: '_'});
}, 'twig' => function () {
    return ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'};
}]);
