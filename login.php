<?php

$type = $_POST['type'];
$username = $_POST['Username'];
$Password = $_POST['Password'];

if ($type == "Customer" && $username == "g5t1" && $Password == "g5t1"){
    header("Location: Customer.html");
}elseif ($type == "DeliveryMan" && $username == "g5t1" && $Password == "g5t1"){
    header("Location: DeliverMan.html");
}else{
    $_SESSION['errors'] = [ 'Username/password is incorrect' ];
    header("Location: loggin-view.html");
}
?>

<!-- currently is hardcoded for the username and password. will require service input. 
and the type means the table query from. idk if it can work liddat.
might need seperate loggin UI for delivery man and customer. shag -->