@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row">
  <div class="col-md-12">
  <div class="container">
  <div class="row">
    <div class="col">
    <h1>Liste des rapports disponibles</h1>

    </div>
    <div class="col">
 
    @if(auth::user()->is_admin)

@else<div class="float-right" style="
    padding-top: 9px;
">

    <a target="_blank" href="{{ url('librarys/create')}}" class="btn btn-success">Demander</a>
   
</div>

@endif
    </div>
  </div>
<hr>


</div>
  <table class="table table-bordered text-center">

  <thead class="thead-dark ">
  <div class="row">

    <tr>
      <th scope="col">Type</th>
      <th scope="col">Description</th>
      <th scope="col">Réalisé par</th>
      <th scope="col">A.U</th>
     

    </tr>
    </div>

  </thead>
  @foreach($rapports as $rapport)
  <tbody>

    <tr>
      <th scope="row">{{$rapport->typerapport}}</th>
      <td>{{$rapport->descri}}</td>
      <td>{{$rapport->etudiant}}</td>

      <td>{{$rapport->date}}</td>
   
</td>

    </tr>
  </tbody>
  @endforeach
</table>

  </div>
</div>
<br>
<div class="container">
  <div class="col-md-12">
 {{$rapports->links()}}
  </div>
</div>
@endsection