<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected static $projects = [
        [
            'id' => 1,
            'slug' => 'piattaforma-di-ecommerce',
            'nome' => 'Piattaforma di eCommerce',
            'descrizione' => 'Una piattaforma per vendere prodotti online con pagamento integrato.',
            'image' => 'https://picsum.photos/id/3/200/300'
        ],
        [
            'id' => 2,
            'slug' => 'applicazione-per-task',
            'nome' => 'Applicazione per Task',
            'descrizione' => 'Un’app per organizzare e monitorare le attività giornaliere.',
            'image' => 'https://picsum.photos/id/3/200/300'

        ],
        [
            'id' => 3,
            'slug' => 'software-gestionali',
            'nome' => 'Software Gestionali',
            'descrizione' => 'Strumenti per automatizzare la contabilità e la gestione aziendale.',
            'image' => 'https://picsum.photos/id/6/200/300'

        ],
    ];
    public function homepage()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('chisono');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        $services = ['comunicazione', 'website', 'consulenza'];

        return view(
            'services',
            [
                'services' => $services,
                'projects' => self::$projects
            ]
        );
    }

    public function service($service)
    {
        return  view('service', ['service' => $service]);
    }

    public function project($project)
    {
        //project = ago
        //projects = paglia
        //abort(404); 

        foreach (self::$projects as $element) {
            if ($element['slug'] == $project) {
                return view('project', ['project' => $element]);
            }
        }
        abort(404);
    }
}
