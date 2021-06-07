<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(): Response
    {
        $product = new Product();
        $product->setName('Déco')
            ->setPrice(11)
            ->setOldPrice(20)
            ->setOrigin('Maison du Monde')
            ->setDelivery('Mondial Relay');

        return $this->render('product/index.html.twig');
    }
}
