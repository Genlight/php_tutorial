<!DOCTYPE html>
<html lang="en">
<head>
  <title>Oceans Community Discord Server</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>OceanHonkis Community Server</h1>
  <h2><span style="color: cyan;">Besucher: <?php include 'get_counter.php'; ?></span></h2>
  <a href="#"><span style="color:aqua;">Über uns</span></a>
  <a href="#"><span style="color:red;">Updates</span></a>
  <A href="#"><span style="color:blue;">Team</span></a>
  </div> 
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3><span style="color:rgb(0, 255, 213);">Über uns</span></h3>
      <p>Wir sind ein Community Server auf Discord</p>
    </div>
    <div class="col-sm-4">
      <h3><span style="color:red;">Updates</span></h3>
      <p>3 eigene Bots:</p>
        <p>Ideen Bot, Global Bot und ein Community Bot</p>
    </div>
    <div class="col-sm-4">
      <h3><span style="color: blue;">Team</span></h3>        
      <p>Owner     | OceanHonki</p>
      <p>Co-Owner  | Johannamontana</p>
      <p>Techniker | Niclas03</p>
      <p>Admin     | Kitti</p>
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
    <h1><span style="color: green;">Bewerbung</span></h1>
    <div class="container mt-3">
      <h3><span style="color: red;">Als was möchtest du dich bewerben?</span></h3>
      <p>Du kannst dich als Supporter und als Partner bewerben.</p>
      <span style="color: red;">Ist noch in Testphase!</span>
        
      <form action="save_in_db.php" class="was-validated" method="POST">
        <div class="mb-3 mt-3">
          <label for="uname" class="form-label"><span style="color: black;">Discord Name:</span></label>
          <input type="text" class="form-control" id="uname" placeholder="Dein Discord Name" name="uname" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Bitte fülle dieses Feld aus.</div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label"><span style="color: black;">Email Adresse:</span></label>
          <input type="email" class="form-control" id="email" placeholder="Deine Email Adresse" name="email" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Bitte fülle dieses Feld aus.</div>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
          <label class="form-check-label" for="myCheck">Ich stimme zu.</label>
          <div class="valid-feedback">Angenommen</div>
          <div class="invalid-feedback">Bitte fülle die Felder aus um zustimmen zu können!</div>
        </div>
      <button type="submit" class="btn btn-primary">Abschicken</button>
      </form>
    </div>
</div>
<div id="Links" class="container-fluid bg-success text-white" style="padding:100px 20px;">
  <h1>Links</h1>
  <p>Hier kommen Links zum Server</p>
  <h1><span style="color: red;">Kommt bald!!</span></h1>
</div>
</body>
</html>