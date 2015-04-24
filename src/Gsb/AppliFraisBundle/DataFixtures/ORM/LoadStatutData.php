<?php

namespace Gsb\AppliFraisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gsb\AppliFraisBundle\Entity\Statut;

class LoadStatutData extends AbstractFixture implements OrderedFixtureInterface {
	public function load(ObjectManager $em) {
		$enAttente = new Statut();
		$enAttente->setLibelle('En attente');

		$validee = new Statut();
		$validee->setLibelle('Validée');

		$refusee = new Statut();
		$refusee->setLibelle('Refusée');

		$em->persist($enAttente);
		$em->persist($validee);
		$em->persist($refusee);

		$em->flush();

		$this->addReference('statut-enCours', $enAttente);
		$this->addReference('statut-validee', $validee);
		$this->addReference('statut-refusee', $refusee);
	}

	public function getOrder() {
		return 3; // the order in which fixtures will be loaded
	}
}
