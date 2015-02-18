<?php
namespace Gsb\AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="etat")
 */
class Etat
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $libelle;

    /**
     * @ORM\OneToMany(targetEntity="Fiche", mappedBy="etat")
     */
    protected $fiches;

    public function __construct()
    {
        $this->fiches = new ArrayCollection();
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
     * @return Etat
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
     * Add fiches
     *
     * @param \Gsb\AppliFraisBundle\Entity\Fiche $fiches
     * @return Etat
     */
    public function addFich(\Gsb\AppliFraisBundle\Entity\Fiche $fiches)
    {
        $this->fiches[] = $fiches;

        return $this;
    }

    /**
     * Remove fiches
     *
     * @param \Gsb\AppliFraisBundle\Entity\Fiche $fiches
     */
    public function removeFich(\Gsb\AppliFraisBundle\Entity\Fiche $fiches)
    {
        $this->fiches->removeElement($fiches);
    }

    /**
     * Get fiches
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFiches()
    {
        return $this->fiches;
    }

    public function __toString()
    {
      return $this->getLibelle();
    }
}
