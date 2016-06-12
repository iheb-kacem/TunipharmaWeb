<?php

namespace TuniPharma\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utils
 *
 * @ORM\Table(name="utils")
 * @ORM\Entity
 */
class Utils
{
    /**
     * @var string
     *
     * @ORM\Column(name="var", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $var;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=200, nullable=true)
     */
    private $valeur;



    /**
     * Get var
     *
     * @return string 
     */
    public function getVar()
    {
        return $this->var;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     * @return Utils
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string 
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}
