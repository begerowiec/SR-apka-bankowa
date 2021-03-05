<?php
    require_once("header.php");
    $sql=sql("SELECT * FROM clients");
    echo'
    <a href="index.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button></a>';