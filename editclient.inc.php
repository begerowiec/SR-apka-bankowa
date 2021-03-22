<?php
    require_once("header.php");
    if(isset($_POST["Name"]))
    {
        $name=$_POST["Name"];
        $surname=$_POST["Surname"];
        $pesel=$_POST["pesel"];
        $id=$_POST["id"];
        $sql=sql("UPDATE clients SET Name='$name', Surname='$surname', PESEL=$pesel WHERE id=$id");
        echo'
        <div class="container">
            <div class="row" style="padding-top:100px">
                <div class="col">
                    <h2 style="color:green">
                        Pomyślnie edytowano klienta
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