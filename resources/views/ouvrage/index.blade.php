@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.all.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
<div class="container">
<div class="row">
<div class="col-md-12">
@if(session()->has('success'))
<div class="alert alert-success">
{{ session()->get('success')}}
</div>
@endif
<div>

<h1>Liste des ouvrages disponibles</h1>
<hr>


<div class="row">
    @foreach($ouvrages as $ouvrage)
   <div class="col-sm-6 col-md-4">
   <div class="card text-center border-primary mb-3" style="width: 18rem;">
  <img width="400px" height="200px" src="{{ asset('storage/'.$ouvrage->photo) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $ouvrage->title }}</h5>
    <p class="card-text"></p>
    
  <form action="{{ route('ouvrages.destroy',$ouvrage) }}" method="POST">

    @csrf
    @method("DELETE")

    <a href="{{route('ouvrages.show',$ouvrage->id)}}" class="btn btn-primary">Accéder</a>
    @if(auth::user()->is_admin)
      @can('UPDATE',$ouvrage)
      <a href="{{ route('ouvrages.edit', $ouvrage) }}" class="btn btn-success">Editer</a>
      @endcan
      @can('DELETE',$ouvrage)
      <button type="submit" class="btn btn-danger">Supprimer</button>

      @endcan
    @endif
  </form>

  </div>
</div>
<br>
   </div>
   
   @endforeach
   </div>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="container">
  <div class="col-md-12">
 {{$ouvrages->links()}}
  </div>
</div>
@endsection