<?php
if(isset($_POST['submit']) and !empty($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $check_in=$_POST['check_in'];
    $check_out=$_POST['check_out'];

    $mail1_subject="Aurevoir Website enquiry, " . $name;
    $mail1_txt="Name :" . $name . "<br>" . "Mobile :" . $phone . "<br>" . "E-Mail :" . $email . "<br>" . "Check In :" . $check_in . "<br>" . "Check Out :" . $check_out . "<br>";


// More headers
$headers .= 'From: <info@aurevoir.co.in>' . "\r\n";

$to = "viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com";
$url = 'http://viralmafia.com/demo/jsonmaileraurevoir.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);


    if($complete){
        header("location:sucess/index.html");
    }
}


if(isset($_POST['send']) and !empty($_POST['send'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $message=$_POST['message'];

    $mail1_subject="Aurevoir Website enquiry, " . $name;
    $mail1_txt="Name :" . $name . "<br>" . "Mobile :" . $phone . "<br>" . "E-Mail :" . $email . "<br>" . "Address :" . $address . "<br>" . "Message :" . $message . "<br>";


// More headers
$headers .= 'From: <info@aurevoir.co.in>' . "\r\n";

$to = "viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com";
$url = 'http://viralmafia.com/demo/jsonmaileraurevoir.php';
$ch = curl_init($url);
$data = array(
    'to' => $to,
    'subject' => $mail1_subject,
    'messagenew' => $mail1_txt,
    'headers' => $headers,
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$complete = curl_exec($ch);
curl_close($ch);


    if($complete){
        header("location:sucess/index.html");
    }
}


?>