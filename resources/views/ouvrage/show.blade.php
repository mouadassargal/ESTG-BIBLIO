@extends('layouts.app')

@section('content')


<div class="container">
<div class="card">
  <h5 class="card-header">{{$ouvrage->title}}</h5>
  <div class="card-body">
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      
        <h4 class="card-title">A propos de l'ouvrage : </h4>
        <ul>
        <li>Ecrit par : {{$ouvrage->auteur}}</li>
      <li>Editer par : {{$ouvrage->editeur}}</li>
      <li>Edition : {{$ouvrage->edition}}</li>
     
        </ul>
        <h4 class="card-title">Description de l'ouvrage : </h4>
        <p class="card-text">{{$ouvrage->descr}}</p>
        <a target="_blank" href="{{url('librarys/create')}}" class="btn btn-primary">Demander</a>
        <a href="{{url('ouvrages')}}" class="btn btn-primary">Retour</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      
      <div class="card-body">
      <h4 class="card-title">Miniature: </h4>

      <img width="300px" height="500px" src="{{ asset('storage/'.$ouvrage->photo) }}" class="card-img-top img-thumbnail" alt="">

      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
@endsection