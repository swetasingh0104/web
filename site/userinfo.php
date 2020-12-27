<?php

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "connetion SUCCESSFUL";
	# code...
}
else{
	echo "connection failed";
}

mysqli_select_db($con, 'std');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$orders = $_POST['orders'];

$query = " insert into userinfodata1x (user, email, mobile, orders)
values ('$user', '$email', '$mobile', '$orders') ";

echo "$query";

mysqli_query($con, $query);



?>