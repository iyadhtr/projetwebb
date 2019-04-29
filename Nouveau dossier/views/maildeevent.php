<?php
include "mailevent.php";

if(!ISSET($_SESSION['mail']))
{
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['mail'];
    $to = "projetbazart@gmail.com"; //$SESSION['mail']
    $subject = "Event";
    $message = $_POST['mail'].":\n".$_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);


}

else if(ISSET($_SESSION['mail']))
{
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from =$_SESSION['mail'];
    $to = "projetbazart@gmail.com"; 
   $subject = "Event";
    $message = $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);

}



?>