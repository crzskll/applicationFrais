<?php
namespace Gsb\AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Gsb\AppliFraisBundle\Entity\HorsForfaitLigneRepository")
 * @ORM\Table(name="horsForfaitLigne")
 */
class HorsForfaitLigne
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
     * @ORM\Column(type="string", length=255)
     */
    protected $libelle;
    
     /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $montant;

    /**
     * @ORM\Column(type="string", length=250,  nullable=true)
     */
    protected $motif;
    
    /**
     * @ORM\ManyToOne(targetEntity="Statut", inversedBy="horsForfaitLignes", cascade={"persist"})
     * @ORM\JoinColumn(name="statut_id", referencedColumnName="id", nullable=false)
     */
    protected $statut;
    
    /**
     * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="horsForfaitLignes", cascade={"persist"})
     * @ORM\JoinColumn(name="fiche_id", referencedColumnName="id", nullable=false)
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
     * Set date
     *
     * @param \DateTime $date
     * @return HorsForfaitLigne
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
     * Set libelle
     *
     * @param string $libelle
     * @return HorsForfaitLigne
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return HorsForfaitLigne
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set statut
     *
     * @param \Gsb\AppliFraisBundle\Entity\Statut $statut
     * @return HorsForfaitLigne
     */
    public function setStatut(\Gsb\AppliFraisBundle\Entity\Statut $statut = null)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return \Gsb\AppliFraisBundle\Entity\Statut 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set fiche
     *
     * @param \Gsb\AppliFraisBundle\Entity\Fiche $fiche
     * @return HorsForfaitLigne
     */
    public function setFiche(\Gsb\AppliFraisBundle\Entity\Fiche $fiche = null)
    {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get fiche
     *
     * @return \Gsb\AppliFraisBundle\Entity\Fiche 
     */
    public function getFiche()
    {
        return $this->fiche;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return HorsForfaitLigne
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif()
    {
        return $this->motif;
    }
}
