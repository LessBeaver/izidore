<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
	/**
	 * @var ProductRepository
	 */
	private $repository;

	/**
	 * @var EntityManagerInterface
	 */
	private $em;

	public function __construct(ProductRepository $repository, EntityManagerInterface $em)
	{
		$this->repository = $repository;
		$this->em = $em;
	}
	/**
	 * @Route("/", name="home")
	 * @return Response
	 */
	public function index(): Response
	{
		// TODO envoyer index plutôt que base
		// Permet de récupérer l'ensemble des enregistrements
		$products = $this->repository->findAll();
		return $this->render('base.html.twig', [
			'controller_name' => 'ProductController',
		]);
	}
}
