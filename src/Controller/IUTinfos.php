<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IUTinfos extends AbstractController
{
    /**
     * @Route("/lucky/number", name="iut_test_technique")
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

    function Depts()
    {
        $departements =  [
            [
                'nom' => 'Métiers du Multimédia et de l\'internet',
                'sigle' => 'MMI',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_191.jpg',//image à remplacer
                'presentation' => 'Le département Métiers de l’Internet et du Multimédia (anciennement Services et Réseaux de Communication) forme les acteurs de l’Internet, des médias numériques, de la communication plurimédia, de la création graphique.',
                'responsable' => 'Florent Libbrecht',
                'mail_responsable' => 'florent.libbrecht@univ-reims.fr',
                'tel_responsable' => '03 25 42 71 60'
            ],
            [
                'nom' => 'Carrière Juridique',
                'sigle' => 'CJ',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_196.jpg',//image à remplacer
                'presentation' => 'Le département Carrières Juridiques prépare les étudiants à devenir des techniciens du droit dans des domaines variés : études de notaires, d’huissiers mais aussi des cabinets d’expert-comptable ou des services de ressources humaines.',
                'responsable' => 'Gilles Darmon',
                'mail_responsable' => 'gilles.darmon@univ-reims.fr',
                'tel_responsable' => '03 25 42 71 73'
            ]
        ];

        return $this->render(
            'departements.html.twig',
            [
                'depts' => $departements,
            ]
        );
    }


}