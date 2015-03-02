<?php
namespace Gsb\AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Gsb\AppliFraisBundle\Entity\FicheRepository")
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
     * @ORM\Column(type="boolean",  nullable=true, options={"default":false})
     */
    protected $refusLigne;

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
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return Fiche
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

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
     * Set employe
     *
     * @param \Gsb\AppliFraisBundle\Entity\Employe $employe
     * @return Fiche
     */
    public function setEmploye(\Gsb\AppliFraisBundle\Entity\Employe $employe = null)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \Gsb\AppliFraisBundle\Entity\Employe 
     */
    public function getEmploye()
    {
        return $this->employe;
    }

    /**
     * Set etat
     *
     * @param \Gsb\AppliFraisBundle\Entity\Etat $etat
     * @return Fiche
     */
    public function setEtat(\Gsb\AppliFraisBundle\Entity\Etat $etat = null)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \Gsb\AppliFraisBundle\Entity\Etat 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Add horsForfaitLignes
     *
     * @param \Gsb\AppliFraisBundle\Entity\HorsForfaitLigne $horsForfaitLignes
     * @return Fiche
     */
    public function addHorsForfaitLigne(\Gsb\AppliFraisBundle\Entity\HorsForfaitLigne $horsForfaitLignes)
    {
        $this->horsForfaitLignes[] = $horsForfaitLignes;

        return $this;
    }

    /**
     * Remove horsForfaitLignes
     *
     * @param \Gsb\AppliFraisBundle\Entity\HorsForfaitLigne $horsForfaitLignes
     */
    public function removeHorsForfaitLigne(\Gsb\AppliFraisBundle\Entity\HorsForfaitLigne $horsForfaitLignes)
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
     * @param \Gsb\AppliFraisBundle\Entity\ForfaitLigne $forfaitLignes
     * @return Fiche
     */
    public function addForfaitLigne(\Gsb\AppliFraisBundle\Entity\ForfaitLigne $forfaitLignes)
    {
        $this->forfaitLignes[] = $forfaitLignes;

        return $this;
    }

    /**
     * Remove forfaitLignes
     *
     * @param \Gsb\AppliFraisBundle\Entity\ForfaitLigne $forfaitLignes
     */
    public function removeForfaitLigne(\Gsb\AppliFraisBundle\Entity\ForfaitLigne $forfaitLignes)
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

    public function __toString()
    {

      return strval($this->getId());
    }

    /**
     * Set refusLigne
     *
     * @param boolean $refusLigne
     * @return Fiche
     */
    public function setRefusLigne($refusLigne)
    {
        $this->refusLigne = $refusLigne;

        return $this;
    }

    /**
     * Get refusLigne
     *
     * @return boolean 
     */
    public function getRefusLigne()
    {
        return $this->refusLigne;
    }

    public function getTotalHorsForfait()
    {
        $tot = 0;
        foreach($this->horsForfaitLignes as $ligne){
            $tot += $ligne->getMontant();
        }
        return $tot;
    }

    public function getTotalHorsForfaitValide()
    {
        $tot = 0;
        foreach($this->horsForfaitLignes as $ligne){
            if ($ligne->getStatut()->getLibelle() == 'Validée'){
                $tot += $ligne->getMontant();
            }
        }
        return $tot;
    }

    public function getTotalFiche()
    {
        $tot = $this->getTotalHorsForfait();

        foreach ($this->getForfaitLignes() as $ligne) {
            $tot += $ligne->getTotalLigneForfait();
        }
        return $tot;
    }

    public function getTotalFicheValide()
    {
        $tot = $this->getTotalHorsForfaitValide();

        foreach ($this->getForfaitLignes() as $ligne) {
            $tot += $ligne->getTotalLigneForfaitValide();
        }
        return $tot;
    }
}
