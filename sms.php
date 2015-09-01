<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("goinvest",$conn);

//$msg = "6788";
$_GET['msg'];
//$number="0246184046";
$_GET['number'];

$details = explode(",",$msg);

$type=$details[0];
$voucher=$details[1];
$voucher=explode('}',$voucher);
$voucher=$voucher[0];


$voucher = "SELECT voucher_serial from voucher WHERE voucher_code = ".$msg.";";
$sql = "INSERT INTO records (idrecords,user_info_phone_no,voucher_voucher_serial,time) VALUES (NULL,'$number','$voucher',CURRENT_TIMESTAMP)";

/*$five=array('11233845658927','45567545658927','4544384568927','98343845658927');/*hoping this making this point we verification of the cards value is done,and if it matches what
we have in our database the necessary communication with the person's bank will be made,or maybe i should create a different php class for that 
echo $five[0];
*/
if(!mysql_query($sql,$conn)){
    $sms_msg  = "hi mehn,we chop your bread!";
    $url = "http://localhost:8080/send/sms/".$number."/".$sms_msg;
    file_get_contents($url);
}else{
    $sms_msg  = "Hi ".$name." your account has been saved successfull";
    $url = "http://localhost:8080/send/sms/".$number."/".$sms_msg;
    file_get_contents($url);
}


?>