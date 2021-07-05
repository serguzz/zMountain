<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Вкажіть ваше ім'я!";
} else {
    $name = $_POST["name"];
}

// Phone number
if (empty($_POST["phone_number"])) {
      $errorMSG .= "Вкажіть номер телефону!";
} else {
    $phone_number = $_POST["phone_number"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $message .= "No message ... ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "serguz@ukr.net";
$Subject = "New Callback Request";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Phone number: ";
$Body .= $phone_number;
$Body .= "\n";

$Body .= "Message: \n\n";
$Body .= $message;
$Body .= "\n";

// send email
if ($errorMSG == "") {
  $success = mail($EmailTo, $Subject, $Body, "From: admin@travelearth.cu.ma");
  if ($success){
     echo "success";
  } else echo "Something went wrong :(";

}

else {echo $errorMSG;}


?>
