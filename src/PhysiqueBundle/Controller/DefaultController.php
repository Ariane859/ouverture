<?php

namespace PhysiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/physique", name="path_compte_physique")
     */
    public function indexAction()
    {
        $content = $this->get('templating')->render('PhysiqueBundle:Default:index.html.twig');
        return new Response($content);
    }
}   
