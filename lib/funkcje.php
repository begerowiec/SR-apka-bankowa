<?php
//Created by Sebastian Gielata in 2017 all rights reserved 

date_default_timezone_set('Europe/Warsaw');

require_once("mysql.php");
function con()
{

            //////////////////////  Konfiguracja bazy ////////////////////////////////////

$username = "root";
$password = "";
$hostname = "localhost"; 
$database = "bankapk"; 



//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die(alert("Problem z połączeniem do serwera bazodanowego - skontaktuj sie z administratorem",'','alert-danger'));
  
 	mysql_query("set names UTF8");

//select a database to work with
$selected = mysql_select_db($database,$dbhandle) 
  or die(alert("Problem z połączeniem do bazy danych - skontaktuj sie z administratorem",'','alert-danger'));
 
return $dbhandle; 
}
//function mailer($emailadres,$subject,$body,$file='',$fromname='Ekaizen system komunikacji',$from= 'ekaizen@kaizenfleet.pl')
//{
//            require_once('class/mailer.class.php');
//            
//            //////////////////////  Konfiguracja poczty ////////////////////////////////////
//            
//            $mail = new PHPMailer();
//      	   $mail->CharSet="UTF-8";
//            
//            $mail->IsSMTP(); 
//            $mail->SMTPAuth = true; 
//            //$mail->SMTPSecure = "ssl"; 
//            $mail->Host = ""; 
//            $mail->Port =0 ; 
//            $mail->Username = ""; 
//            $mail->Password = ""; 
//            
//            $mail->FromName    = $fromname;
//            $mail->From        = $from;
//            $mail->AddAddress($emailadres);
//            $mail->Subject = $subject;
//            $mail->IsHTML(true);
//            $mail->Body = $body;  
//             
//             
//               
//            if(is_array($_FILES)) 
//            {
//               if (count($_FILES)>0)
//               {
//                  $mail->AddAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']); 
//               }            
//            } 
//            if (!empty($file))
//            {
//               $mail->AddAttachment($file,$file); 
//            }
//
//            if(!$mail->Send()) 
//            {
//             $return['status'] = false;
//             $return['komunikat'] = $mail->ErrorInfo;
//            } 
//            else
//            {
//             $return['status'] = true;
//             $return['komunikat'] = '';
//            }
//            return $return;       
//
//} 

function discon($dbhandle)
{
   mysql_close($dbhandle);
}
 
function sql($string)
{
   $result = mysql_query($string) 
  or die(alert("Problem z połączeniem do bazy danych - skontaktuj sie z administratorem",'','alert-danger'));
   return $result;
}
function generateaccnumber()
{
    $control=rand (10, 99 );
    $rand=rand (10, 99 );
    $bank = array(1010, 1020 , 1030, 1050, 1060, 1090,1140, 1240, 1320, 1470, 1870, 1940, 1950, 2490);
    $randbank=$bank[array_rand($bank, 1)];
    $time=time();
    $date=date('Ymd');
    $accnumber=$control.$randbank.$time.$date.$rand;
    echo $accnumber;
    
}
function alert($tyul='SUKCES !!!',$tresc='Dane zostały zapisane.',$typ='alert-success',$animate=1)
{
//alert-success
//alert-info
//alert-warning
//alert-danger
$key = rand(5, 100).rand(5, 100).rand(5, 100);

echo"
 <div class='row'>
   <div class='alert $typ' id='myalert$key'>
    <button type='button' class='close' data-dismiss='alert'>x</button>
    <strong style='padding-left:10px'>$tyul</strong>
    $tresc
</div>
</div>
";

}

?> 