<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TuniPharma\MainBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TuniPharma\MainBundle\Entity\Pharmacie;
use TuniPharma\MainBundle\Entity\PharmacieGarde;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \DateTime;

class PharmacienController extends Controller {

    public function EspaceAction(Request $request) {
        if (true === $this->container->get('security.context')->isGranted('ROLE_ADMIN')) {
            return new RedirectResponse($this->generateUrl('sonata_admin_dashboard'));
        }
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $this->container->get('security.context')->getToken()->getUser();
        $manager = $this->getDoctrine()->getManager();

        if ($user->getPharmacie() == null) {
            $pharmacie = new Pharmacie();
            $pharmacie->setEtat('demande');
            $pharmacie->setLat(36.89980274562748);
            $pharmacie->setLog(10.189143419265747);
            $repos = $manager->getRepository('MainBundle:Pharmacien');
            $pharmacien = $repos->find($user->getPharmacien());
            $pharmacie->setPharmacien($pharmacien);
            $reposville = $manager->getRepository('MainBundle:Villes');
            $ville = $reposville->findAll();
            $type = 'new';
            $form_pharmacie = $this->createFormBuilder($pharmacie)
                    ->add('lat', 'hidden')
                    ->add('log', 'hidden')
                    ->add('nom', 'text')
                    ->add('adresse', 'text')
                    ->add('codepostal', 'hidden')
                    ->add('type', 'choice', array(
                        'choices' => array('Pharmacie de Jour' => 'Pharmacie de Jour', 'Pharmacie de Nuit' => 'Pharmacie de Nuit')
                    ))
                    ->add('numtel', 'text')
                    ->add('email', 'email')
                    ->getForm();
        } else {
            $repository = $manager->getRepository('MainBundle:Pharmacie');
            $pharmacie = $repository->find($user->getPharmacie());
            $reposville = $manager->getRepository('MainBundle:Villes');
            $ville = $reposville->find($pharmacie->getCodepostal());
            $type = 'old';
            $form_pharmacie = $this->createFormBuilder($pharmacie)
                    ->add('lat', 'hidden')
                    ->add('log', 'hidden')
                    ->add('nom', 'text')
                    ->add('adresse', 'text')
                    ->add('numtel', 'text')
                    ->add('email', 'email')
                    ->getForm();
        }

        $form_pharmacie->handleRequest($request);
        if ($form_pharmacie->isValid()) {
            // ... perform some action, such as saving the task to the database
            $manager->persist($pharmacie);
            $manager->flush();
            $user->setPharmacie($pharmacie->getId());
            $userManager->updateUser($user);
            return $this->render('MainBundle:Default:success.html.twig', array('redirect' => '_EspacePharmacien'));
        }
        $repository = $manager->getRepository('MainBundle:Service');
        $services = $repository->findByEtat('active');
        $array = array();
        foreach ($pharmacie->getIdService() as $key => $value) {
            $array [$key] = $value;
        }
        $result = array();
        foreach ($services as $key => $value) {
            if (in_array($value, $array) === false) {
                $result[] = $value;
            }
        }

        return $this->render('MainBundle:Pharmacien:Espace.html.twig', array('user' => $user, 'pharmacie' => $pharmacie, 'ville' => $ville, 'form_pharmacie' => $form_pharmacie->createView(), 'type' => $type, 'services' => $result));
    }

    public function getGardeAction(Request $request) {

        $manager = $this->getDoctrine()->getManager();
        $type = $request->query->get('type');
        $user = $this->container->get('security.context')->getToken()->getUser();
        $repository = $manager->getRepository('MainBundle:Pharmacie');
        $pharmacie = $repository->find($user->getPharmacie());
        $reposGarde = $manager->getRepository('MainBundle:PharmacieGarde');
        if ($type === 'insert') {
            $response = new Response();
            $gardes = $reposGarde->findByPharmacie($pharmacie);
            foreach ($gardes as $key => $value) {
                $output[] = array($value->getId(), $value->getJour()->format("Y-m-d"));
            }
            $response->headers->set('Content-Type', 'application/json');
            $response->setContent(json_encode($output));
            return $response;
        }
        if ($type === 'read') {
            $response = new Response();
            $gardes = $reposGarde->findByPharmacie($pharmacie);
            foreach ($gardes as $key => $value) {
                $output[] = array($value->getId(), $value->getJour()->format("Y-m-d"));
            }
            $response->headers->set('Content-Type', 'application/json');
            $response->setContent(json_encode($output));
            return $response;
        }
        if ($type === 'create') {
            $jour = $request->query->get('jour');
            $garde = new PharmacieGarde();
            $garde->setJour(DateTime::createFromFormat('Y-m-j', $jour));
            $garde->setPharmacie($pharmacie);
            $manager->persist($garde);
            $manager->flush();
            return new Response($garde->getId());
        }
        if ($type === 'delete') {
            $id = $request->query->get('id');
            $garde = $reposGarde->find($id);
            $manager->remove($garde);
            $manager->flush();
            return new Response('1');
        }
    }

    public function SaveusAction(Request $request) {

        $ids = $request->query->get('idservice');
        $type = $request->query->get('type');
        $manager = $this->getDoctrine()->getManager();
        $reposser = $manager->getRepository('MainBundle:Service');
        $ser = $reposser->find($ids);
        $repository = $manager->getRepository('MainBundle:Pharmacie');
        $user = $this->container->get('security.context')->getToken()->getUser();
        $pharmacie = $repository->find($user->getPharmacie());
        if($type === 'insert'){
            $pharmacie->addIdService($ser);
        }else if($type === 'delete'){
           $pharmacie->removeIdService($ser); 
        }
        $manager->persist($pharmacie);
        $manager->flush();
    }

}
