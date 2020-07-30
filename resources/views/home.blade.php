@extends('layouts.app')

@section('content')
<div class="container">
  <div class="">
<div class="row">
  <div class="col-12 col-md-3">
  <div class="card">
  <div class="card-header ">Profil</div>
 <div class="card text-center">
   <div class="container-fluid">
   <br />
   <img width="100px" height="100px" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" class="img-thumbnail" alt="...">

   </div>
  <div class="card-body">
    <h6 class="card-title">Bienvenue {{ Auth::user()->name }}</h6>
    <h6 class="card-title"> <i class="fas fa-envelope"></i> {{ Auth::user()->email }}</h6>

    @if(auth::user()->is_admin)
    <a href="ouvrages/create" class="btn btn-primary">+ Ouvrage</a>
    <a href="rapports/create" class="btn btn-primary">+ Rapport</a>

    @endif
  </div>

  </div>
</div>

  </div>
  <div class="col-6 col-md-9">
  <div class="card ">
  <div class="card-header">Tableau du bord</div>

  <div class="row text-center">
  <div class="col-sm-6">
    <div class="card border-light border-0">
      <div class="card-body">
      <img width="100px" height="100px" src="https://image.flaticon.com/icons/svg/2963/2963184.svg" class="img-thumbnail" alt="...">
        <h5 class="card-title">Livres diponibles</h5>
        <a href="ouvrages" class="btn btn-primary">Acceder</a>
      </div>
    </div>
  </div>


  <div class="col-sm-6">
    <div class="card border-light border-0">
      <div class="card-body">
      <img width="100px" height="100px" src="https://image.flaticon.com/icons/svg/2977/2977651.svg" class="img-thumbnail" alt="...">
        <h5 class="card-title text-center">Rapports des stages</h5>
        <a href="rapports" class="btn btn-primary">Acceder</a>
      </div>
    </div>
  </div>
  
</div>
<br />

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Autres Services
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body text-center">
      <a target="_blank" href="http://cfc-uiz.ma" type="button" class="btn btn-dark">Centre de Formation et de Certification</a>
<a target="_blank" href="https://uiz.scholarvox.com" type="button" class="btn btn-secondary">ScholarVox UIZ</a>
<a target="_blank" href="#" type="button" class="btn btn-warning">TP online</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Clubs et Associations
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body text-center">
      <a target="_blank" href="http://www.fb.com/bde.estg" type="button" class="btn btn-danger">Bureau des étudiants</a>
<a target="_blank" href="#" type="button" class="btn btn-secondary">Associations des lauréats</a>
<a target="_blank" href="#" type="button" class="btn btn-warning">Enactus</a>
<a target="_blank" href="#" type="button" class="btn btn-success">Club Social</a>
<a target="_blank" href="#" type="button" class="btn btn-info">Sportif</a>
<a target="_blank" href="#" type="button" class="btn btn-dark">Technology Next Level</a>

    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        L'Assurance Maladie
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body text-center">
      <img src="http://preinsdoc.uiz.ac.ma/images/amoetu.png" class="img-thumbnail" alt="...">
<br />
      <a target="_blank" href="http://preinsdoc.uiz.ac.ma/amo.php" type="button" class="btn btn-info">AMO</a>

      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>
</div>

            
            
    
        

@endsection
