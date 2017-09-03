<?php
session_start();
if(isset($_SESSION['username'])){
echo 'Welcome archana';
include('stack.php');
}
else{
	echo 'Please login';
}
?>
