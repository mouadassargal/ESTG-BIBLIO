<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Intervention\image\Fascades\Images;
use App\Ouvrage;
use App\Http\Requests\livreRequest;
use Auth;
use Image;
use DB;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class OuvrageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
     
            /*$listouv = Ouvrage::All();*/
            $ouvrages = Ouvrage::orderBy('created_at','desc')->paginate(6);
return view('ouvrage.index', compact('ouvrages'));

            
            
        
    }
    public function search(Request $request){
        /*$search = $request->get('search');
        $ouvrages = DB::table('ouvrage')->where('title','like','%'.$search.'%')->paginate(5);
        return view( 'ouvrage.index',['ouvrages'=>$ouvrages]);
*/
    }
    public function create(){
        
        return view('ouvrage.create');
    }
    public function store(livreRequest $request){
        $ouvrage = new Ouvrage();

        $ouvrage->title = $request->input('title');
        $ouvrage->filiere = $request->input('filiere');
        $ouvrage->descr = $request->input('descr');

        $ouvrage->auteur = $request->input('auteur');
        $ouvrage->editeur = $request->input('editeur');
        $ouvrage->edition = $request->input('edition');
        $ouvrage->user_id = Auth::user()->id;
        
        if ($request->file('photo') == null) {
            $file = "";
        }else{
           $file = $request->file('photo')->store('images');  
        }
       
        Image::make($request->file('photo')->getRealPath());

        $ouvrage->photo=$file;
        $ouvrage->save();
        session()->flash('success','Le Livre a été bien enregistré');
        return redirect('ouvrages');
    }
    public function edit($id){
       
        $ouvrage = Ouvrage::find($id);
        $this->authorize('update',$ouvrage);
        return view('ouvrage.edit',['ouvrage' => $ouvrage]);

        
    }
    public function update(livreRequest $request,Ouvrage $ouvrage){
        // dd($ouvrage);
        // $ouvrage = Ouvrage::find($id);
        $ouvrage->title = $request->input('title');
        $ouvrage->auteur = $request->input('auteur');
        // $ouvrage->photo = $request->input('photo');
        if ($request->file('photo') != null) {
           
           $ouvrage->photo = $request->file('photo')->store('images');  
        }
        $ouvrage->editeur = $request->input('editeur');
        $ouvrage->edition = $request->input('edition');

        $ouvrage->filiere = $request->input('filiere');

        $ouvrage->save();
        return redirect('ouvrages');
    }
    public function destroy(Request $request,$id){
        $ouvrage=Ouvrage::find($id);
        // dd($livre);
        $ouvrage->delete();
return redirect('ouvrages');
    }
    public function show($id){
        $ouvrage = Ouvrage::findOrFail($id);
        return view('ouvrage.show',['id' => $id],compact('ouvrage'));
    }
    
   
  
}
