<!DOCTYPE html>
<html lang="en">
<head>
  <title>Oceans Community Discord Server</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>OceanHonkis Community Server</h1>
  <h2>Besucher: <?php include 'php/get_counter.php' ?></h2>
  <a href="#">Über uns</a>
  <a href="#">Updates</a>
  <A href="#">Team</a>
  </div> 
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Über uns</h3>
      <p>Wir sind ein Community Server auf Discord</p>
    </div>
    <div class="col-sm-4">
      <h3>Updates</h3>
      <p>3 eigene Bots:</p>
        <p>Ideen Bot, Global Bot und ein Community Bot</p>
    </div>
    <div class="col-sm-4">
      <h3>Team</h3>        
      <p>Owner     | OceanHonki</p>
      <p>Co-Owner  | Johannamontana</p>
      <p>Admin     | Niclas03</p>
      <p>Admin     | Kitti</p>
      <p>T-Techniker | FINN²</p>
      <p>P-Sup     | Marian5478</p>
    </div>
  </div>
</div>
<body>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  body {
      position: relative; 
  }
  </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#Globalchat">Globalchat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Team Bewerbung">Team Bewerbung</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Links">Links</a>
      </li>
    </ul>
  </div>
</nav>

<div id="Globalchat" class="container-fluid bg-success text-white" style="padding:100px 20px;">
  <h1>Globalchat</h1>
  <p>Der Globalchat ist mit mehreren Servern verbunden und somit können mehrere Leute miteinander über verschiedene Server schreiben!</p>
</div>

<div id="Teambewerbung" class="container-fluid bg-warning" style="padding:100px 20px;">
  <h1>Team Bewerbung</h1>
  <div id="Team Bewerbung" class="container-fluid bg-secondary text-white" style="padding:100px 20px;">
    <h1>Bewerbung</h1>
    <div class="container mt-3">

      <span style="color: red;">Ist noch in Testphase!</span>

      <h3><span style="color: black;">Hier kannst du auswählen, ob du dich als Supporter, Techniker und als Partner bewerben möchtest.</span></h3>
      <select class="form-select">
  <option>Techniker</option>
  <option>Probe Supporter</option>
  <option>Partner</option>
</select>   
      <form action="php/senden.php" class="was-validated" method="POST">
        <div class="mb-3 mt-3">
          <label for="uname" class="form-label"><span style="color: black;">Discord Name:</label>
          <input type="text" class="form-control" id="uname" placeholder="Dein Discord Name" name="uname" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Bitte fülle dieses Feld aus.</div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label"><span style="color: black;">Email Adresse:</label>
          <input type="email" class="form-control" id="email" placeholder="Deine Email Adresse" name="email" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Bitte fülle dieses Feld aus.</div>
        </div>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <div class="container mt-3">
  <h2><span style="color: black;">Warum sollen wir dich nehmen?</span></h2>
  <form action="/action_page.php">
    <div class="form-floating mb-3 mt-3">
      <textarea class="form-control" id="comment" name="comment" placeholder="Comment goes here"></textarea>
      <span style="color: black;"><label for="text">Text</label></span>
    </div>

    <button class="btn btn-primary" type="submit">
    Anmeldung
  </button>
  </form>
</div>
          <div class="valid-feedback">Angenommen</div>
          <div class="invalid-feedback">Bitte fülle die Felder aus um zustimmen zu können!</div>
          <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h1><span style="color: red;"class="offcanvas-title">Anmeldung</span></h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
       <span style="color: black;">Du wurdest erfolgreich angemeldet. Warte bitte, bis sich ein Teammitglied bei dir meldet!</span>
  </div> -->
</div>

<!-- <div class="container-fluid mt-3">
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    Anmeldung
  </button>
</div> -->
</div>
<div id="Links" class="container-fluid bg-success text-white" style="padding:100px 20px;">
  <h1>Links</h1>
  <p>Hier kommen Links zum Server</p>
  <h1><span style="color: red;">Kommt bald!!</h1>
</div>
</body>
</html> 