<?php

namespace Gsb\AppliFraisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gsb\AppliFraisBundle\Entity\Forfait;

class LoadForfaitData extends AbstractFixture implements OrderedFixtureInterface {
	public function load(ObjectManager $em) {
		$nuit = new Forfait();
		$nuit->setLibelle('nuit');
		$nuit->setMontant(80);

		$repas = new Forfait();
		$repas->setLibelle('repas');
		$repas->setMontant(25);

		$km = new Forfait();
		$km->setLibelle('km');

		$km->setMontant(0.62);

		$etape = new Forfait();
		$etape->setLibelle('etape');
		$etape->setMontant(110);

		$em->persist($nuit);
		$em->persist($repas);
		$em->persist($km);
		$em->persist($etape);

		$em->flush();

		$this->addReference('forfait-nuit', $nuit);
		$this->addReference('forfait-repas', $repas);
		$this->addReference('forfait-km', $km);
		$this->addReference('forfait-etape', $etape);
	}

	public function getOrder() {
		return 7; // the order in which fixtures will be loaded
	}
}
