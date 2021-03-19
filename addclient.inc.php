<?php
    require_once("header.php");
    if(isset($_POST["name"]))
    {
        $name=$_POST["name"];
        $surname=$_POST["surname"];
        $pesel=$_POST["pesel"];
        $accnumber=$_POST["accnumber"];
        $sql=sql("INSERT INTO clients (Name, Surname, PESEL, account_number, balance) VALUES ('$name', '$surname', $pesel, $accnumber, 0)");
        echo'
        <div class="container">
            <div class="row" style="padding-top:100px">
                <div class="col">
                    <h2 style="color:green">
                        Dodano nowego Klienta: 
                    </h2>
                    <h2>
                        '.$name.'
                        '.$surname.'
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6>
                       Za chwilę zostaniesz przeniesiony na terminal bankiera.
                    </h6>
                </div>
            </div>
        </div>
        ';
    }
    
?>
<script>
    setTimeout(function(){location.href="backoffice.php?m=tb"} , 3000);      
</script>