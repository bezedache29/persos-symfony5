<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }

    /**
     * @Route("/persos", name="personnages")
     */
    public function persos(): Response
    {
        $j1 = [
            'pseudo' => 'Marc',
            'age' => 25,
            'sexe' => true,
            'data' => [
                'force' => 3,
                'agi' => 2,
                'intel' => 3
            ]
        ];
        $j2 = [
            'pseudo' => 'Milo',
            'age' => 30,
            'sexe' => true,
            'data' => [
                'force' => 5,
                'agi' => 1,
                'intel' => 2
            ]
        ];
        $j3 = [
            'pseudo' => 'Tya',
            'age' => 22,
            'sexe' => false,
            'data' => [
                'force' => 1,
                'agi' => 4,
                'intel' => 4
            ]
        ];
        $persos = [
            'j1' => $j1,
            'j2' => $j2,
            'j3' => $j3
        ];
        return $this->render('personnage/persos.html.twig', [
            'persos' => $persos
        ]);
    }

    /**
     * @Route("/persos/{pseudo}", name="afficher_perso")
     */
    public function afficherPerso(String $pseudo): Response
    {
        return $this->render('personnage/perso.html.twig', [
            'pseudo' => $pseudo
        ]);
    }
}
