<?php

namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adresse1 = new UtilisateursAdresses();
        $adresse1->setUtilisateur($this->getReference('utilisateur1'));
        $adresse1->setNom('Mwilambwe');
        $adresse1->setPrenom('lady');
        $adresse1->setTelephone('078881814');
        $adresse1->setAdresse('1312 Pretoruis Street, Hatfield');
        $adresse1->setCp('0002');
        $adresse1->setPays('South Africa');
        $adresse1->setVille('Pretoria');
        $adresse1->setComplement('conner to eugen garage');
        $manager->persist($adresse1);

        $adresse2 = new UtilisateursAdresses();
        $adresse2->setUtilisateur($this->getReference('utilisateur3'));
        $adresse2->setNom('Mwilambwe');
        $adresse2->setPrenom('nathan');
        $adresse2->setTelephone('0734784906');
        $adresse2->setAdresse('165 Cnr Jeppe / Joubert Street');
        $adresse2->setCp('2001');
        $adresse2->setPays('South Africa');
        $adresse2->setVille('Johannesburg');
        $adresse2->setComplement('next to bree taxi rang');
        $manager->persist($adresse2);

        $manager->flush();
    }

    public function getOrder()
    {
        return 6;
    }
}