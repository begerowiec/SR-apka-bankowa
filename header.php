<?php
require_once("lib/funkcje.php");
$pol=con();
?>
<head>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/bootstrap.js"></script>
    <title>Aplikacja Bankowa</title>
</head>
<body style="background-color:#E7E7E7">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php" style="'Times New Roman', serif"><img src="img/logo.png" style="width:40px;" class="d-inline-block align-top">SRBankier2000</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item <?php if($_GET["m"]=='tk')echo 'active';?>">
        <a class="nav-link" href="clients.php?m=tk"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Terminal klienta </a>
      </li>
      <li class="nav-item <?php if($_GET["m"]=='tb')echo 'active';?>">
        <a class="nav-link" href="backoffice.php?m=tb"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Terminal bankiera</a>
      </li>
    </ul>
  </div>
</nav>