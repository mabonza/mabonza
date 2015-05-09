<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
       public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setDescription("Veggies in culinary term, a vegetable is an editable plant.");
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media3'));
        $produit1->setNom('Red Pepper');
        $produit1->setPrix('1.99');
        $produit1->setTva($this->getReference('tva2'));
        $manager->persist($produit1);

        $produit2 = new Produits();
        $produit2->setCategorie($this->getReference('categorie1'));
        $produit2->setDescription("The chilli pepper is the fruit of plants from the genus Capsicum.");
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media4'));
        $produit2->setNom('Hot Spice');
        $produit2->setPrix('3.99');
        $produit2->setTva($this->getReference('tva2'));
        $manager->persist($produit2);

        $produit3 = new Produits();
        $produit3->setCategorie($this->getReference('categorie1'));
        $produit3->setDescription("The tomato is the edible, often red fruit berry of the nightshade Solanum.");
        $produit3->setDisponible('1');
        $produit3->setImage($this->getReference('media5'));
        $produit3->setNom('Tomato');
        $produit3->setPrix('0.99');
        $produit3->setTva($this->getReference('tva2'));
        $manager->persist($produit3);

        $produit4 = new Produits();
        $produit4->setCategorie($this->getReference('categorie1'));
        $produit4->setDescription("Bell pepper, also know as sweet pepper or Capsicum, is cultivar group of  the species.");
        $produit4->setDisponible('1');
        $produit4->setImage($this->getReference('media6'));
        $produit4->setNom('Green Pepper');
        $produit4->setPrix('2.99');
        $produit4->setTva($this->getReference('tva2'));
        $manager->persist($produit4);

        $produit5 = new Produits();
        $produit5->setCategorie($this->getReference('categorie2'));
        $produit5->setDescription("A raisin is dried grap. Raisins are Produced in many regions of the world and may be eaten raw.");
        $produit5->setDisponible('1');
        $produit5->setImage($this->getReference('media7'));
        $produit5->setNom('Raisins');
        $produit5->setPrix('0.97');
        $produit5->setTva($this->getReference('tva2'));
        $manager->persist($produit5);

        $produit6 = new Produits();
        $produit6->setCategorie($this->getReference('categorie2'));
        $produit6->setDescription("The Orange is the fruit of the family.");
        $produit6->setDisponible('1');
        $produit6->setImage($this->getReference('media8'));
        $produit6->setNom('Orange');
        $produit6->setPrix('1.20');
        $produit6->setTva($this->getReference('tva2'));
        $manager->persist($produit6);


        $manager->flush();

    }
    public function getOrder(){
        return 4;
    }
}