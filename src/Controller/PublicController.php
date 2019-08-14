<?php

namespace App\Controller;

use App\Form\DeathQuizzType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class LuckyController
 *
 * @package App\Controller
 */
class PublicController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function home()
    {
        return $this->render('public/home.html.twig', []);
    }

    /**
     * @Route("/death-quizz", name="death-quizz")
     */
    public function deathQuizz()
    {
        $form = $this->createForm(DeathQuizzType::class);

        return $this->render('public/quizz.html.twig', ['form' => $form->createView()]);
    }
}