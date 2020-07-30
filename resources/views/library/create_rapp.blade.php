@extends('layouts.app')


@section('content')
<div class="container">
<div class="alert alert-danger" role="alert">
  Veuillez respecter la date de demande !! Aprés 48 votre demande sera supprimé
</div>
<div class="card">
    
<h5 class="card-header">Demander un rapport</h5>

  <div class="card-body">
  <div class="row">
      <div class="col-sm-6">
      <form action="{{ url('request') }}" enctype="multipart/form-data" method="post">
      @csrf
  <div class="form-group  @if($errors->get('title')) has-errors @endif">
    <label for="etudiant"><b>Nom et Prénom</b></label>
    <input type="text" 
    name="etudiant" 
    class="form-control"
     id="etudiant" 
     placeholder=""
     value="{{ Auth::user()->name }}">
     @if($errors->get('title'))
     @foreach($errors->get('title') as $message)
     <li>{{ $message }}</li>
     @endforeach
     @endif
  </div>
  <div class="form-group  @if($errors->get('title')) has-errors @endif">
    <label for="cni"><b>Code National de l'étudiant</b></label>
    <input type="text" 
    name="cni" 
    class="form-control"
     id="cni" 
     placeholder="Enter CNI" 
     value="">
  </div>
  <div class="form-group @if($errors->get('filiere')) has-errors @endif">
    <label for="filiere"><b>Filiére</b></label>
    <select class="form-control" 
    id="filiere" 
    name="filiere" 
    value="">
      <option>EREE</option>
      <option>ME</option>
      <option>INFO</option>
      <option>LP ERP</option>
      <option>LP IDS</option>
      <option>LP IS</option>
      <option>LP GEOSS</option>
    </select>
  </div>
  <div class="form-group  @if($errors->get('title')) has-errors @endif">
    <label for="email"><b>Email</b></label>
    <input type="text" 
    name="email" 
    class="form-control"
     id="email" 
     placeholder="Votre email uiz"
     value="">
 
  </div>
 
 
</form>
      </div>
      <div class="col-sm-6">
      <div class="form-group @if($errors->get('auteur')) has-errors @endif">
    <label for="auteur"><b>Code National d'Identité</b></label>
    <input type="text"
     name="cne" 
    class="form-control" 
    id="cne" 
    placeholder="Entrer CNE"
     value="">
  </div>
  <div class="form-group  @if($errors->get('title')) has-errors @endif">
    <label for="code"><b>Code Etudiant</b></label>
    <input type="text" 
    name="code" 
    class="form-control"
     id="code" 
     placeholder="Num d'inscription"
     value="">
  </div>
  <div class="form-group @if($errors->get('editeur')) has-errors @endif">
    <label for="editeur"><b>Demande (Veuillez Entrer le titre de l'ouvrage ou bien le rapport)</b></label>
    <input type="text"
     name="editeur" 
    class="form-control" 
    id="editeur" 
    placeholder="Titre de l'ouvrage/Titre de rapport..." 
    value="">
  </div>
  <div class="form-group">
    <label for="date_de_demande"><b>Date de demande</b></label>
    <input type=date
     name="date_de_demande" 
    class="form-control"
     id="date_de_demande";
    >
  
  </div>

      </div>
  </div>
  </div>
  <button type="submit" 
  name="" 
  class="btn btn-primary">Demander</button>
</div>
</div>
@endsection