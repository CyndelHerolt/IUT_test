<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class IUTinfos extends AbstractController
{

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
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-Actu-renovationenergetique2022.jpg'
            ],
            [
                'titre' => 'Afterwork GMP & futur Job Dating',
                'date' => '18/05/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-afterworkGMP-mai2022.jpg'
            ],
            [
                'titre' => 'L4M : Recrutements Experts',
                'date' => '16/05/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-salonL4M-juin2022.jpg'
            ],
            [
                'titre' => 'CROUS : ateliers d\'éloquence',
                'date' => '27/04/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-Atelierseloquences-CROUS2022.jpg'
            ],
            [
                'titre' => 'Vacances de Printemps : fermeture de l\'IUT',
                'date' => '08/04/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-vacancesprintemps.jpg'
            ],
        ];

        $evenements = [
            [
                'titre' => 'Job Dating Alternance à l\'IUT de Troyes',
                'date' => '16/05/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-Actu-jobdating.jpg',
                'soustitre' => 'Vous êtes à la recherche d\'un alternant dans l\'un de nos 7 parcours de 2ème année de BUT proposés en alternance ?',
                'description' => 'Notre Job Dating se déroulera le jeudi 2 juin 2022 de 14h à 18h au sein de nos locaux. Inscrivez-vous dès maintenant et déposez vos offres sur notre plateforme interne https://bit.ly/3z2eGXo Vous pourrez y renseigner des créneaux horaires de rendez-vous et ainsi permettre à nos étudiants de se positionner sur vos offres.N\'hésitez pas à télécharger notre brochure d\'informations dédiée aux entreprises https://bit.ly/3wDTIN9',
            ],
            [
                'titre' => 'AfterWork Entreprises : découvrez le B.U.T & l\'Alternance',
                'date' => '07/04/2022',
                'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/VisuelSite-Afterwork.jpg',
                'soustitre' => 'Ce moment de découvertes et d’échanges, dans une ambiance professionnelle et conviviale, permettra de renforcer les liens entre nos structures et nos partenaires.',
                'description' => 'Au programme : 
                                  Présentation du B.U.T. & du renforcement de l\'alternance au sein de notre offre de formation,
                                  Moment d\'échanges, de découvertes et de convivialité dans une ambiance professionnelle et conviviale.
                                  L\'Afterwork Alternance de l\'IUT de Troyes est un évènement réservé et dédié aux entreprises. 
                                  L\'accès se fait sur invitation. Si votre entreprise souhaite y participer, veuillez prendre contact avec nous sur : 
                                  entreprises.iut-troyes@univ-reims.fr'
            ]
        ];

        return $this->render(
            'index.html.twig',
            [
                'news' => $actualites,
                'events' => $evenements,
            ]
        );
    }



    function Depts()
    {
        $departements =  [
            [
                'nom' => 'Métiers du Multimédia et de l\'internet',
                'sigle' => 'MMI',
                'couleur' => '#3e748f',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_191.jpg',
                'presentation' => 'Le département Métiers de l’Internet et du Multimédia (anciennement Services et Réseaux de Communication) forme les acteurs de l’Internet, des médias numériques, de la communication plurimédia, de la création graphique.',
                'responsable' => 'Florent Libbrecht',
                'mail_responsable' => 'florent.libbrecht@univ-reims.fr',
                'tel_responsable' => '03 25 42 71 60',
                'lien_page_description' => ''
            ],
            [
                'nom' => 'Gestion des Entreprises et des Administrations',
                'sigle' => 'GEA',
                'couleur' => '#3e8f6b',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_192.jpg',
                'presentation' => 'Le département Gestion des Entreprises et des Administrations de l’IUT de Troyes forme les étudiants à la gestion d’une entreprise ou d’une administration dans différents aspects comme la gestion comptable, financière, gestion des ressources humaines, gestion juridique et fiscale, etc…',
                'responsable' => 'Damien Blaise',
                'mail_responsable' => 'damien.blaise@univ-reims.fr',
                'tel_responsable' => '03 25 42 70 92',
                'lien_page_description' => ''
            ],
            [
                'nom' => 'Carrière Juridique',
                'sigle' => 'CJ',
                'couleur' => '#ee4949',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_196.jpg',
                'presentation' => 'Le département Carrières Juridiques prépare les étudiants à devenir des techniciens du droit dans des domaines variés : études de notaires, d’huissiers mais aussi des cabinets d’expert-comptable ou des services de ressources humaines.',
                'responsable' => 'Gilles Darmon',
                'mail_responsable' => 'gilles.darmon@univ-reims.fr',
                'tel_responsable' => '03 25 42 71 73',
                'lien_page_description' => ''
            ],
            [
                'nom' => 'Genie Mécanique et Productique',
                'sigle' => 'GMP',
                'couleur' => '#4c9ee3',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_194.jpg',
                'presentation' => 'Le département Génie Mécanique et Productique de l’IUT de Troyes a pour vocation de former des techniciens généralistes capables d’assurer le cycle de vie d’un produit industriel, de sa conception à sa mise en production.',
                'responsable' => 'Claire Barritault',
                'mail_responsable' => 'claire.barritault@univ-reims.fr',
                'tel_responsable' => '03 25 42 46 23',
                'lien_page_description' => ''
            ],
            [
                'nom' => 'Genie Electrique et Informatique Industrielle',
                'sigle' => 'GEII',
                'couleur' => '#ff8a41',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/media/images/LOGOS%20IUT/IUT_Genie-Electrique-Informatique-Industrielle.jpg',
                'presentation' => 'Le département Génie électrique et informatique industrielle (GEII) de l’IUT de Troyes forme les étudiants aux métiers liés à la gestion de l’énergie électrique, l’informatique industriel, l’électronique ou encore l’automatisme.',
                'responsable' => 'Frédéric Morain-Nicolier',
                'mail_responsable' => 'frederic.nicolier@univ-reims.fr',
                'tel_responsable' => '03 25 42 71 24',
                'lien_page_description' => ''
            ],
            [
                'nom' => 'Techniques de Commercialisation',
                'sigle' => 'TC',
                'couleur' => '#123f98',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_193.jpg',
                'presentation' => 'Le département Techniques de Commercialisation (TC) de l’IUT de Troyes forme les étudiants aux métiers liés au commerce et au marketing dans des secteurs variés : banque, grande distribution, assurances, etc...',
                'responsable' => 'Amanda Didier',
                'mail_responsable' => 'amanda.didier@univ-reims.fr',
                'tel_responsable' => '03 25 42 46 24',
                'lien_page_description' => ''
            ],
            [
                'nom' => 'Formation Continue',
                'sigle' => 'FC',
                'couleur' => '#d22cab',
                'logo' => 'https://www.iut-troyes.univ-reims.fr/assets/img/logo_193.jpg',
                'presentation' => 'Ce type de formation concerne ceux qui sont rentrés dans la vie active et ont donc quitté la formation initiale (études). Elle permet aux personnes qui sont déjà dans la vie active de pouvoir continuer à se former pour améliorer leurs compétences et de s\'adapter aux nouvelles technologies, pratiques ou méthodes appliqués en entreprise. Elle permet également la reconversion professionnelle.',
                'responsable' => 'Département de la Formation Continue',
                'mail_responsable' => '',
                'tel_responsable' => '',
                'lien_page_description' => ''
            ]
        ];

        return $this->render(
            'departements.html.twig',
            [
                'depts' => $departements,
            ]
        );
    }


