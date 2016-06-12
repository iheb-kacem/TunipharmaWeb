<?php

namespace TuniPharma\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainBundle:Default:index.html.twig', array());
    }
    public function blogAction()
    {
        return $this->render('MainBundle:Default:blog.html.twig', array());
    }
    public function contactAction()
    {
        return $this->render('MainBundle:Default:contact.html.twig', array());
    }
}
