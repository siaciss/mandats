</html><!DOCTYPE html>
<html>
<head>
  <meta chqrset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  <title>Mandats</title>
  <link href="css\bootstrap.min.css" rel="stylesheet" /> 

  <style type="text/css">
a {
  color: white;
}
.container-log {
  width: 100%;  
  min-height: 100vh;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background-repeat: no-repeat;
  background-position: center; 
  background-size: cover; 
  position: relative; 
  z-index: 1; 
} 

.container-log::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1; 
  width: 100%;
  height: 100%;
  top: 0;
  left: 0; 
  background-color: rgba(255,255,255,0.95); 
} 
</style>
</head>

<body class="container-log" style="background-image: url('img/poste.jpg');">

  <nav class="navbar fixed-top navbar-expand-sm" style="background-color: rgba(5, 51, 127);">
    <div class="container-fluid">
      <a class="navbar-brand py-0" href="#"><img src="img\poste.jpg" width="160" height="50" class="d-inline-block align-top" alt="" style="border-radius: 35px;"></a>      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <!-- Dropdown -->

          <li class="nav-item active">
            <a class="nav-link" href="{{ URL::action('ControllerAgent@getAgent') }}">Accueil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ URL::action('ControllerPayer@getPayer') }}">Effectuer payement</a>
          </li>        

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Rapports  </a>
            <div class="dropdown-menu">
              <a target="_blank" class="dropdown-item" href="{{ URL::action('ControllerAgent@rapportja') }}">Rapport Journalier</a>
              <a class="dropdown-item" href="{{ URL::action('ControllerAgent@getRapport2') }}">Rapport Periodique</a>
            </div>
          </li>
        </ul>            
      </div>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Mon Compte  </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ URL::action('Controller@deconnecter') }}">Se Deconnecter</a>
            <a class="dropdown-item" href="{{ URL::action('ControllerAjoutUser@getNewMDPA') }}">Mot de passe</a> 
          </div>
        </li>
      </ul> 

    </div>
  </nav>

  @yield('contenu')

  <script src="js/jquery-slim.min.js" ></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>

</html>