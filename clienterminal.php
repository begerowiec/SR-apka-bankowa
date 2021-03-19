<?php
    require_once("header.php");
    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
        $sql=sql("SELECT * FROM clients WHERE id=$id");
        $row=mysql_fetch_array($sql);
        echo'
        <a href="clients.php?m=tk"><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button></a>
        <div class="container">
            <div class="row" style="padding-top:100px">
                <div class="col">
                    <h2>
                        Witaj '.$row{"Name"}.' '.$row{"Surname"}.'
                    </h2>
                </div>
            </div>  
            <div class="row" style="padding-top:10px">
                <div class="col-5">
                    <h4>
                        Dane konta <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                    </h4>
                </div>
                <div class="col">
                    <button onClick="window.location.reload();" class="btn btn-outline-dark"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> </button>
                </div>
            </div>  
            <div style="border:1px solid grey;width:50%">
                <div class="row">
                    <div class="col-4">
                        <h5>
                            Imię
                        </h5>
                    </div>
                    <div class="col">
                        <h5>
                            '.$row{"Name"}.'
                        </h5>
                    </div>
                </div>  
                <hr style="margin-top:-5px;margin-bottom:3px"/>
                <div class="row">
                    <div class="col-4">
                        <h5>
                            Nazwisko
                        </h5>
                    </div>
                    <div class="col">
                        <h5>
                            '.$row{"Surname"}.'
                        </h5>
                    </div>
                </div> 
                <hr style="margin-top:-5px;margin-bottom:3px"/>
                <div class="row">
                    <div class="col-4">
                        <h5>
                            PESEL
                        </h5>
                    </div>
                    <div class="col">
                        <h5>
                            '.$row{"PESEL"}.'
                        </h5>
                    </div>
                </div> 
                <hr style="margin-top:-5px;margin-bottom:3px"/>
                <div class="row">
                    <div class="col-4">
                        <h5>
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Nr konta
                        </h5>
                    </div>
                    <div class="col">
                        <h5>
                            '.$row{"account_number"}.'
                        </h5>
                    </div>
                </div> 
                <hr style="margin-top:-5px;margin-bottom:3px"/>
                <div class="row">
                    <div class="col-4">
                        <h5>
                            <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>  Saldo
                        </h5>
                    </div>
                    <div class="col">
                        <h5>
                            '.$row{"balance"}.' PLN
                        </h5>
                    </div>
                </div> 
            </div>
            <div class="row" style="padding-top:10px">
                <div class="col-2">
                    <a href="deposit.php?client='.$id.'&m=tk"><button class="btn btn-outline-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Doładuj konto</button></a>
                </div>
                <div class="col-2">
                    <a href="transfer.php?client='.$id.'&m=tk"><button class="btn btn-outline-primary"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span> Zrób przelew</button></a>
                </div>
                <div class="col-2">
                    <a href="payout.php?client='.$id.'&m=tk"><button class="btn btn-outline-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Wypłać pieniądze</button></a>
                </div>
            </div> 
            <div class="row" style="padding-top:10px">
                <div class="col-6">
                    <a href="tranhistory.php?client='.$id.'&m=tk"><button type="button" class="btn btn-outline-info" style="width:102%"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>  Historia transakcji</button></a>
                </div>
            </div> 
        </div>
        ';
    }   