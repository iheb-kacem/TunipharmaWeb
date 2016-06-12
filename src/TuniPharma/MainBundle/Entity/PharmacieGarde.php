<?php

namespace TuniPharma\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PharmacieGarde
 *
 * @ORM\Table(name="pharmacie_garde", indexes={@ORM\Index(name="UNIQ_9DD283755FC19434", columns={"pharmacie"})})
 * @ORM\Entity
 */
class PharmacieGarde
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jour", type="date", nullable=false)
     */
    private $jour;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Pharmacie
     *
     * @ORM\ManyToOne(targetEntity="Pharmacie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pharmacie", referencedColumnName="ID")
     * })
     */
    private $pharmacie;



    /**
     * Set jour
     *
     * @param \DateTime $jour
     * @return PharmacieGarde
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return \DateTime 
     */
    public function getJour()
    {
        return $this->jour;
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
     * Set pharmacie
     *
     * @param \TuniPharma\MainBundle\Entity\Pharmacie $pharmacie
     * @return PharmacieGarde
     */
    public function setPharmacie(\TuniPharma\MainBundle\Entity\Pharmacie $pharmacie = null)
    {
        $this->pharmacie = $pharmacie;

        return $this;
    }

    /**
     * Get pharmacie
     *
     * @return \TuniPharma\MainBundle\Entity\Pharmacie 
     */
    public function getPharmacie()
    {
        return $this->pharmacie;
    }
}
