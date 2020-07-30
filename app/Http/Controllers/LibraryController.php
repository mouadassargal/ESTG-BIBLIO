<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
class LibraryController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function index(){

    }
    public function create(){
        return view('library.create');
    }
    public function store(Request $request){
        $library = new Library();

        $library->demande = $request->input('demande');
        $library->etudiant = $request->input('etudiant');
        $library->filiere = $request->input('filiere');
        $library->cne = $request->input('cne');
        $library->cni = $request->input('cni');
        $library->email = $request->input('email');
        $library->code = $request->input('code');
        $library->date_de_demande = $request->input('date_de_demande');

        $library->save();
        session()->flash('success','Votre demande a été bien envoyé');

return redirect('ouvrages');


    }
    public function destory(){
        
    }
    public function update(){
        
    }
    public function edit(){
        
    }
    

}
