<?php

namespace TuniPharma\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pharmacie
 *
 * @ORM\Table(name="pharmacie", indexes={@ORM\Index(name="fk_pharmacien", columns={"pharmacien"}), @ORM\Index(name="fk_codepostal", columns={"codepostal"})})
 * @ORM\Entity
 */
class Pharmacie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="codepostal", type="integer", nullable=false)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="numtel", type="string", length=20, nullable=true)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=true)
     */
    private $email;

    /**
     * @var float
     *
     * @ORM\Column(name="log", type="float", precision=30, scale=20, nullable=true)
     */
    private $log;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", precision=30, scale=20, nullable=true)
     */
    private $lat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Inscription", type="datetime", nullable=false)
     */
    private $dateInscription;

    /**
     * @var \Pharmacien
     *
     * @ORM\ManyToOne(targetEntity="Pharmacien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pharmacien", referencedColumnName="ref")
     * })
     */
    private $pharmacien;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Service", inversedBy="idPharmacie")
     * @ORM\JoinTable(name="pharmacie_service",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_pharmacie", referencedColumnName="ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_service", referencedColumnName="id")
     *   }
     * )
     */
    private $idService;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idService = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Pharmacie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Pharmacie
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     * @return Pharmacie
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Pharmacie
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Pharmacie
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set numtel
     *
     * @param string $numtel
     * @return Pharmacie
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;

        return $this;
    }

    /**
     * Get numtel
     *
     * @return string 
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Pharmacie
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set log
     *
     * @param float $log
     * @return Pharmacie
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Get log
     *
     * @return float 
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set lat
     *
     * @param float $lat
     * @return Pharmacie
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Pharmacie
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set pharmacien
     *
     * @param \TuniPharma\MainBundle\Entity\Pharmacien $pharmacien
     * @return Pharmacie
     */
    public function setPharmacien(\TuniPharma\MainBundle\Entity\Pharmacien $pharmacien = null)
    {
        $this->pharmacien = $pharmacien;

        return $this;
    }

    /**
     * Get pharmacien
     *
     * @return \TuniPharma\MainBundle\Entity\Pharmacien 
     */
    public function getPharmacien()
    {
        return $this->pharmacien;
    }

    /**
     * Add idService
     *
     * @param \TuniPharma\MainBundle\Entity\Service $idService
     * @return Pharmacie
     */
    public function addIdService(\TuniPharma\MainBundle\Entity\Service $idService)
    {
        $this->idService[] = $idService;

        return $this;
    }

    /**
     * Remove idService
     *
     * @param \TuniPharma\MainBundle\Entity\Service $idService
     */
    public function removeIdService(\TuniPharma\MainBundle\Entity\Service $idService)
    {
        $this->idService->removeElement($idService);
    }

    /**
     * Get idService
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdService()
    {
        return $this->idService;
    }
    public function __toString() {
        return "Pharmacie $this->nom";
    }
}
