<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Phone number
if (empty($_POST["phone_number"])) {
      $phone_number = "Empty phone number";
} else {
    $phone_number = $_POST["phone_number"];
}

// Subject
if (empty($_POST["subject"])) {
    $subject = "No subject";
} else {
    $subject = $_POST["subject"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "serguz@ukr.net";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Phone number: ";
$Body .= $phone_number;
$Body .= "\n";

$Body .= "Subject: ";
$Body .= $subject;
$Body .= "\n\n";

$Body .= "Message: \n\n";
$Body .= $message;
$Body .= "\n";


// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
