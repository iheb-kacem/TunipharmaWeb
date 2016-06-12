<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// src/TuniPharma/MainBundle/Entity/User.php

namespace TuniPharma\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    protected $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    protected $prenom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=8, nullable=true)
     */
    private $cin;
    
    /**
     * @var \Pharmacie
     *
     * @ORM\Column(name="pharmacie", type="integer", nullable=true)
     */
    private $pharmacie;
    
    /**
     * @var \Pharmacie
     *
     * @ORM\Column(name="pharmacien", type="integer", nullable=true)
     */
    private $pharmacien;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getCin()
    {
        return $this->cin;
    }
    
    public function getPharmacie()
    {
        return $this->pharmacie;
    }
    
    public function getPharmacien()
    {
        return $this->pharmacien;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    public function setPharmacie($pharmacie)
    {
        $this->pharmacie = $pharmacie;

        return $this;
    }
    
    public function setPharmacien($pharmacien)
    {
        $this->pharmacien = $pharmacien;

        return $this;
    }
}