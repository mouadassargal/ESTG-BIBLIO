@extends('layouts.app')

@section('content')


<div class="container">
<div class="card">
  <h5 class="card-header">{{$rapport->title}}</h5>
  <div class="card-body">
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      
        <h4 class="card-title">A propos du rapport : </h4>
        <ul>
        <li>Rédigé par : {{$rapport->etudiant}}</li>
      <li>Filiére : {{$rapport->filiere}}</li>
      <li>Type de rapport : {{$rapport->typerapport}}</li>
     
        </ul>
        <h4 class="card-title">Description du rapport : </h4>
        <p class="card-text">{{$rapport->descri}}</p>
        <a href="{{url('/demanderapp')}}" class="btn btn-primary">Demander</a>
        <a href="{{url('rapports')}}" class="btn btn-primary">Retour</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      
      <div class="card-body">
      <h4 class="card-title">Miniature: </h4>

      <img width="300px" height="500px" src="{{ asset('storage/'.$rapport->photo) }}" class="card-img-top img-thumbnail" alt="">

      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
@endsection