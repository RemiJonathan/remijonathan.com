<?php
$to = "contact@remijonathan.com";
$subject = "Message from ".$_POST['name'];
$txt = $_POST['textarea'];
$headers = "From: ".$_POST['name']."<" .$_POST['email']. ">";

mail($to,$subject,$txt,$headers);

header("Location: ./");
?>