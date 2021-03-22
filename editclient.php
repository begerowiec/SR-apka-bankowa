<?php
    require_once("header.php");
    $sql=sql("SELECT * FROM clients");
    echo'
    <a href="index.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button></a>';
    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
        $sql=sql("SELECT * FROM clients WHERE id=$id");
        $row=mysql_fetch_array($sql);
        echo '
            <div class="container">
                <div class="row" style="padding-top:100px">
                    <div class="col">
                        <h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Edycja danych: </h3>
                        <h1 style="font-weight:600">'.$row["Name"].' '.$row["Surname"].'</h1>                        
                    </div>
                </div>
                <form id="sub_form" method="post" class="form-horizontal" action="editclient.inc.php">  
                    <fieldset>
                            <div class="row"">
                                <div class="col-3">
                                    <input type="text" name="Name" id="Name" class="form-control input-lg date" placeholder="Imię" required data-fv-notempty/>
                                </div>
                            </div>
                            <div class="row" style="padding-top:10px">
                                <div class="col-3">
                                    <input type="text" name="Surname" id="Surname" class="form-control input-lg date" placeholder="Nazwisko" required data-fv-notempty/>
                                </div>
                            </div>
                            <div class="row" style="padding-top:10px">
                                <div class="col-3">
                                    <input minlength="11" maxlength="11" type="text" pattern="[0-9]*" name="pesel" id="pesel" class="form-control input-lg date"  placeholder="PESEL" required data-fv-notempty/>
                                </div>
                            </div>
                            <div class="row" style="padding-top:10px">
                            <div class="col-3">
                                <input type="hidden" name="id" id="id" value="'.$id.'"/>
                                <button type="submit" class="btn btn-warning">Edytuj</button>
                            </div>
                            </div>                            
                    </fieldset>
                </form>
            </div>       
        
        ';
    }