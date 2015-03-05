<?php

namespace Gsb\AppliFraisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="Gsb\AppliFraisBundle\Entity\EmployeRepository")
 * @ORM\Table(name="employe")
 */
class Employe implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $adresse;

    /**
     * @ORM\Column(type="string", length=5)
     */
    protected $codePostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $ville;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $login;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $motDePasse;
    
    /**
     * @ORM\Column(type="date")
     */
    protected $dateEmbauche;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $poste;
    
    /**
     * @ORM\OneToMany(targetEntity="Fiche", mappedBy="employe")
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
     * Set nom
     *
     * @param string $nom
     * @return Employe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Employe
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Employe
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Employe
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Employe
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Employe
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     * @return Employe
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string 
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set dateEmbauche
     *
     * @param \DateTime $dateEmbauche
     * @return Employe
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get dateEmbauche
     *
     * @return \DateTime 
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set poste
     *
     * @param string $poste
     * @return Employe
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string 
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Add fiches
     *
     * @param \Gsb\AppliFraisBundle\Entity\Fiche $fiches
     * @return Employe
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
      return $this->getLogin();
    }



    public function getUsername()
    {
        return $this->login;
    }
 
    public function getPassword()
    {
        return $this->motDePasse;
    }
 
    public function getRoles()
    {   
        $role = 'ROLE_'.strtoupper($this->poste);
        return array($role);
    }
 
    public function getSalt()
    {
        return null;
    }
 
    public function eraseCredentials()
    {
 
    }
 
    public function equals(UserInterface $user)
    {
        return $user->getUsername() == $this->getUsername();
    }
}
