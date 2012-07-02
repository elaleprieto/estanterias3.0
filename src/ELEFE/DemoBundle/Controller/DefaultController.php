<?php

namespace ELEFE\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('ELEFEDemoBundle:Default:index.html.twig', array('name' => $name));
    }
}
