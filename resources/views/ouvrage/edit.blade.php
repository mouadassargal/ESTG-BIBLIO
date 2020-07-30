@extends('layouts.app')

@section('content')
@if(count($errors))
<div class="alert alert-danger" role="alert">
  <ul>
@foreach($errors->all() as $message)
<li>{{ $message }}</li>
@endforeach
  </ul>
</div>
@endif

<div class="container">
<h1>Modifier un ouvrage </h1>
<hr>
<div class="float-right">
    <a href="{{ url('ouvrages')}}" class="btn btn-primary">Retour</a>
</div>

  <div class="row">
    <div class="col md 12">
    <form action="{{ route('ouvrages.update',$ouvrage) }}" enctype="multipart/form-data" method="post">
    @csrf
@method("PUT")

    <div class="form-group  @if($errors->get('title')) has-errors @endif">
    <label for="title">Titre</label>
    <input type="text" 
    name="title" 
    class="form-control"
     id="title" 
     placeholder="Enter Title" 
     value="{{$ouvrage->title}}">
     @if($errors->get('title'))
     @foreach($errors->get('title') as $message)
     <li>{{ $message }}</li>
     @endforeach
     @endif
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
    value="{{$ouvrage->filiere}}">
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
     value="{{$ouvrage->auteur}}">
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
    value="{{$ouvrage->editeur}}">
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
    value="{{$ouvrage->edition}}"
    >
  
  </div>
  <input type="submit" value="Modifier" class="btn btn-primary">
</form>
    </div>
  </div>


</div>
@endsection