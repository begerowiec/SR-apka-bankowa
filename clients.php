<?php
    require_once("header.php");
    $sql=sql("SELECT * FROM clients");
    echo '
        <a href="index.php"><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button></a>
        <div class="container">
            <div class="row" style="padding-top:100px">
                <div class="col">
                    <h2>
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Lista klientów 
                    </h2>
                </div>
            </div>        
    ';
    while($row=mysql_fetch_array($sql))
        {
            echo '
                <div class="row" style="padding-top:10px"> 
                    <div class="col">
                        <a href="clienterminal.php?id='.$row{"id"}.'&m=tk"><button class="btn btn-outline-primary">'.$row{"Name"}.' '.$row{"Surname"}.'</button></a>
                    </div>
                </div>
            ';
        }


?>
</div>