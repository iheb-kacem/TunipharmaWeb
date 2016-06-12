<?php

namespace TuniPharma\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="fk_pharmacie", columns={"pharmacie"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="client", type="decimal", precision=65, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $client;

    /**
     * @var integer
     *
     * @ORM\Column(name="pharmacie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pharmacie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jour", type="datetime", nullable=false)
     */
    private $jour;

    /**
     * @var integer
     *
     * @ORM\Column(name="evaluation", type="integer", nullable=false)
     */
    private $evaluation;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=2000, nullable=true)
     */
    private $commentaire;



    /**
     * Set client
     *
     * @param string $client
     * @return Commentaire
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set pharmacie
     *
     * @param integer $pharmacie
     * @return Commentaire
     */
    public function setPharmacie($pharmacie)
    {
        $this->pharmacie = $pharmacie;

        return $this;
    }

    /**
     * Get pharmacie
     *
     * @return integer 
     */
    public function getPharmacie()
    {
        return $this->pharmacie;
    }

    /**
     * Set jour
     *
     * @param \DateTime $jour
     * @return Commentaire
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
     * Set evaluation
     *
     * @param integer $evaluation
     * @return Commentaire
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return integer 
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}
