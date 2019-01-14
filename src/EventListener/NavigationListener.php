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
            'hello' => [
                'label' => 'PWA',
                'class' => 'navigation',
                'href' => $this->router->generate('mktcode_contao_pwa_bundle_config'),
                'isActive' => $request->attributes->get('_route') === 'mktcode_contao_pwa_bundle_config'
            ]
        ], $arrModules['system']['modules']);

        return $arrModules;
    }
}
