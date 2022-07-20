<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimeController extends AbstractController
{
    
    /**
     * @Route("/anime-card", name="anime-card")
     */
    public function animeCard(): Response
    {
        return $this->render('anime/anime-card.html.twig', [
            'controller_name' => 'AnimeController',
        ]);
    }
    /**
     * @Route("/anime-new-card", name="anime-new-card")
     */
    public function animeNewCard(): Response
    {
        return $this->render('anime/anime-new-card.html.twig', [
            'controller_name' => 'AnimeController',
        ]);
    }
    /**
     * @Route("/anime-list", name="anime-list")
     */
    public function animeList(): Response
    {
        return $this->render('anime/anime-list.html.twig', [
            'controller_name' => 'AnimeController',
        ]);
    }
}
