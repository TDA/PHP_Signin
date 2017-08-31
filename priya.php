<?php
session_start();
if(isset($_SESSION['username'])){
echo 'Welcome priya';
include('stack.html');
}
else{
	echo 'Please login';
}
?>