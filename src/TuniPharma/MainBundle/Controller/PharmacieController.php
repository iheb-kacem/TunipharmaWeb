<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TuniPharma\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TuniPharma\MainBundle\Entity\Pharmacie;
use TuniPharma\MainBundle\Entity\PharmacieGarde;

class PharmacieController extends Controller {

    public function PharmacieAction($id) {
        $manager = $this->getDoctrine()->getManager();
        $repository = $manager->getRepository('MainBundle:Pharmacie');
        $pharmacie = $repository->find($id);
        $reposville = $manager->getRepository('MainBundle:Villes');
        $ville = $reposville->find($pharmacie->getCodepostal());
        $reposGarde = $this->getDoctrine()->getManager()->getRepository('MainBundle:PharmacieGarde');

        $gardes = array();
        foreach ($reposGarde->findBy(array('pharmacie' => $pharmacie), array('jour' => 'ASC')) as $key => $value) {
            if ($value->getJour() >= new \DateTime('-1 day')) {
                $gardes[] = $value->getJour()->format("d - M - Y");
            }
            if (count($gardes) === 10) {
                break;
            }
        }

        return $this->render('MainBundle:Pharmacie:Pharmacie.html.twig', array('ph' => $pharmacie, 'ville' => $ville, 'garde' => $gardes));
    }

}
