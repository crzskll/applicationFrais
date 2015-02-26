<?php

namespace Gsb\AppliFraisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gsb\AppliFraisBundle\Entity\FraisForfait;

class LoadFraisForfaitData extends AbstractFixture implements OrderedFixtureInterface {
	public function load(ObjectManager $em) {
		$FraisForfaisNuit_fiche1_visit1 = new FraisForfait();
		$FraisForfaisNuit_fiche1_visit1->setQuantite(0);
		$FraisForfaisNuit_fiche1_visit1->setForfait($em->merge($this->getReference('forfait-nuit')));
		$FraisForfaisNuit_fiche1_visit1->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche1_visit1')));

		$FraisForfaisRepas_fiche1_visit1 = new FraisForfait();
		$FraisForfaisRepas_fiche1_visit1->setQuantite(0);
		$FraisForfaisRepas_fiche1_visit1->setForfait($em->merge($this->getReference('forfait-repas')));
		$FraisForfaisRepas_fiche1_visit1->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche1_visit1')));

		$FraisForfaisKm_fiche1_visit1 = new FraisForfait();
		$FraisForfaisKm_fiche1_visit1->setQuantite(0);
		$FraisForfaisKm_fiche1_visit1->setForfait($em->merge($this->getReference('forfait-km')));
		$FraisForfaisKm_fiche1_visit1->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche1_visit1')));

		$FraisForfaisEtape_fiche1_visit1 = new FraisForfait();
		$FraisForfaisEtape_fiche1_visit1->setQuantite(0);
		$FraisForfaisEtape_fiche1_visit1->setForfait($em->merge($this->getReference('forfait-etape')));
		$FraisForfaisEtape_fiche1_visit1->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche1_visit1')));




		$FraisForfaisNuit_fiche2_visit1 = new FraisForfait();
		$FraisForfaisNuit_fiche2_visit1->setQuantite(0);
		$FraisForfaisNuit_fiche2_visit1->setForfait($em->merge($this->getReference('forfait-nuit')));
		$FraisForfaisNuit_fiche2_visit1->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche2_visit1')));

		$FraisForfaisRepas_fiche2_visit1 = new FraisForfait();
		$FraisForfaisRepas_fiche2_visit1->setQuantite(0);
		$FraisForfaisRepas_fiche2_visit1->setForfait($em->merge($this->getReference('forfait-repas')));
		$FraisForfaisRepas_fiche2_visit1->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche2_visit1')));

		$FraisForfaisKm_fiche2_visit1 = new FraisForfait();
		$FraisForfaisKm_fiche2_visit1->setQuantite(0);
		$FraisForfaisKm_fiche2_visit1->setForfait($em->merge($this->getReference('forfait-km')));
		$FraisForfaisKm_fiche2_visit1->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche2_visit1')));

		$FraisForfaisEtape_fiche2_visit1 = new FraisForfait();
		$FraisForfaisEtape_fiche2_visit1->setQuantite(0);
		$FraisForfaisEtape_fiche2_visit1->setForfait($em->merge($this->getReference('forfait-etape')));
		$FraisForfaisEtape_fiche2_visit1->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche2_visit1')));



		$FraisForfaisNuit_fiche1_visit2 = new FraisForfait();
		$FraisForfaisNuit_fiche1_visit2->setQuantite(0);
		$FraisForfaisNuit_fiche1_visit2->setForfait($em->merge($this->getReference('forfait-nuit')));
		$FraisForfaisNuit_fiche1_visit2->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche1_visit2')));

		$FraisForfaisRepas_fiche1_visit2 = new FraisForfait();
		$FraisForfaisRepas_fiche1_visit2->setQuantite(0);
		$FraisForfaisRepas_fiche1_visit2->setForfait($em->merge($this->getReference('forfait-repas')));
		$FraisForfaisRepas_fiche1_visit2->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche1_visit2')));

		$FraisForfaisKm_fiche1_visit2 = new FraisForfait();
		$FraisForfaisKm_fiche1_visit2->setQuantite(0);
		$FraisForfaisKm_fiche1_visit2->setForfait($em->merge($this->getReference('forfait-km')));
		$FraisForfaisKm_fiche1_visit2->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche1_visit2')));

		$FraisForfaisEtape_fiche1_visit2 = new FraisForfait();
		$FraisForfaisEtape_fiche1_visit2->setQuantite(0);
		$FraisForfaisEtape_fiche1_visit2->setForfait($em->merge($this->getReference('forfait-etape')));
		$FraisForfaisEtape_fiche1_visit2->setForfaitLigne($em->merge($this->getReference('forfaitLigne_fiche1_visit2')));
		
		$em->persist($FraisForfaisNuit_fiche1_visit1);
		$em->persist($FraisForfaisRepas_fiche1_visit1);
		$em->persist($FraisForfaisKm_fiche1_visit1);
		$em->persist($FraisForfaisEtape_fiche1_visit1);

		$em->persist($FraisForfaisNuit_fiche2_visit1);
		$em->persist($FraisForfaisRepas_fiche2_visit1);
		$em->persist($FraisForfaisKm_fiche2_visit1);
		$em->persist($FraisForfaisEtape_fiche2_visit1);

		$em->persist($FraisForfaisNuit_fiche1_visit2);
		$em->persist($FraisForfaisRepas_fiche1_visit2);
		$em->persist($FraisForfaisKm_fiche1_visit2);
		$em->persist($FraisForfaisEtape_fiche1_visit2);


		$em->flush();
	}

	public function getOrder() {
		return 8; // the order in which fixtures will be loaded
	}
}
