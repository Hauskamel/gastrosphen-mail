<?php
//get data from form

$gender = $_POST['gender'];
$name = $_POST['name'];
$sirname = $_POST['sirname'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$message= $_POST['message'];

$to = "lukas.krojer@web.de";

$subject = "Anmeldeformular";

$txt = "Gender = ". $gender . "Vorname = ". $name . "Nachname = ". $sirname . "Geburtstag = ". $birthday . "\r\n  Email = " . $email . "\r\n Message =" . $message;

$headers = "From: gastrosophen@no-reply.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

?>