<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use App\Http\Requests\demandeRequest;
use Auth;

class DemandeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
return view('demande.index');
    }
    public function create(){
        return view('demande.create');
    }
    public function store(demandeRequest $request){
        $demande = new Demande();

        $demande->etudiant = $request->input('etudiant');
        $demande->filiere = $request->input('filiere');
        $demande->cne = $request->input('cne');
        $demande->cni = $request->input('cni');
        $demande->code = $request->input('code');
        $demande->date = $request->input('date');
        $demande->save();
        session()->flash('success','Votre demande a été bien envoyé');
        return redirect('home');
    }
    public function update(){
        
    }
    public function edit(){
        
    }
    public function destory(){
        
    }
}
