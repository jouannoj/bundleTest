<?php

namespace JXF\Bundle\bundleTest\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/bt", name="bttest")
 */
class BTController extends Controller {

    /**
     * * @Route("/", name="index")
     * @Route("/index", name="homepage")
     
     */
    public function indexAction() {
var_dump($request = $this->container->get('request')->get('_route'));
        return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/index2", name="homepage2")
     * @Route("/", name="index2")
     */
    public function index2Action() {
var_dump($request = $this->container->get('request')->get('_route'));
        return $this->render('default/index.html.twig');
    }

}
