<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    protected $nomEntreprise;

    public function __construct()
    {
        $this->nomEntreprise = config('app.name', 'Technop');
        view()->share('nomEntreprise', $this->nomEntreprise);
    }

    public function accueil()
    {
        $description = "Entreprise leader dans le développement de solutions numériques innovantes pour les professionnels";
        return view('accueil', compact('description'));
    }

    public function services()
    {
        $services = [
            [
                'titre' => "Développement Web & Mobile",
                'description' => "Conception de sites vitrines, de plateformes e-commerce et d'applications mobiles sur mesure, performantes et adaptées à vos besoins."
            ],
            [
                'titre' => "Conseil en Cybersécurité",
                'description' => "Audits de sécurité, gestion des vulnérabilités et protection de vos données sensibles contre les cybermenaces."
            ],
            [
                'titre' => "Cloud & DevOps",
                'description' => "Optimisation de vos infrastructures, automatisation des déploiements et transition vers un environnement cloud agile et évolutif."
            ],
            [
                'titre' => "Intelligence Artificielle",
                'description' => "Intégration de modèles d'apprentissage automatique et d'outils d'IA pour automatiser vos processus et valoriser vos données."
            ],
        ];

        return view('services', compact('services'));
    }

    public function contact()
    {
        $infos = [
            'email' => 'contact@techinnov.fr',
            'telephone' => '+229 1 23 45 67 89',
            'adresse' => '42 Rue gauche avenue LongStream près du port au peche'
        ];
        $ouvert = false;
        return view('contact', compact('infos', 'ouvert'));
    }

    public function personnel()
    {
        $equipe = [
            ['nom' => 'Alice Martin', 'poste' => 'Directrice Générale'],
            ['nom' => 'Bob Durand', 'poste' => 'Développeur Lead'],
            ['nom' => 'Charlie Foxtrot', 'poste' => 'Designer UX/UI'],
            ['nom' => 'Jean Richard', 'poste' => 'Designer UX/UI'],
            ['nom' => 'Marck Zukerberg', 'poste' => ' Frontend Dev'],
            ['nom' => 'Donald Trump', 'poste' => 'Backend Dev']
        ];
        return view('personnel', compact('equipe'));
    }
}
