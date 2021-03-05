<?php
    require_once("header.php");
    if(isset($_GET["client"]))
    {
        $id=$_GET["client"];
    }
?>
<div class="container">
    <div class="row" style="padding-top:100px">
        <div class="col">
            <h2>
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Doładowanie konta
            </h2>
        </div>
    <form id="sub_form" method="post" class="form-horizontal" action="adddepo.php">      
    </div>    
      <fieldset>
            <div class="row">
              <div class="input-group col-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">PLN</span>
                </div>    
                <input step="0.01"  min="0.00" type="number" name="kwota" id="kwota" class="form-control input-lg date" placeholder="Wpisz kwotę" required data-fv-notempty/>
                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"/>
              </div>
            </div>
            <div class="row" style="padding-top:10px">
              <div class="col-3">
                <button type="submit" class="btn btn-success">Doładuj</button>
              </div>
            </div>
             
      </fieldset>
    </form>