<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Settings</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/fqq5ksl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <style>

    h1 {
      padding-top: 50px;
      font-family: "futura-pt-bold", sans-serif;
      font-weight: 700;
      font-style: normal;
    }

    h2{
      
      font-family: "futura-pt", sans-serif;
      font-weight: 700;
      font-style: normal;
    }

    h3{
      font-family: "futura-pt", sans-serif;
      font-weight: 400;
      font-style: normal;
    }


  </style>
  </head>
  <body>
    <header>

    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
                <img src="/logoimages/whitelogoonly.svg" alt="Bootstrap" width="100" height="24">
                <img src="/logoimages/whitetextonly1.svg" alt="Bootstrap" width="200" height="24">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Movies</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Bonus Features
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Deleted Scenes</a></li>
                  <li><a class="dropdown-item" href="#">Bloopers</a></li>
                  <li><a class="dropdown-item" href="#">Director's Commentary</a></li>
                  <li><a class="dropdown-item" href="#">Behind the Scenes</a></li>
                  
                  <li><a class="dropdown-item" href="#">Games</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Log In</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <main>
    
<br><br><br>

      <div class="container">

        <ul class="list-group">
          <li class="list-group-item"><strong>Account Settings</strong></li>
        </ul>
      </div>


      <br>
    <!-- User Info Code 
    ******************************-->
    
    <div class="container">

        <ul class="list-group">
          <li class="list-group-item"><strong>User Info</strong></li>
          <li class="list-group-item"><div class="row row-cols-2"><div class="col">Username: 'username'</div><div class="col"><button type="button" class="btn btn-link">Change Username</button></div></li>
          <li class="list-group-item"><div class="row row-cols-2"><div class="col">Email Address: 'email@email.com'</div><div class="col"><button type="button" class="btn btn-link">Change E-mail Address</button></div></li>
          <li class="list-group-item"><div class="row row-cols-2"><div class="col">Password: '********'</div><div class="col"><button type="button" class="btn btn-link">Change Password</button></div></li>
        </ul>
    
      </div>
    
        <!--****************************
          END USER INFO CODE -->
    
    <br>
    
    <!--Favorite Genre Code
      *************************** -->
    <div class="container">
    
      <ul class="list-group">
        <li class="list-group-item"><strong>Favorite Genres</strong></li>
  
        <li class="list-group-item"><div class="row row-cols-2"><div class="col">Action</div><div class="col">
          <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off"><label class="btn btn-outline-success" for="success-outlined">Yes</label>
          <input type="radio" class="btn-check" name="options-outlined" id="btn-check-2-outlined" autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined">Indifferent</label>
          <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off"><label class="btn btn-outline-danger" for="danger-outlined">No</label></div></li>

        <li class="list-group-item"><div class="row row-cols-2"><div class="col">Adventure</div><div class="col">
          <input type="radio" class="btn-check" name="options-outlined2" id="success-outlined2" autocomplete="off"><label class="btn btn-outline-success" for="success-outlined2">Yes</label>
          <input type="radio" class="btn-check" name="options-outlined2" id="btn-check-2-outlined2" autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined2">Indifferent</label>
          <input type="radio" class="btn-check" name="options-outlined2" id="danger-outlined2" autocomplete="off"><label class="btn btn-outline-danger" for="danger-outlined2">No</label></div></li>
  
        <li class="list-group-item"><div class="row row-cols-2"><div class="col">Comedy</div><div class="col">
          <input type="radio" class="btn-check" name="options-outlined3" id="success-outlined3" autocomplete="off"><label class="btn btn-outline-success" for="success-outlined3">Yes</label>
          <input type="radio" class="btn-check" name="options-outlined3" id="btn-check-2-outlined3" autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined3">Indifferent</label>
          <input type="radio" class="btn-check" name="options-outlined3" id="danger-outlined3" autocomplete="off"><label class="btn btn-outline-danger" for="danger-outlined3">No</label></div></li>
    
        <li class="list-group-item"><div class="row row-cols-2"><div class="col">Drama</div><div class="col">
          <input type="radio" class="btn-check" name="options-outlined4" id="success-outlined4" autocomplete="off"><label class="btn btn-outline-success" for="success-outlined4">Yes</label>
          <input type="radio" class="btn-check" name="options-outlined4" id="btn-check-2-outlined4" autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined4">Indifferent</label>
          <input type="radio" class="btn-check" name="options-outlined4" id="danger-outlined4" autocomplete="off"><label class="btn btn-outline-danger" for="danger-outlined4">No</label></div></li>
        
        <li class="list-group-item"><div class="row row-cols-2"><div class="col">Foreign</div><div class="col">
          <input type="radio" class="btn-check" name="options-outlined5" id="success-outlined5" autocomplete="off"><label class="btn btn-outline-success" for="success-outlined5">Yes</label>
          <input type="radio" class="btn-check" name="options-outlined5" id="btn-check-2-outlined5" autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined5">Indifferent</label>
          <input type="radio" class="btn-check" name="options-outlined5" id="danger-outlined5" autocomplete="off"><label class="btn btn-outline-danger" for="danger-outlined5">No</label></div></li>
        
        <li class="list-group-item"><div class="row row-cols-2"><div class="col">Documentary</div><div class="col">
          <input type="radio" class="btn-check" name="options-outlined6" id="success-outlined6" autocomplete="off"><label class="btn btn-outline-success" for="success-outlined6">Yes</label>
          <input type="radio" class="btn-check" name="options-outlined6" id="btn-check-2-outlined6" autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined6">Indifferent</label>
          <input type="radio" class="btn-check" name="options-outlined6" id="danger-outlined6" autocomplete="off"><label class="btn btn-outline-danger" for="danger-outlined6">No</label></div></li>
        
        <li class="list-group-item"><div class="row row-cols-2"><div class="col">Horror</div><div class="col">
          <input type="radio" class="btn-check" name="options-outlined7" id="success-outlined7" autocomplete="off"><label class="btn btn-outline-success" for="success-outlined7">Yes</label>
          <input type="radio" class="btn-check" name="options-outlined7" id="btn-check-2-outlined7" autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined7">Indifferent</label>
          <input type="radio" class="btn-check" name="options-outlined7" id="danger-outlined7" autocomplete="off"><label class="btn btn-outline-danger" for="danger-outlined7">No</label></div></li>
                  
        <li class="list-group-item"><div class="row row-cols-2"><div class="col">Thriller</div><div class="col">
          <input type="radio" class="btn-check" name="options-outlined8" id="success-outlined8" autocomplete="off"><label class="btn btn-outline-success" for="success-outlined8">Yes</label>
          <input type="radio" class="btn-check" name="options-outlined8" id="btn-check-2-outlined8" autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined8">Indifferent</label>
          <input type="radio" class="btn-check" name="options-outlined8" id="danger-outlined8" autocomplete="off"><label class="btn btn-outline-danger" for="danger-outlined8">No</label></div></li>
                  
        <li class="list-group-item"><div class="row row-cols-2"><div class="col">Science Fiction</div><div class="col">
          <input type="radio" class="btn-check" name="options-outlined9" id="success-outlined9" autocomplete="off"><label class="btn btn-outline-success" for="success-outlined9">Yes</label>
          <input type="radio" class="btn-check" name="options-outlined9" id="btn-check-2-outlined9" autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined9">Indifferent</label>
          <input type="radio" class="btn-check" name="options-outlined9" id="danger-outlined9" autocomplete="off"><label class="btn btn-outline-danger" for="danger-outlined9">No</label></div></li>

      </ul>
    </div>
      <!-- *******************
        End of Favorite Genre Code -->
    <br>
    <button type="button" class="btn btn-warning btn-lg col-12">Save Settings</button>

  

    </main>
  
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <?php include ('footer.php'); ?>

