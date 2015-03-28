<?php
namespace Gsb\AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Gsb\AppliFraisBundle\Entity\ForfaitLigneRepository")
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
     * @ORM\Column(type="string", length=250,  nullable=true)
     */
    protected $motif;
    
    /**
     * @ORM\ManyToOne(targetEntity="Statut", inversedBy="forfaitLignes")
     * @ORM\JoinColumn(name="statut_id", referencedColumnName="id")
     */
    protected $statut;
    
    /**
     * @ORM\ManyToOne(targetEntity="Fiche", inversedBy="forfaitLignes", cascade={"persist"})
     * @ORM\JoinColumn(name="fiche_id", referencedColumnName="id")
     *
     */
    protected $fiche;

    /**
     *
     * @ORM\OneToMany(targetEntity="FraisForfait", mappedBy="forfaitLigne", cascade={"persist"})
     */
    protected $fraisForfaits;

    public function __construct()
    {
        $this->fraisForfaits = new ArrayCollection();
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
     * Set statut
     *
     * @param \Gsb\AppliFraisBundle\Entity\Statut $statut
     * @return ForfaitLigne
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
     * @return ForfaitLigne
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
     * Add fraisForfaits
     *
     * @param \Gsb\AppliFraisBundle\Entity\FraisForfait $fraisForfaits
     * @return ForfaitLigne
     */
    public function addFraisForfait(\Gsb\AppliFraisBundle\Entity\FraisForfait $fraisForfaits)
    {
        $this->fraisForfaits[] = $fraisForfaits;

        return $this;
    }

    /**
     * Remove fraisForfaits
     *
     * @param \Gsb\AppliFraisBundle\Entity\FraisForfait $fraisForfaits
     */
    public function removeFraisForfait(\Gsb\AppliFraisBundle\Entity\FraisForfait $fraisForfaits)
    {
        $this->fraisForfaits->removeElement($fraisForfaits);
    }

    /**
     * Get fraisForfaits
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFraisForfaits()
    {
        return $this->fraisForfaits;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return ForfaitLigne
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

    public function getTotalLigneForfait()
    {
        $tot = 0;

        foreach ($this->fraisForfaits as $frais){
            $quantite = $frais->getQuantite();
            $montant = $frais->getForfait()->getMontant();
            $tot += $quantite*$montant;
        }
        return $tot;
    }

    public function getTotalLigneForfaitValide()
    {
        $tot = 0;

        foreach ($this->fraisForfaits as $frais){
            if ($this->getStatut()->getLibelle() == 'Validée'){
                $quantite = $frais->getQuantite();
                $montant = $frais->getForfait()->getMontant();
                $tot += $quantite*$montant;
            }
        }
        return $tot;
    }
}
