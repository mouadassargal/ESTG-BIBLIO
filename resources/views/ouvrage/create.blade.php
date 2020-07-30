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
<h1>Ajouter un livre </h1>
<hr>
<div class="float-right">
    <a href="{{ url('ouvrages')}}" class="btn btn-primary">Retour</a>
</div>
  <div class="row">
    <div class="col md 12">
    <form action="{{ url('ouvrages') }}" enctype="multipart/form-data" method="post">
      @csrf
  <div class="form-group  @if($errors->get('title')) has-errors @endif">
    <label for="title">Titre</label>
    <input type="text" 
    name="title" 
    class="form-control"
     id="title" 
     placeholder="Enter Title" 
     value="{{old('title')}}">
     @if($errors->get('title'))
     @foreach($errors->get('title') as $message)
     <li>{{ $message }}</li>
     @endforeach
     @endif
  </div>
  <div class="form group">
  <label for="descr">Description</label>
    <textarea
     name="descr" 
    class="form-control" 
    id="descr" 
    placeholder="Enter Auteur"
     value="{{old('descr')}}">
  </textarea>
  </div>
  <div class="form group">
  <label for="photo">Image</label>
  <input class="form-control" type="file" name="photo" >
  </div>
  <div class="form-group @if($errors->get('filiere')) has-errors @endif">
    <label for="filiere">Filiére</label>
    <select class="form-control" 
    id="filiere" 
    name="filiere" 
    value="{{old('filiere')}}">
    @if($errors->get('filiere'))
     @foreach($errors->get('filiere') as $message)
     <li>{{ $message }}</li>
     @endforeach
     @endif
      <option>EREE</option>
      <option>ME</option>
      <option>INFO</option>
    </select>
  </div>
  <div class="form-group @if($errors->get('auteur')) has-errors @endif">
    <label for="auteur">Auteur</label>
    <input type="text"
     name="auteur" 
    class="form-control" 
    id="auteur" 
    placeholder="Enter Auteur"
     value="{{old('auteur')}}">
     @if($errors->get('auteur'))
     @foreach($errors->get('auteur') as $message)
     <li>{{ $message }}</li>
     @endforeach
     @endif
  </div>
  <div class="form-group @if($errors->get('editeur')) has-errors @endif">
    <label for="editeur">Editeur</label>
    <input type="text"
     name="editeur" 
    class="form-control" 
    id="editeur" 
    placeholder="Enter Editeur" 
    value="{{old('editeur')}}">
    @if($errors->get('editeur'))
     @foreach($errors->get('editeur') as $message)
     <li>{{ $message }}</li>
     @endforeach
     @endif
  </div>
  <div class="form-group">
    <label for="edition">Edition</label>
    <input type="text"
     name="edition" 
    class="form-control"
     id="edition"
     placeholder="Enter l'edition" 
    value="{{old('edition')}}"
    >
  
  </div>
  <button type="submit" 
  name="" 
  class="btn btn-primary">Enregistrer le livre</button>
</form>
    </div>
  </div>


</div>
@endsection
@section('part.footer')
@endsection