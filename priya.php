<?php
session_start();
if(isset($_SESSION['username'])){
echo 'Welcome priya';
include('stack.php');
}
else{
	echo 'Please login';
}
?>