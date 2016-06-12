<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace TuniPharma\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use \DateTime;

class RechercheController extends Controller
{
    public function SearchAction() {
        $manager = $this->getDoctrine()->getManager();
        $reposPharma = $manager->getRepository('MainBundle:Pharmacie');

        $pharmacies = $reposPharma->findBy(array('etat' => 'active'));
        $reposVille = $manager->getRepository('MainBundle:Villes');
        $reposgarde = $manager->getRepository('MainBundle:PharmacieGarde');
        $today = new \DateTime();
        foreach ($pharmacies as $key => $value) {
            $ph = array();
            $ph['pharmacie'] = $value;
            $ph['ville'] = $reposVille->find($value->getCodepostal());
            
            if($reposgarde->findOneBy(array('pharmacie' => $value, 'jour' => $today)) !== null){
                $ph['garde'] = 'true';
            }else{
                $ph['garde'] = 'false';
            }
            $pharmacies[$key] = $ph;
        }


        $query = $reposVille->createQueryBuilder('v')
                ->select('DISTINCT(v.gouvernorat)')
                ->orderBy('v.gouvernorat', 'ASC')
                ->getQuery();

        $gouvernorats = $query->getResult();

        /* map */


        /* end map */

        return $this->render('MainBundle:Recherche:Search.html.twig', array(
                    'Pharmacies' => $pharmacies,
                    'gouvernorats' => $gouvernorats,
        ));
    }

    public function delegationsAction(Request $request) {
        $gouvernorat = $request->query->get('gouvernorat');
        $manager = $this->getDoctrine()->getManager();
        $reposVille = $manager->getRepository('MainBundle:Villes');
        $query = $reposVille->createQueryBuilder('v')
                ->select('DISTINCT(v.delegation)')
                ->where('v.gouvernorat = :gouvernorat')
                ->setParameter('gouvernorat', $gouvernorat)
                ->orderBy('v.delegation', 'ASC')
                ->getQuery();
        $delegations = $query->getResult();
        return new JsonResponse($delegations);
    }

}


