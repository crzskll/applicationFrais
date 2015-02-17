<?php

namespace Gsb\AppliFraisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gsb\AppliFraisBundle\Entity\Employe;

class LoadEmployeData extends AbstractFixture implements OrderedFixtureInterface {
	public function load(ObjectManager $em) {
		$employe_visiteur = new Employe();
		$employe_visiteur->setNom('Visiteur'));
		$employe_visiteur->setPrenom('Un'));
		$employe_visiteur->setAdresse('26 rue plopplop'));
		$employe_visiteur->setCodePostal('69008'));
		$employe_visiteur->setVille('Lyon'));
		$employe_visiteur->setLogin('Visit1'));
		$employe_visiteur->setMotDePasse('MdpVisit1'));
		$employe_visiteur->setDateEmbauche(new \DateTime('2012-10-10'));
		$employe_visiteur->setPoste('Visiteur'));
		

		$employe_visiteur2 = new Employe();
		$employe_visiteur2->setNom('Visiteur'));
		$employe_visiteur2->setPrenom('Deux'));
		$employe_visiteur2->setAdresse('59 avenue lorem ipsum'));
		$employe_visiteur2->setCodePostal('69002'));
		$employe_visiteur2->setVille('Lyon'));
		$employe_visiteur2->setLogin('Visit2'));
		$employe_visiteur2->setMotDePasse('MdpVisit2'));
		$employe_visiteur2->setDateEmbauche(new \DateTime('2004-03-21'));
		$employe_visiteur2->setPoste('Visiteur'));

		$employe_comptable = new Employe();
		$employe_comptable->setNom('comptable'));
		$employe_comptable->setPrenom('Un'));
		$employe_comptable->setAdresse('1 rue azeazeaze'));
		$employe_comptable->setCodePostal('69001'));
		$employe_comptable->setVille('Lyon'));
		$employe_comptable->setLogin('Compt1'));
		$employe_comptable->setMotDePasse('MdpCompt1'));
		$employe_comptable->setDateEmbauche(new \DateTime('2012-10-10'));
		$employe_comptable->setPoste('Comptable'));

		$em->persist($employe_visiteur);
		$em->persist($employe_visiteur2);
		$em->persist($employe_comptable);

		$em->flush();

		$this->addReference('employe_visiteur', $employe_visiteur);
		$this->addReference('employe_visiteur2', $employe_visiteur2);
		$this->addReference('employe_comptable', $employe_comptable);
	}

	public function getOrder() {
		return 3; // the order in which fixtures will be loaded
	}
}
