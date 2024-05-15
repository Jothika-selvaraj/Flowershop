<?php
// include("connection.php");
// if(isset($_POST['but']));
// {
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $num = $_POST["num"]; 
//     $result = mysqli_query($con,"Insert into contact values('$name','$email','$num')");
// }
// if($result){
//     echo"Registration Success";
// }
// else{
// echo"Registration Failed";
// }  

$to = "jeevimadheswaran06@gmail.com";
$subject = "New quotes from spot world";
$message = "A new.\n\n";
$message .=" $email:" . $_POST["name"] ."\n"; 
$message .=" $password:" . $_POST["email"] ."\n";

$headers="From: noreply@gmail.com";
mail($to, $subject, $message, $headers);  
header("Location: index.html");  

?>