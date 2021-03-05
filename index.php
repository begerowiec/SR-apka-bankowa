<?php
require_once("header.php");
?>

<div class="container">
    <div class="row" style="padding-top:100px">
        <div class="col">
            <h2>
                Witaj w aplikacji bankowej!
            </h2>
        </div>
    </div>
    <div class="row" style="padding-top:10px"> 
        <div class="col">
            <a href="clients.php?m=tk"><button class="btn btn-outline-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Terminal klienta</button></a>
            </div>
        </div>
    <div class="row" style="padding-top:10px">
        <div class="col">
            <a href="backoffice.php?m=tb"><button class="btn btn-outline-primary"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Terminal bankiera</button></a>
        </div>
    </div>
</div>