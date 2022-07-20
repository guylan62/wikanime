<?php

namespace App\Controller;

use App\Entity\Adherent;
use App\Form\AdherentType;
use App\Form\LoginType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        $adherent = new Adherent(); // Créer un objet adherent.
        $form = $this->createForm(LoginType::class, $adherent);
        return $this->render('auth/login.html.twig', [
            'controller_name' => 'AuthController',
            'loginForm' => $form->createView(),
        ]);
    }

     /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request): Response /* Créer un formulaire: Cf doc Symfony "Rendering forms" ! */
    {

        $adherent = new Adherent(); // Créer un objet adherent.

        $form = $this->createForm(AdherentType::class, $adherent); // Créer le formulaire.

        // $titrePage = 'Inscription'; /* On créée une variable avec un titre ... */

        return $this->render('auth/register.html.twig', [
            'controller_name' => 'AuthController',
            // 'monTitre' => $titrePage, // ...injection dans la vue : cf "register.html.twig"
            'registerForm' => $form->createView(),
        ]);
    }
}
