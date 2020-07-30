@extends('layouts.app')

@section('content')


<div class="container">
<div class="col-md-12">
  @if(session()->has('success'))
  <div class="alert alert-success">
    {{ session()->get('success')}}
  </div>
  @endif
</div>
<h1>Ajouter un rapport </h1>
<hr>
<div class="float-right">
    <a href="{{ url('rapports')}}" class="btn btn-primary">Retour</a>
</div>
  <div class="row">
    <div class="col md 12">
    <form action="{{ url('rapports') }}" enctype="multipart/form-data" method="post">
    @csrf
  <div class="form-group">
    <label for="title">Théme de Sujet</label>
    <input type="text" 
    name="title" 
    class="form-control"
     id="title" 
     placeholder="Enter Title" 
     value="">
  </div>
  <div class="form group">
  <label for="descri">Description</label>
    <textarea
     name="descri" 
    class="form-control" 
    id="descri" 
    placeholder="Enter Auteur"
     value="">
  </textarea>
  </div>
 
  <div class="form-group">
    <label for="filiere">Filiére</label>
    <select class="form-control" 
    id="filiere" 
    name="filiere" 
    value="">
      <option>EREE</option>
      <option>ME</option>
      <option>INFO</option>
      <option>ERP</option>
      <option>GOESS</option>
      <option>IS</option>
      <option>INFO</option>
    </select>
  </div>
  <div class="form-group">
    <label for="etudiant">Rédiger par</label>
    <input type="text"
     name="etudiant" 
    class="form-control" 
    id="etudiant" 
    placeholder="Enter Auteur"
    >
  </div>
  <div class="form-group">
    <label for="typerapport">Type de Rapport</label>
    <select class="form-control" 
    id="typerapport" 
    name="typerapport" 
    value="">
 
      <option>Stage initiation</option>
      <option>PFE</option>
      <option>SFE</option>
    </select>
  </div>
  <div class="form group">
  <label for="versionpdf">Page de garde</label>
  <input class="form-control" type="file" name="versionpdf" >
  </div>
  <div class="form-group">
    <label for="date">Année Universitaire</label>
    <input type="text"
     name="date" 
    class="form-control"
     id="date"
     placeholder="Enter l'edition" 
    value=""
    >
  </div>
  <button type="submit" 
  name="" 
  class="btn btn-primary">Enregistrer le rapport</button>
</form>
    </div>
  </div>


</div>
@endsection