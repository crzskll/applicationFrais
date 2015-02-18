<?php

namespace Gsb\AppliFraisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gsb\AppliFraisBundle\Entity\ForfaitLigne;

class LoadForfaitLigneData extends AbstractFixture implements OrderedFixtureInterface {
	public function load(ObjectManager $em) {
		$forfaitLigne_fiche1_visit1 = new ForfaitLigne();
		$forfaitLigne_fiche1_visit1->setNbKm(25);
		$forfaitLigne_fiche1_visit1->setNbEtape(2);
		$forfaitLigne_fiche1_visit1->setNbNuit(0);
		$forfaitLigne_fiche1_visit1->setNbRepas(4);
		$forfaitLigne_fiche1_visit1->setStatut($em->merge($this->getReference('statut-validee')));
		$forfaitLigne_fiche1_visit1->setFiche($em->merge($this->getReference('fiche_visiteur1_1')));

		$forfaitLigne_fiche2_visit1 = new ForfaitLigne();
		$forfaitLigne_fiche2_visit1->setNbKm(4);
		$forfaitLigne_fiche2_visit1->setNbEtape(1);
		$forfaitLigne_fiche2_visit1->setNbNuit(0);
		$forfaitLigne_fiche2_visit1->setNbRepas(0);
		$forfaitLigne_fiche2_visit1->setStatut($em->merge($this->getReference('statut-enCours')));
		$forfaitLigne_fiche2_visit1->setFiche($em->merge($this->getReference('fiche_visiteur1_2')));

		$forfaitLigne_fiche1_visit2 = new ForfaitLigne();
		$forfaitLigne_fiche1_visit2->setNbKm(0);
		$forfaitLigne_fiche1_visit2->setNbEtape(0);
		$forfaitLigne_fiche1_visit2->setNbNuit(0);
		$forfaitLigne_fiche1_visit2->setNbRepas(0);
		$forfaitLigne_fiche1_visit2->setStatut($em->merge($this->getReference('statut-enCours')));
		$forfaitLigne_fiche1_visit2->setFiche($em->merge($this->getReference('fiche_visiteur2')));

		$em->persist($forfaitLigne_fiche1_visit1);
		$em->persist($forfaitLigne_fiche2_visit1);
		$em->persist($forfaitLigne_fiche1_visit2);

		$em->flush();
	}

	public function getOrder() {
		return 5; // the order in which fixtures will be loaded
	}
}
