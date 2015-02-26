<?php
namespace Gsb\AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Gsb\AppliFraisBundle\Entity\FraisForfaitRepository")
 * @ORM\Table(name="fraisForfait")
 */
class FraisForfait
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
    protected $quantite;
    
    /**
     * @ORM\ManyToOne(targetEntity="Forfait", inversedBy="fraisForfaits")
     * @ORM\JoinColumn(name="forfait_id", referencedColumnName="id")
     */
    protected $forfait;

    /**
     * @ORM\ManyToOne(targetEntity="ForfaitLigne", inversedBy="fraisForfaits")
     * @ORM\JoinColumn(name="forfaitLigne_id", referencedColumnName="id")
     */
    protected $forfaitLigne;


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
     * Set quantite
     *
     * @param integer $quantite
     * @return FraisForfait
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set forfait
     *
     * @param \Gsb\AppliFraisBundle\Entity\Forfait $forfait
     * @return FraisForfait
     */
    public function setForfait(\Gsb\AppliFraisBundle\Entity\Forfait $forfait = null)
    {
        $this->forfait = $forfait;

        return $this;
    }

    /**
     * Get forfait
     *
     * @return \Gsb\AppliFraisBundle\Entity\Forfait 
     */
    public function getForfait()
    {
        return $this->forfait;
    }

    /**
     * Set forfaitLigne
     *
     * @param \Gsb\AppliFraisBundle\Entity\ForfaitLigne $forfaitLigne
     * @return FraisForfait
     */
    public function setForfaitLigne(\Gsb\AppliFraisBundle\Entity\ForfaitLigne $forfaitLigne = null)
    {
        $this->forfaitLigne = $forfaitLigne;

        return $this;
    }

    /**
     * Get forfaitLigne
     *
     * @return \Gsb\AppliFraisBundle\Entity\ForfaitLigne 
     */
    public function getForfaitLigne()
    {
        return $this->forfaitLigne;
    }
}
