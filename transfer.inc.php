<?php
    require_once("header.php");
    if(isset($_POST["kwota"]))
    {
        $kwota=$_POST["kwota"];
        $client=$_POST["id"];
        $odbiorca=$_POST["odbiorca"];
        $sql=sql("SELECT * FROM clients WHERE id=$client");
        $sql2=sql("SELECT * FROM clients WHERE id=$odbiorca");
        $row=mysql_fetch_array($sql);
        $row2=mysql_fetch_array($sql2);
        $newbalance=$row{"balance"}-$kwota;
        $newdepo=$row2{"balance"}+$kwota;
        if($newbalance<0)
        {
            echo'
            <div class="container">
                <div class="row" style="padding-top:100px">
                    <div class="col">
                        <h2 style="color:red">
                            Brak środków na wykonanie tej operacji!
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>
                           Za chwilę zostaniesz przeniesiony na swój terminal.
                        </h6>
                    </div>
                </div>
            </div>
            ';
        }
        else
        {
        echo'
            <div class="container">
                <div class="row" style="padding-top:100px">
                    <div class="col">
                        <h2 style="color:red">
                            Wykonano przelew na kwotę: '.$kwota.' PLN  <br> Odbiorca: '.$row2{"Name"}.' '.$row2{"Surname"}.'
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h6>
                        Za chwilę zostaniesz przeniesiony na swój terminal.
                        </h6>
                    </div>
                </div>
            </div>
        ';
        $sql=sql("UPDATE clients SET balance = $newbalance WHERE id=$client");
        $sql=sql("UPDATE clients SET balance = $newdepo WHERE id=$odbiorca");
        }
        
    }
    
?>
<script>
var num = <?php echo $client ?>; 
setTimeout(function(){location.href="clienterminal.php?id="+num+""} , 5000);  

</script>