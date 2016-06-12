<?php


namespace TuniPharma\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiceController extends Controller {

    public function ServiceAction() {
        
         return $this->render('MainBundle:Service:Service.html.twig', array());
        
    }

}

