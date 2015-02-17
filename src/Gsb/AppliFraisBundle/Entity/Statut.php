<?php
namespace Gsb\AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="statut")
 */
class Statut
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $libelle;
    
    /**
     * @ORM\OneToMany(targetEntity="HorsForfaitLigne", mappedBy="statut")
     */
    protected $horsForfaitLignes;

    /**
     * @ORM\OneToMany(targetEntity="ForfaitLigne", mappedBy="statut")
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
     * Set libelle
     *
     * @param string $libelle
     * @return Statut
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
     * Add horsForfaitLignes
     *
     * @param \contexteGSB\appliFraisBundle\Entity\HorsForfaitLigne $horsForfaitLignes
     * @return Statut
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
     * @return Statut
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
