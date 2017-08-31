<?php
session_start();
if(isset($_SESSION['username'])){
echo 'Welcome archana';
include('stack.html');
}
else{
	echo 'Please login';
}
?>
