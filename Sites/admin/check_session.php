<?
session_start();
if(($_SESSION[admin]==$_SESSION[su])&&($_SESSION[admin]!="")) {
  //nothing
} else {
  echo "<SCRIPT LANGUAGE='JavaScript'>window.alert('You don\'t have a permission to use an administrator.')</SCRIPT>";
	echo "<meta http-equiv='refresh' content='0; URL=../index.php'>";
	die;	 
}


?>