<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArmeController extends AbstractController
{
       /**
     * @Route("/armes", name="armes")
     */
    public function armes(): Response
    {
        $armes = Arme::creerArmes();

        return $this->render('arme/armes.html.twig', [
            'armes' => $armes
        ]);
    }

    /**
     * @Route("/armes/{arme}", name="afficher_arme")
     */
    public function afficherArme(String $arme): Response
    {
        Arme::creerArmes();
        $search_arme = Arme::afficherArmeParNom($arme);

        return $this->render('arme/arme.html.twig', [
            'arme' => $search_arme
        ]);
    }
}
