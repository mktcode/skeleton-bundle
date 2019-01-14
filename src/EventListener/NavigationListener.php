<?php

namespace Mktcode\ContaoPwaBundle\EventListener;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;

class NavigationListener
{
    protected $requestStack;
    protected $router;

    public function __construct(RequestStack $requestStack, RouterInterface $router)
    {
        $this->requestStack = $requestStack;
        $this->router = $router;
    }

    public function onGetUserNavigation($arrModules)
    {
        $request = $this->requestStack->getCurrentRequest();

        $arrModules['system']['modules'] = array_merge([
            'pwa' => [
                'label' => 'PWA',
                'class' => 'navigation',
                'href' => $this->router->generate('mktcode_contaopwa_config_index'),
                'isActive' => $request->attributes->get('_route') === 'mktcode_contaopwa_config_index'
            ]
        ], $arrModules['system']['modules']);

        return $arrModules;
    }
}
