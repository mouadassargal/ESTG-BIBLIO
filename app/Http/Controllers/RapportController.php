<?php

namespace App\Http\Controllers;
use App\Http\Requests\rapportRequest;
use Illuminate\Http\Request;
use App\Rapport;
use Auth;
use Image;

class RapportController extends Controller{
public function __construct()
{
    $this->middleware('auth');
}
public function index(){
 
       
        $rapports = Rapport::orderBy('created_at','desc')->paginate(4);
return view('rapport.index', compact('rapports'));

        
        
    
}
public function search(Request $request){
 

}
public function create(){
    
    return view('rapport.create');
}
public function store(Request $request){
    $rapport = new Rapport();

    $rapport->title = $request->input('title');
    $rapport->filiere = $request->input('filiere');
    $rapport->versionpdf = $request->input('versionpdf');
    $rapport->descri = $request->input('descri');
    $rapport->etudiant = $request->input('etudiant');
    $rapport->typerapport= $request->input('typerapport');
    $rapport->date = $request->input('date');
    
    
    if ($request->file('versionpdf') == null) {
        $file = "";
    }else{
       $file = $request->file('versionpdf')->store('rapports');  
    }
   
    Image::make($request->file('versionpdf')->getRealPath());

    $rapport->versionpdf=$file;
    $rapport->save();
    session()->flash('success','Le rapport a été bien enregistré');
    return redirect('rapports');
}
public function edit($id){
   
    /*$rapport = Rapport::find($id);
    $this->authorize('update',$rapport);
    return view('rapport.edit',['rapport' => $rapport]);

    */
}
public function update(rapportRequest $request,$id){
    $rapport = Rapport::find($id);
    $rapport->title = $request->input('title');
    $rapport->auteur = $request->input('auteur');
    $rapport->photo = $request->input('photo');
    $rapport->editeur = $request->input('editeur');
    $rapport->edition = $request->input('edition');

    $rapport->filiere = $request->input('filiere');

    $rapport->save();
    return redirect('rapports');
}
public function destroy(Request $request,$id){
    $rapport=Rapport::find($id);
    // dd($livre);
    $rapport->delete();
return redirect('rapports');
}
public function show($id){
    $rapport = Rapport::findOrFail($id);
    return view('rapport.show',['id' => $id],compact('rapport'));
}
public function demanderapp(){
    
}

}
