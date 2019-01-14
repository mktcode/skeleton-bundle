<?php

namespace Mktcode\ContaoPwaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConfigController extends AbstractController
{
    /**
     * @Route("/contao/pwa/config", defaults={"_scope" = "backend", "_token_check": true})
     *
     * @return Response
     */
    public function indexAction(): Response
    {
        return new Response($this->get('twig')->render('@MktcodeContaoPwa/index.html.twig'));
    }
}
