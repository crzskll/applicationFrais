<?php

namespace Proxies\__CG__\Gsb\AppliFraisBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ForfaitLigne extends \Gsb\AppliFraisBundle\Entity\ForfaitLigne implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'nbKm', 'nbEtape', 'nbNuit', 'nbRepas', 'statut', 'fiche');
        }

        return array('__isInitialized__', 'id', 'nbKm', 'nbEtape', 'nbNuit', 'nbRepas', 'statut', 'fiche');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ForfaitLigne $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbKm($nbKm)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbKm', array($nbKm));

        return parent::setNbKm($nbKm);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbKm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbKm', array());

        return parent::getNbKm();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbEtape($nbEtape)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbEtape', array($nbEtape));

        return parent::setNbEtape($nbEtape);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbEtape()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbEtape', array());

        return parent::getNbEtape();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbNuit($nbNuit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbNuit', array($nbNuit));

        return parent::setNbNuit($nbNuit);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbNuit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbNuit', array());

        return parent::getNbNuit();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbRepas($nbRepas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbRepas', array($nbRepas));

        return parent::setNbRepas($nbRepas);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbRepas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbRepas', array());

        return parent::getNbRepas();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(\Gsb\AppliFraisBundle\Entity\Statut $statut = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', array($statut));

        return parent::setStatut($statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', array());

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setFiche(\Gsb\AppliFraisBundle\Entity\Fiche $fiche = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFiche', array($fiche));

        return parent::setFiche($fiche);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiche()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiche', array());

        return parent::getFiche();
    }

}