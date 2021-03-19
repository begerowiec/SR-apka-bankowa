<?php
    require_once("header.php");
    if(isset($_GET["client"]))
    {
        $id=$_GET["client"];
        $tranhis=sql("SELECT user_id, recipient_id, TType, Date, Amount, Balance_user, Balance_recipient FROM tranhistory WHERE user_id=$id OR recipient_id=$id ORDER BY Date DESC");
    }
?>
<a href="clienterminal.php?id=<?php echo $id;?>&m=tk"><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button></a>
<div class="container">
    <div class="row" style="padding-top:100px">
        <div class="col">
            <h2>
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span> Historia transakcji
            </h2>
        </div>
    </div>
    <div style="border:1px solid grey;width:80%; padding-left:10px;padding-right:10px">
        <div class="row">
            <div class="col-3">
                <h5 style="font-weight:bold">
                    Typ operacji
                </h5>
            </div>
            <div class="col">
                <h5 style="font-weight:bold">
                    Data
                </h5>
            </div>
            <div class="col-3">
             <h5 style="font-weight:bold; text-align: right">
                    Kwota
                </h5>
            </div>
            <div class="col-3">
                <h5 style="font-weight:bold; text-align: right">
                    Saldo
                </h5>
            </div>
        </div>  
        <?php
            while($row=mysql_fetch_array($tranhis))
            {  
                $balance=$row{"Balance_user"};
                switch ($row{"TType"}) 
                {
                    case 'D':
                        $ttype='Doładowanie';
                        $sign='+';
                        $color='green';
                        break;
                    case 'W':
                        $ttype='Wypłata';
                        $sign='-';
                        $color='red';
                        break;
                    case 'P':
                        $ttype='Przelew';
                        $sign='-';
                        $color='red';
                        break;
                }
                if($row{"TType"}=='P' && $row{"recipient_id"}==$id)
                {
                    $sign='+';
                    $color='green';
                    $balance=$row{"Balance_recipient"};                    
                }
                
                echo '
                    <hr style="margin-top:-5px;margin-bottom:3px"/>
                    <div class="row">
                        <div class="col-3">
                            <h5 style="color:'.$color.'">
                                '.$ttype.'
                            </h5>
                        </div>
                        <div class="col">
                            <h5>
                                '.$row{"Date"}.'
                            </h5>
                        </div>
                        <div class="col-3">
                            <h5 style="text-align:right;color:'.$color.'">
                                '.$sign.' '.$row{"Amount"}.' PLN
                            </h5>
                        </div>
                        <div class="col-3">
                            <h5 style="text-align:right">
                                '.$balance.' PLN
                            </h5>
                        </div>
                    </div> 
                ';
            }
        ?>
    </div>
    <?php

    ?>