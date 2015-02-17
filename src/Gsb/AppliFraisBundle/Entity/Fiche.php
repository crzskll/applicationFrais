<?php
namespace Gsb\AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fiche")
 */
class Fiche
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nbJustificatifs;

    /**
     * @ORM\Column(type="date")
     */
    protected $dateModification;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $montantValide;
    
    /**
     * @ORM\ManyToOne(targetEntity="Employe", inversedBy="fiches")
     * @ORM\JoinColumn(name="employe_id", referencedColumnName="id")
     */
    protected $employe;
    
    /**
     * @ORM\ManyToOne(targetEntity="Etat", inversedBy="fiches")
     * @ORM\JoinColumn(name="etat_id", referencedColumnName="id")
     */
    protected $etat;
    
    /**
     * @ORM\OneToMany(targetEntity="HorsForfaitLigne", mappedBy="fiche")
     */
    protected $horsForfaitLignes;
    
    /**
     * @ORM\OneToMany(targetEntity="ForfaitLigne", mappedBy="fiche")
     */
    protected $forfaitLignes;
    
    public function __construct()
    {
        $this->horsForfaitLignes = new ArrayCollection();
        $this->forfaitLignes = new ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     * @return Fiche
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nbJustificatif
     *
     * @param integer $nbJustificatif
     * @return Fiche
     */
    public function setNbJustificatif($nbJustificatif)
    {
        $this->nbJustificatif = $nbJustificatif;

        return $this;
    }

    /**
     * Get nbJustificatif
     *
     * @return integer 
     */
    public function getNbJustificatif()
    {
        return $this->nbJustificatif;
    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return Fiche
     */
    public function setDateModification()
    {
        $this->dateModification = new \DateTime();

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime 
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Set montantValide
     *
     * @param string $montantValide
     * @return Fiche
     */
    public function setMontantValide($montantValide)
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    /**
     * Get montantValide
     *
     * @return string 
     */
    public function getMontantValide()
    {
        return $this->montantValide;
    }

    /**
     * Set nbJustificatifs
     *
     * @param integer $nbJustificatifs
     * @return Fiche
     */
    public function setNbJustificatifs($nbJustificatifs)
    {
        $this->nbJustificatifs = $nbJustificatifs;

        return $this;
    }

    /**
     * Get nbJustificatifs
     *
     * @return integer 
     */
    public function getNbJustificatifs()
    {
        return $this->nbJustificatifs;
    }

    /**
     * Set employe
     *
     * @param \contexteGSB\appliFraisBundle\Entity\Employe $employe
     * @return Fiche
     */
    public function setEmploye(\contexteGSB\appliFraisBundle\Entity\Employe $employe = null)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \contexteGSB\appliFraisBundle\Entity\Employe 
     */
    public function getEmploye()
    {
        return $this->employe;
    }

    /**
     * Set etat
     *
     * @param \contexteGSB\appliFraisBundle\Entity\Etat $etat
     * @return Fiche
     */
    public function setEtat(\contexteGSB\appliFraisBundle\Entity\Etat $etat = null)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \contexteGSB\appliFraisBundle\Entity\Etat 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Add horsForfaitLignes
     *
     * @param \contexteGSB\appliFraisBundle\Entity\HorsForfaitLigne $horsForfaitLignes
     * @return Fiche
     */
    public function addHorsForfaitLigne(\contexteGSB\appliFraisBundle\Entity\HorsForfaitLigne $horsForfaitLignes)
    {
        $this->horsForfaitLignes[] = $horsForfaitLignes;

        return $this;
    }

    /**
     * Remove horsForfaitLignes
     *
     * @param \contexteGSB\appliFraisBundle\Entity\HorsForfaitLigne $horsForfaitLignes
     */
    public function removeHorsForfaitLigne(\contexteGSB\appliFraisBundle\Entity\HorsForfaitLigne $horsForfaitLignes)
    {
        $this->horsForfaitLignes->removeElement($horsForfaitLignes);
    }

    /**
     * Get horsForfaitLignes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHorsForfaitLignes()
    {
        return $this->horsForfaitLignes;
    }

    /**
     * Add forfaitLignes
     *
     * @param \contexteGSB\appliFraisBundle\Entity\ForfaitLigne $forfaitLignes
     * @return Fiche
     */
    public function addForfaitLigne(\contexteGSB\appliFraisBundle\Entity\ForfaitLigne $forfaitLignes)
    {
        $this->forfaitLignes[] = $forfaitLignes;

        return $this;
    }

    /**
     * Remove forfaitLignes
     *
     * @param \contexteGSB\appliFraisBundle\Entity\ForfaitLigne $forfaitLignes
     */
    public function removeForfaitLigne(\contexteGSB\appliFraisBundle\Entity\ForfaitLigne $forfaitLignes)
    {
        $this->forfaitLignes->removeElement($forfaitLignes);
    }

    /**
     * Get forfaitLignes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getForfaitLignes()
    {
        return $this->forfaitLignes;
    }
}