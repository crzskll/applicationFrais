<?php

namespace Gsb\AppliFraisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gsb\AppliFraisBundle\Entity\Fiche;

class LoadFicheData extends AbstractFixture implements OrderedFixtureInterface {
	public function load(ObjectManager $em) {
		$fiche_visiteur1_1 = new Fiche();
		$fiche_visiteur1_1->setDate(new \DateTime('2015-01-01'));
		$fiche_visiteur1_1->setNbJustificatifs(2);
		$fiche_visiteur1_1->setDateModification(new \DateTime('2015-01-21'));
		$fiche_visiteur1_1->setMontantValide(0);
		$fiche_visiteur1_1->setEmploye($em->merge($this->getReference('employe_visiteur')));
		$fiche_visiteur1_1->setEtat($em->merge($this->getReference('etat-validee')));

		$fiche_visiteur1_2 = new Fiche();
		$fiche_visiteur1_2->setDate(new \DateTime('2015-02-01'));
		$fiche_visiteur1_2->setNbJustificatifs(0);
		$fiche_visiteur1_2->setDateModification(new \DateTime('2015-02-11'));
		$fiche_visiteur1_2->setMontantValide(0);
		$fiche_visiteur1_2->setEmploye($em->merge($this->getReference('employe_visiteur')));
		$fiche_visiteur1_2->setEtat($em->merge($this->getReference('etat-enCours')));

		$fiche_visiteur2 = new Fiche();
		$fiche_visiteur2->setDate(new \DateTime('2015-02-01'));
		$fiche_visiteur2->setNbJustificatifs(0);
		$fiche_visiteur2->setDateModification(new \DateTime('2015-02-18'));
		$fiche_visiteur2->setMontantValide(0);
		$fiche_visiteur2->setEmploye($em->merge($this->getReference('employe_visiteur2')));
		$fiche_visiteur2->setEtat($em->merge($this->getReference('etat-enCours')));

		$em->persist($fiche_visiteur1_1);
		$em->persist($fiche_visiteur1_2);
		$em->persist($fiche_visiteur2);

		$em->flush();

		$this->addReference('fiche_visiteur1_1', $fiche_visiteur1_1);
		$this->addReference('fiche_visiteur1_2', $fiche_visiteur1_2);
		$this->addReference('fiche_visiteur2', $fiche_visiteur2);
	}

	public function getOrder() {
		return 4; // the order in which fixtures will be loaded
	}
}
