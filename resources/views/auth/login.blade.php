<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name', 'Laravel') }} | Connexion</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel='stylesheet' href="{{ asset('css/login/css/login.css') }}" type='text/css' media='screen' />

</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="css/login/images/login6.png" alt="login" class="login-card-img">
           
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper" >
                <img src="css/login/images/logo.png" alt="logo" class="logo" >
              </div>
              <p class="login-card-description">Bienvenue <br></p>
              <p style="font-size:15px; margin-top: -20px;"> Connectez-vous pour découvrir toutes nos fonctionnalités.</p>
              <form action="{{route('login')}}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="email" class="sr-only">E-mail</label>
                    <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control" placeholder="Adresse e-mail">
            
                
                </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
                  </div>
                  <button type="submit" class="btn btn-block login-btn mb-4" type="button">Se Connecter</button>   
                  @if ($errors->has('email'))
                 <span class="help-block">
                     <strong style="color:red">{{ $errors->first('email')}}</strong>
                 </span>
                 @endif
                  @if ($errors->has('password'))
                 <span class="help-block">
                     <strong>{{ $errors->first('password')}}</strong>
                 </span>
                 @endif
                </form>
                <a href="{{route('password.request')}}" class="forgot-password-link">Mot de passe oublié?</a>
            
<br />
               
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
