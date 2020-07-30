<?php

namespace App\Http\Controllers;

use App\Request;
use App\Http\Requests\requestRequest;
use Auth;

class RequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
return view('request.index');
    }
    public function create(){
        return view('request.create');
    }
    public function store(requestRequest $request){
        $request = new Request();

        $request->etudiant = $request->input('etudiant');
        $request->filiere = $request->input('filiere');
        $request->cne = $request->input('cne');
        $request->cni = $request->input('cni');
        $request->code = $request->input('code');
        $request->date = $request->input('date');
        $request->save();
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