function Actu()
{
    $actualites =  [
        [
            'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-fermestivale-2022.jpg',
            'titre' => 'Fermeture estivale 2022',
            'date' => '20/07/2022',
            'lien_page_description' => ''
        ],
        [
            'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-inscriptions-rentree2022.jpg',
            'titre' => 'Campagne d\'inscription - Rentrée 2022',
            'date' => '06/07/2022',
            'lien_page_description' => ''
        ],
        [
            'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-Actu-rentree2022.jpg',
            'titre' => 'Dates rentrée 2022',
            'date' => '01/07/2022',
            'lien_page_description' => ''
        ],
        [
            'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-geii-prixconcoursEEA-2022.jpg',
            'titre' => 'Premier prix du concours EEA 2022',
            'date' => '27/06/2022',
            'lien_page_description' => ''
        ],
        [
            'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-Actu-cafeparentsjuin2022.jpg',
            'titre' => 'Premiers pas à l\'université : café des parents',
            'date' => '08/06/2022',
            'lien_page_description' => ''
        ],
        [
            'image' => 'https://www.iut-troyes.univ-reims.fr/media/images/2022/Visuel-Actu-concoursEEA2022.jpg',
            'titre' => 'Finale concours EEA 2022',
            'date' => '01/06/2022',
            'lien_page_description' => ''
        ],
    ];

    return $this->render(
        'actualites.html.twig',
        [
            'actu' => $actualites,
        ]
    );
}

    function Chiffres()
    {
        $liutenchiffres =  [
            [
                'nombre' => '1544',
                'intitulé' => 'Etudiant.es et stagiaires',
            ],
            [
                'nombre' => '857',
                'intitulé' => 'Diplômé.es chaque année',
            ],
            [
                'nombre' => '88',
                'intitulé' => 'Enseignant.es en poste',
            ],
            [
                'nombre' => '44',
                'intitulé' => 'personnels administratifs et techniques',
            ],
            [
                'nombre' => '192',
                'intitulé' => 'Intervenants professionnels',
            ],
            [
                'nombre' => '6',
                'intitulé' => 'B.U.T dispensés',
            ],
            [
                'nombre' => '9',
                'intitulé' => 'Licences professionnelles',
            ],
            [
                'nombre' => '1',
                'intitulé' => 'Service de formation continue certifié ISO 9001',
            ],
            [
                'nombre' => '3',
                'intitulé' => 'Laboratoires de recherche',
            ],
            [
                'nombre' => '21999',
                'intitulé' => 'Mètres carré de bâtiments',
            ],
            [
                'nombre' => '29',
                'intitulé' => 'Universités partenaires',
            ],
            [
                'nombre' => '8',
                'intitulé' => 'Associations étudiantes',
            ],
        ];

        return $this->render(
            'liut_en_chiffres.html.twig',
            [
                'chiffres' => $liutenchiffres,
            ]
        );
    }

    function Orga()
    {
        $direction =  [
            [
                'poste' => 'Directeur de l\'IUT de Troyes',
                'nom' => 'Martial Martin',
            ],
            [
                'poste' => 'Président du Conseil d\'Institut',
                'nom' => 'François Gré',
            ],
            [
                'poste' => 'Directeur adjoint de l\'IUT de Troyes',
                'nom' => 'David Annebicque',
            ],
            [
                'poste' => 'Cheffe des service administratifs',
                'nom' => 'Véronique Concil',
            ],
        ];

        $administration =  [
            [
                'service' => 'Ressources Humaines',
                'nom' => 'Patricia Lépinois',
            ],
            [
                'service' => 'Comptabilité',
                'nom' => 'Marie Kitzinger | Fanny Passemard',
            ],
            [
                'service' => 'Secrétariat de Direction',
                'nom' => 'Véronique Planson | Fanny Passemard',
            ],
            [
                'service' => 'Communication',
                'nom' => 'Véronique Concil | Michaël Tourneux',
            ],
            [
                'service' => 'Culture',
                'nom' => 'Caroline Adam',
            ],
        ];

        $vieetudiante =  [
            [
                'service' => 'Accueil',
                'nom' => 'Julia Fridel',
            ],
            [
                'service' => 'Responsable vie étudiante',
                'nom' => 'Sarah Mocquery',
            ],
            [
                'service' => 'Scolarité',
                'nom' => 'Marie-Aude Febvre',
            ],
            [
                'service' => 'Relations Internationales',
                'nom' => 'Sarah Mocquery',
            ],
            [
                'service' => 'Santé',
                'nom' => 'Nathalie Mérino',
            ],
        ];

        $logistique =  [
            [
                'service' => 'Chargé d\opérations',
                'nom' => 'Thomas Moya',
            ],
            [
                'service' => 'Patrimoine, sécurité et maintenance',
                'nom' => 'Sébastien Tupet | Francis Noirot | Pascal PELLÉ | Kevin SESTER | Julien FUGÈRE | David BOUILLOT | Thanh Tan TRAN',
            ],
            [
                'service' => 'Propreté des locaux',
                'nom' => 'Brigitte CLOCHETTE | Sylvie LEBRUN | Wuilly RANDRIANTSOA',
            ],
            [
                'service' => 'Concierge',
                'nom' => 'Kévin Sester',
            ],
            [
                'service' => 'Reprographie',
                'nom' => 'Philippe Dieu',
            ],
        ];

        $informatique =  [
            [
                'service' => 'Responsable',
                'nom' => 'Brahim Machkouri',
            ],
            [
                'service' => 'Equipe',
                'nom' => 'Rachid AZEGAGH | Vijai Anandh DJEREAM | Eric MILLET | Bastien VUILLEMARD',
            ],
            [
                'service' => 'Alternante',
                'nom' => 'Cyndel Herolt',
            ],
        ];

        $relationsinternationales =  [
            [
                'service' => 'Chargée de mission',
                'nom' => 'Sarah Mocquery',
            ],
        ];

        $bibliotheque =  [
            [
                'service' => 'Responsable',
                'nom' => 'Valérie Mariot',
            ],
            [
                'service' => 'Equipe',
                'nom' => 'Béranger OSTIN | Gabriel REYMOND',
            ],
        ];

        $recherches =  [
            [
                'service' => 'CReSTIC Images',
                'nom' => 'Frédéric MORAIN-NICOLIER | Victor CHEN | Anes DELAHAIES | Régis HUEZ | Jérôme LANDRÉ | Stéphane LEBONVALLET | Gilles MILLON',
            ],
            [
                'service' => 'CReSTIC Automatiques',
                'nom' => 'Abdelaziz HAMZAOUI | Najib ESSOUNBOULI | David ANNEBICQUE | Lghani MENHOUR | Frédéric NOLLET',
            ],
            [
                'service' => 'ITHEMM',
                'nom' => 'Mustapha ASSARAR | Daniel SCIDA | Wajdi ZOUARI',
            ],
        ];

        $GEA =  [
            [
                'poste' => 'Chef de département',
                'nom' => 'Damien Blaise',
            ],
            [
                'poste' => 'Directeurs des études',
                'nom' => 'Anne Grenet | Pascal Miraux',
            ],
            [
                'poste' => 'Responsable Parcours : Gestion, Entrepreneuriat et Management d’Activités',
                'nom' => 'Michèle Robert',
            ],
            [
                'poste' => 'Assistante',
                'nom' => 'Stéphanie Beaujeu',
            ],
        ];

        $GEII =  [
            [
                'poste' => 'Chef de département',
                'nom' => 'Frédéric Morain-Nicolier',
            ],
            [
                'poste' => 'Chef de département adjoint',
                'nom' => 'Bastien Jacquot',
            ],
            [
                'poste' => 'Directeur des études',
                'nom' => 'Stéphane Lebonvallet',
            ],
            [
                'poste' => 'Responsable Parcours : Automatisme et Informatique Industrielle',
                'nom' => 'William Kutyla',
            ],
            [
                'poste' => 'Responsable LP Maintenance et Technologie : systèmes pluritechniques - objets connectés',
                'nom' => 'Fabrice Sisternas',
            ],
            [
                'poste' => 'Assistance à la pédagogie',
                'nom' => 'Patrice MITTEAUX | Alexandre REMY',
            ],
        ];


        return $this->render(
            'organigramme.html.twig',
            [
                'direction' => $direction,
                'admin' => $administration,
                'vieetudiante' => $vieetudiante,
                'logistique' => $logistique,
                'informatique' => $informatique,
                'international' => $relationsinternationales,
                'biblio' => $bibliotheque,
                'recherches' => $recherches,
                'gea' => $GEA,
                'geii' => $GEII,
            ]
        );
    }
}