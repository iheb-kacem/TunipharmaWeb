<?php


namespace TuniPharma\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use TuniPharma\MainBundle\Entity\Service;

class AddServiceController extends Controller {

    public function ServiceAction() {
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        $id_pharmacie = $user->getPharmacie();
        
        
        
       
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MainBundle:Service');
    
        $services = $repository->findAll();
       
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('MainBundle:Service');
        
        $query = $repository->createQueryBuilder('s')
            ->select('DISTINCT(s.categorie)')
            ->orderBy('s.categorie', 'ASC')
            ->getQuery();

        $categories = $query->getResult();
        
        
        
        
        
  
        return $this->render('MainBundle:AddService:AddService.html.twig', array(
            'categories' => $categories
        ));
        
    }
    
    
    public function NameAction(Request $request)
    {
        
        $requete = $this->get('request');
        if($requete->getMethod() == 'POST')
            {  
                $name = $_POST['nom']; 
                $categorie = $_POST['categorie'];
                $description = $_POST['description'];
            

 

        $service = new Service();
        $service->setNom($name);
        $service->setCategorie($categorie);
        $service->setDescription($description);
        $service->setEtat('demande');

        $em = $this->getDoctrine()->getManager();
        $em->persist($service);
        $em->flush();
        return $this->render('MainBundle:Default:success.html.twig', array('redirect' => '_EspacePharmacien'));
        
            }   
    }

}

