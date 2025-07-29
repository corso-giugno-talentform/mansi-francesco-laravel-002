<?php

namespace App\Http\Controllers;

use App\Mail\SendAdminMail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function send(Request $request)
    {
        //Step 1: vado a validare i dati del form
        $request->validate([
            'firstname' => ['required'], //max 20 caratteri
            'lastname' => ['required'], //max 20 caratteri
            'email' => ['required', 'email'],
            'message' => ['required'], //min 10 caratteri
        ]);

        //Step2: Una volta validati, procedo con il mapping
        $data = [
            'firstname' => strtolower($request->firstname),
            'lastname' => $request->lastname,
            'email' => 'Email inserita: ' . $request->email,
            'message' => $request->message
        ];
        if ($request->project_id) {
            foreach (self::$projects as $element) {
                if ($element['id'] == $request->project_id) {
                    $data['nome_prodotto'] = $element['nome'];
                    $data['descrizione'] = $element['descrizione'];
                }
            }
        }
        //Step3: faccio qualcosa
        //Step3: Invio email con use Illuminate\Support\Facades\Mail;
        Mail::to($request->email)->send(new SendMail($data));
        Mail::to('admin@miosito.it')->send(new SendAdminMail($data));

        //Step4: Ritorno un messagio di successo
        //$request->session()->flash('status', 'Task was successful!');
        $text = 'Grazie per averci contattato. Riceverai una email al piu presto.';
        return redirect()->back()->with('success', $text);
    }
}
