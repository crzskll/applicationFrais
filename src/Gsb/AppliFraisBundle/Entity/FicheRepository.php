<?php

namespace Gsb\AppliFraisBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * FicheRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FicheRepository extends EntityRepository
{
	public function ficheByDate($visiteur, $dateDeb, $dateFin)
  	{
	  	$qb = $this->createQueryBuilder('f');

	    $qb
	      ->where('f.employe = :visiteur')
	      	->setParameter('visiteur', $visiteur)
	      ->andWhere('f.date BETWEEN :start AND :end')
		    ->setParameter('start', $dateDeb)
		    ->setParameter('end',   $dateFin)
	    ;

	    return $qb
	    	->getQuery()
	    	->getResult()
	  	;
	}

  	public function ficheByDateEtat($visiteur, $dateDeb, $dateFin, $etat)
  	{
  		$qb = $this->createQueryBuilder('f');

	    $qb
	      ->where('f.employe = :visiteur')
	      	->setParameter('visiteur', $visiteur)
	      ->andWhere('f.date BETWEEN :start AND :end')
		    ->setParameter('start', $dateDeb)
		    ->setParameter('end',   $dateFin)
		  ->andWhere('f.etat = :etat')
		  	->setParameter('etat', $etat)
	    ;

	    return $qb
	    	->getQuery()
	    	->getResult()
	  	;
 	}
}
