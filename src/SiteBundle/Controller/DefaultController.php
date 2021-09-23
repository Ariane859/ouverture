<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/site",name="path_choix")
     */
    public function indexAction()
    {
        $content = $this->get('templating')->render('SiteBundle:Default:index.html.twig');
        return new Response($content);
    }
}
