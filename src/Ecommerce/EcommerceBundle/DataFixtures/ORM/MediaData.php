<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
       public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('http://www.jungleseeds.co.uk/contents/media/OnionAilsaCraig.jpg');
        $media1->setAlt('Onion');
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setPath('http://readynutrition.com/wp-content/uploads/2014/10/Strawberries1.jpg');
        $media2->setAlt('fruits');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('http://farm2.static.flickr.com/1408/1311643567_ce732f7e2c.jpg');
        $media3->setAlt('Red Pepper');
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setPath('http://duntaz713qezt.cloudfront.net/wp-content/uploads/2013/04/Chilli.jpg');
        $media4->setAlt('Hot Spice');
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setPath('https://timewellness.files.wordpress.com/2012/09/tomato.jpg?w=480&h=320&crop=1');
        $media5->setAlt('Tomato');
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setPath('http://www.natural-recipes.com/natural-ingredients/green-pepper.jpg');
        $media6->setAlt('Green Pepper');
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setPath('http://www.raisin-bio.com/wp-content/uploads/2012/08/jus-raisin-bio-antioxydant-puissant-naturel-pepin-huile-sec-cure-feuille-pain-vin-peau-cholesterol-vigne-21.jpg');
        $media7->setAlt('Raisins');
        $manager->persist($media7);

        $media8 = new Media();
        $media8->setPath('http://globe-views.com/dcim/dreams/orange/orange-03.jpg');
        $media8->setAlt('Orange');
        $manager->persist($media8);

        $manager->flush();

        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
    }
    public function getOrder(){
        return 1;
    }
}