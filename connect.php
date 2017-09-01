<?php
/*define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');
*/
/*$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
INSERT INTO table_name ( field1, field2,...fieldN )
   VALUES
   ( value1, value2,...valueN );
*/
session_start();
include 'sql.php';
if(isset($_POST['submit'])){
	$username=@mysql_real_escape_string($_POST['uname']);
	$password=@mysql_real_escape_string($_POST['pass']);
	
	SignIn($username, $password);
}
function SignIn($username, $password){
	$q = "SELECT * FROM `login_users` WHERE `username` = '$username' AND `password` = '$password'";
	$result = mysql_query($q);
	$id = "SELECT * FROM `login_users` WHERE `username` = '$username' AND `password` = '$password'";
	echo $result;
	echo mysql_num_rows($result);
	if(mysql_num_rows($result)>=1){
		echo "Welcome ";
		echo $username;
		$userid = mysql_query($id);
		$_SESSION['username'] = $username;
		$_SESSION['userid'] = $userid;
		$q2 = "INSERT INTO `user_activity` (`username`, `q1`, `pagevisits`, `interest`) VALUES ('$username', '0', '0', '0') ";
		$result1 = mysql_query($q2);
		echo $result1;
		header("Location: $username.php");
	}
	else{
		echo "Try again!";
	}
}

?>