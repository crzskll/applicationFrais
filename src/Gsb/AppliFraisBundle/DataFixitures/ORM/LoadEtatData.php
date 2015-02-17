<?php
namespace Gsb\AppliFraisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gsb\AppliFraisBundle\Entity\Etat;

class LoadEtatData extends AbstractFixture implements OrderedFixtureInterface {
	public function load(ObjectManager $em) {
		$enCours = new Etat();
		$enCours->setLibelle('En cours');

		$cloturee = new Etat();
		$cloturee->setLibelle('Cloturée');

		$validee = new Etat();
		$validee->setLibelle('Validée');

		$enPaiement = new Etat();
		$enPaiement->setLibelle('En paiement');

		$remboursee = new Etat();
		$remboursee->setLibelle('Remboursée');

		$em->persist($enCours);
		$em->persist($cloturee);
		$em->persist($validee);
		$em->persist($enPaiement);
		$em->persist($remboursee);

		$em->flush();

		$this->addReference('etat-enCours', $enCours);
		$this->addReference('etat-cloturee', $cloturee);
		$this->addReference('etat-validee', $validee);
		$this->addReference('etat-enPaiement', $enPaiement);
		$this->addReference('etat-remboursee', $remboursee);
	}

	public function getOrder() {
		return 1; // the order in which fixtures will be loaded
	}
}
