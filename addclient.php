<?php
    require_once("header.php");
?>
<a href="backoffice.php?m=tb"><button class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button></a>
<div class="container">
    <div class="row" style="padding-top:100px">
        <div class="col">
            <h2>
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Dodawanie nowego klienta
            </h2>
        </div>
    <form id="sub_form" method="post" class="form-horizontal" action="addclient.inc.php">      
    </div>    
      <fieldset>
            <div class="row">
                <div class="col-1" >
                    Imię
                </div>
                <div class="col-3" >
                    <input type="text" name="name" id="name" class="form-control input-lg date"  required data-fv-notempty/>
                </div>
            </div>
            <div class="row">
                <div class="col-1" >
                    Nazwisko
                </div>
                <div class="col-3" >
                    <input type="text" name="surname" id="surname" class="form-control input-lg date"  required data-fv-notempty/>
                </div>
            </div>
            <div class="row">
                <div class="col-1" >
                    PESEL
                </div>
                <div class="col-3" >
                    <input minlength="11" maxlength="11" type="text" pattern="[0-9]*" name="pesel" id="pesel" class="form-control input-lg date"  required data-fv-notempty/>
                </div>
            </div>
            <div class="row">
                <div class="col-1" >
                    Nr konta
                </div>
                <div class="col-3" >
                    <input type="text" name="accnumber" id="accnumber" class="form-control input-lg date" value="<?php generateaccnumber()?>" readonly="readonly" required data-fv-notempty/>
                </div>
            </div>
            <div class="row" style="padding-top:10px">
              <div class="col-4">
                <button style="width:100%" type="submit" class="btn btn-primary">Dodaj</button>
              </div>
            </div>
             
      </fieldset>
    </form>