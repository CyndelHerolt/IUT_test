<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number", name="app_lucky_number")
     */
    function News()
    {
        $actualites = [
            [
                'titre' => 'Concours plaidoiries 2022',
                'date' => '25/05/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-plaidoiries2022.jpg'
            ],
            [
                'titre' => 'Rénovation énergétique de l\'IUT',
                'date' => '20/05/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-Actu-renovationenergetique2022.jpg' //image à remplacer
            ],
            [
                'titre' => 'Afterwork GMP & futur Job Dating',
                'date' => '18/05/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-afterworkGMP-mai2022.jpg' //image à remplacer
            ],
            [
                'titre' => 'L4M : Recrutements Experts',
                'date' => '16/05/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-salonL4M-juin2022.jpg' //image à remplacer
            ],
            [
                'titre' => 'CROUS : ateliers d\'éloquence',
                'date' => '27/04/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-Atelierseloquences-CROUS2022.jpg' //image à remplacer
            ],
            [
                'titre' => 'Vacances de Printemps : fermeture de l\'IUT',
                'date' => '08/04/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-vacancesprintemps.jpg' //image à remplacer
            ],
        ];

        return $this->render(
            'number.html.twig',
            [
                'news' => $actualites,
            ]
        );
    }
}