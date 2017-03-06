<?php

namespace appBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('appBundle:Default:index.html.twig');
    }
    public function helloAction($name)
    {
        return $this->render('appBundle:Default:hello.html.twig', 
            array('name' => $name));
    }
}
