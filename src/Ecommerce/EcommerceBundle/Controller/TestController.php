<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;

class TestController extends Controller
{
    public function ajoutAction()
    {
        $em = $this->getDoctrine()->getManager();
        /*$produit = new Produits();
        $produit ->setCategorie('Legume');
        $produit ->setDescription('Green papper is nice food');
        $produit ->setDisponible('1');
        $produit ->setImage('http://1.bp.blogspot.com/-nskSDSUN54A/UZ_SU4ZiLWI/AAAAAAAAGKY/eAwC9nNfYPo/s1600/green-pepper.png');
        $produit ->setNon('Green Papper');
        $produit ->setPrix('0.99');
        $produit ->setTva('19.6');

        $em->persist($produit);

        $produit2 = new Produits();
        $produit2 ->setCategorie('Legume');
        $produit2 ->setDescription('Bean is a common name for large plant seeds of several genera of the family Fabaceae which are used for human or animal food.');
        $produit2 ->setDisponible('1');
        $produit2 ->setImage('http://upload.wikimedia.org/wikipedia/commons/d/db/Painted_Pony_Bean.JPG');
        $produit2 ->setNon('Bean');
        $produit2 ->setPrix('1.99');
        $produit2 ->setTva('19.6');

        $em->persist($produit2);
        $em->flush();*/
        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();

        return $this->render('EcommerceBundle:Default:test.html.twig', array('produits' => $produits));
    }

}