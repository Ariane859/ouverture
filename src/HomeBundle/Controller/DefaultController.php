<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/home",name="path_home")
     */
    public function indexAction()
    {
        $content = $this->get('templating')->render('default/index.html.twig');
        return new Response($content);
    }
}
