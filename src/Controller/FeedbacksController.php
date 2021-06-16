<?php

namespace App\Controller;

use App\Repository\FeedbacksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeedbacksController extends AbstractController
{
  /**
   * @var FeedbacksRepository
   */
  private $repository;

  /**
   * @var EntityManagerInterface
   */
  private $em;

  public function __construct(FeedbacksRepository $repository, EntityManagerInterface $em)
  {
    $this->repository = $repository;
    $this->em = $em;
  }
  /**
   * @Route("/ajouter-un-avis", name="feedback")
   * @return Response
   */
  public function index(): Response
  {
    // TODO A MODIFIER
    // $feedbacks = $this->repository->findAll();
    // return $this->render('pages/feed.html.twig', [
    //   'feedbacks' => $feedbacks,
    // ]);
    return $this->render('feedbacks/index.html.twig');
  }
  /**
   * @Route("/ajouter-un-avis/rating", name="rating")
   * @return Response
   */
  public function rating(): Response
  {
    return $this->render('feedbacks/rating.html.twig');
  }
  /**
   * @Route("/ajouter-un-avis/comment", name="rating")
   * @return Response
   */
  public function comment(): Response
  {
    return $this->render('feedbacks/comment.html.twig');
  }
  /**
   * @Route("/ajouter-un-avis/satisfaction", name="rating")
   * @return Response
   */
  public function satisfaction(): Response
  {
    return $this->render('feedbacks/satisfaction.html.twig');
  }
}
