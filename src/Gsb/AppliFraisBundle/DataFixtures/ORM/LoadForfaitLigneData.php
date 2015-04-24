<?php

namespace Gsb\AppliFraisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gsb\AppliFraisBundle\Entity\ForfaitLigne;

class LoadForfaitLigneData extends AbstractFixture implements OrderedFixtureInterface {
	public function load(ObjectManager $em) {
		$forfaitLigne_fiche1_visit1 = new ForfaitLigne();
		$forfaitLigne_fiche1_visit1->setStatut($em->merge($this->getReference('statut-validee')));
		$forfaitLigne_fiche1_visit1->setFiche($em->merge($this->getReference('fiche_visiteur1_1')));

		$forfaitLigne_fiche2_visit1 = new ForfaitLigne();
		$forfaitLigne_fiche2_visit1->setStatut($em->merge($this->getReference('statut-enCours')));
		$forfaitLigne_fiche2_visit1->setFiche($em->merge($this->getReference('fiche_visiteur1_2')));

		$forfaitLigne_fiche1_visit2 = new ForfaitLigne();
		$forfaitLigne_fiche1_visit2->setStatut($em->merge($this->getReference('statut-enCours')));
		$forfaitLigne_fiche1_visit2->setFiche($em->merge($this->getReference('fiche_visiteur2')));

		$em->persist($forfaitLigne_fiche1_visit1);
		$em->persist($forfaitLigne_fiche2_visit1);
		$em->persist($forfaitLigne_fiche1_visit2);

		$em->flush();

		$this->addReference('forfaitLigne_fiche1_visit1', $forfaitLigne_fiche1_visit1);
		$this->addReference('forfaitLigne_fiche2_visit1', $forfaitLigne_fiche2_visit1);
		$this->addReference('forfaitLigne_fiche1_visit2', $forfaitLigne_fiche1_visit2);
	}

	public function getOrder() {
		return 7; // the order in which fixtures will be loaded
	}
}
