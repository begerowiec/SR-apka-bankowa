<?php
    require_once("header.php");
    if(isset($_GET["client"]))
    {
        $id=$_GET["client"];
        $sql=sql("SELECT * FROM clients WHERE id!=$id");  
    }
?>
<div class="container">
    <div class="row" style="padding-top:100px">
        <div class="col">
            <h2>
                <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span> Przelew pieniędzy
            </h2>
        </div>     
    </div>    
    <form id="sub_form" method="post" class="form-horizontal" action="transfer.inc.php"> 
        <fieldset>
            <div class="row">
                <div class="col-4" >
                    <input minlength="26" maxlength="26" type="text" pattern="[0-9]*" name="odbiorca" id="odbiorca" class="form-control input-lg date"  placeholder="Numer konta" required data-fv-notempty/>
                </div>
            </div>        
            <div class="row" style="padding-top:10px">
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
                    <button type="submit" class="btn btn-primary">Przelej</button>
                </div>
            </div>                
        </fieldset>
    </form>
</div>