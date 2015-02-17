<?php
namespace Gsb\AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="forfaitLigne")
 */
class ForfaitLigne
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     * @ORM\Column(type="integer")
     */
    protected $nbKm;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $nbEtape;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $nbNuit;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $nbRepas;
    
    /**
     * @ORM\ManyToOne(targetEntity="Statut", inversedBy="forfaitLignes")
     * @ORM\JoinColumn(name="statut_id", referencedColumnName="id")
     */
    protected $statut;
    
    /**
     * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="forfaitLignes")
     * @ORM\JoinColumn(name="fiche_id", referencedColumnName="id")
     */
    protected $fiche;

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
     * Set nbKm
     *
     * @param integer $nbKm
     * @return ForfaitLigne
     */
    public function setNbKm($nbKm)
    {
        $this->nbKm = $nbKm;

        return $this;
    }

    /**
     * Get nbKm
     *
     * @return integer 
     */
    public function getNbKm()
    {
        return $this->nbKm;
    }

    /**
     * Set nbEtape
     *
     * @param integer $nbEtape
     * @return ForfaitLigne
     */
    public function setNbEtape($nbEtape)
    {
        $this->nbEtape = $nbEtape;

        return $this;
    }

    /**
     * Get nbEtape
     *
     * @return integer 
     */
    public function getNbEtape()
    {
        return $this->nbEtape;
    }

    /**
     * Set nbNuit
     *
     * @param integer $nbNuit
     * @return ForfaitLigne
     */
    public function setNbNuit($nbNuit)
    {
        $this->nbNuit = $nbNuit;

        return $this;
    }

    /**
     * Get nbNuit
     *
     * @return integer 
     */
    public function getNbNuit()
    {
        return $this->nbNuit;
    }

    /**
     * Set nbRepas
     *
     * @param integer $nbRepas
     * @return ForfaitLigne
     */
    public function setNbRepas($nbRepas)
    {
        $this->nbRepas = $nbRepas;

        return $this;
    }

    /**
     * Get nbRepas
     *
     * @return integer 
     */
    public function getNbRepas()
    {
        return $this->nbRepas;
    }

    /**
     * Set statut
     *
     * @param \contexteGSB\appliFraisBundle\Entity\Statut $statut
     * @return ForfaitLigne
     */
    public function setStatut(\contexteGSB\appliFraisBundle\Entity\Statut $statut = null)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return \contexteGSB\appliFraisBundle\Entity\Statut 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set fiche
     *
     * @param \contexteGSB\appliFraisBundle\Entity\Fiche $fiche
     * @return ForfaitLigne
     */
    public function setFiche(\contexteGSB\appliFraisBundle\Entity\Fiche $fiche = null)
    {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get fiche
     *
     * @return \contexteGSB\appliFraisBundle\Entity\Fiche 
     */
    public function getFiche()
    {
        return $this->fiche;
    }
}
