<?php

namespace Gsb\AppliFraisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gsb\AppliFraisBundle\Entity\HorsForfaitLigne;

class LoadHorsForfaitLigneData extends AbstractFixture implements OrderedFixtureInterface {
	public function load(ObjectManager $em) {
		$horsForfaitLigne1_fiche1_visit1 = new HorsForfaitLigne();
		$horsForfaitLigne1_fiche1_visit1->setDate(new \DateTime('2015-01-09'));
		$horsForfaitLigne1_fiche1_visit1->setLibelle('Diner avec un client');
		$horsForfaitLigne1_fiche1_visit1->setMontant(28.73);
		$horsForfaitLigne1_fiche1_visit1->setStatut($this->getReference('statut-validee')));
		$horsForfaitLigne1_fiche1_visit1->setFiche($this->getReference('fiche_visiteur1_1')));

		$horsForfaitLigne2_fiche1_visit1 = new HorsForfaitLigne();
		$horsForfaitLigne2_fiche1_visit1->setDate(new \DateTime('2015-01-22'));
		$horsForfaitLigne2_fiche1_visit1->setLibelle('Location salle de réunion');
		$horsForfaitLigne2_fiche1_visit1->setMontant(92.00);
		$horsForfaitLigne2_fiche1_visit1->setStatut($this->getReference('statut-refusee')));
		$horsForfaitLigne2_fiche1_visit1->setFiche($this->getReference('fiche_visiteur1_1')));
		
		$horsForfaitLigne1_fiche1_visit2 = new HorsForfaitLigne();
		$horsForfaitLigne1_fiche1_visit2->setDate(new \DateTime('2015-01-11'));
		$horsForfaitLigne1_fiche1_visit2->setLibelle('Diner avec un client');
		$horsForfaitLigne1_fiche1_visit2->setMontant(22.73);
		$horsForfaitLigne1_fiche1_visit2->setStatut($this->getReference('statut-validee')));
		$horsForfaitLigne1_fiche1_visit2->setFiche($this->getReference('fiche_visiteur2_1')));

		$em->persist($horsForfaitLigne1_fiche1_visit1);
		$em->persist($horsForfaitLigne2_fiche1_visit1);
		$em->persist($horsForfaitLigne1_fiche1_visit2);

		$em->flush();
	}

	public function getOrder() {
		return 6; // the order in which fixtures will be loaded
	}
}
