<?php
    require_once("header.php");
    $sql=sql("SELECT * FROM clients");
    echo '
        <a href="index.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button></a>
        <div class="container">
            <div class="row" style="padding-top:100px">
                <div class="col">
                    <h2>
                        <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Terminal bankiera
                    </h2>
                </div>
            </div>      
            <div class="row">
                <div class="col">
                    <a href="addclient.php?&m=tb"><button class="btn btn-outline-success">Dodaj klienta</button></a>
                </div>
            </div>   
            <div class="row" style="padding-top:50px">
                <div class="col">
                    <h4>
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>  Edycja klientów 
                    </h4>
                </div>
            </div>     
    ';
    while($row=mysql_fetch_array($sql))
    {
        echo '
            <div class="row" style="padding-top:10px"> 
                <div class="col">
                    <button onClick="decision('.$row{"id"}.',';echo "'".$row{'Name'}."'"; echo',';echo "'".$row{'Surname'}."'"; echo')" class="btn btn-outline-warning">'.$row{"Name"}.' '.$row{"Surname"}.'</button>
                </div>
            </div>
        ';
    }


?>
</div>
<script>
    function decision(id,name,surname)
    {
        var answer = window.confirm("Czy na pewno edytować klienta "+name+" "+surname+"?");
        if (answer) {
            window.location.href = "editclient.php?id="+id+"&m=tb";
        }
    }
</script>