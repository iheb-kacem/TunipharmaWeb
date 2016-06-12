<?php

namespace TuniPharma\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity
 */
class Service
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=100, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000, nullable=true)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pharmacie", mappedBy="idService")
     */
    private $idPharmacie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPharmacie = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Service
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
     * Set categorie
     *
     * @param string $categorie
     * @return Service
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Service
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
     * Set description
     *
     * @param string $description
     * @return Service
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add idPharmacie
     *
     * @param \TuniPharma\MainBundle\Entity\Pharmacie $idPharmacie
     * @return Service
     */
    public function addIdPharmacie(\TuniPharma\MainBundle\Entity\Pharmacie $idPharmacie)
    {
        $this->idPharmacie[] = $idPharmacie;

        return $this;
    }

    /**
     * Remove idPharmacie
     *
     * @param \TuniPharma\MainBundle\Entity\Pharmacie $idPharmacie
     */
    public function removeIdPharmacie(\TuniPharma\MainBundle\Entity\Pharmacie $idPharmacie)
    {
        $this->idPharmacie->removeElement($idPharmacie);
    }

    /**
     * Get idPharmacie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPharmacie()
    {
        return $this->idPharmacie;
    }
}
