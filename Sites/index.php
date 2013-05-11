<?php
header ("location: ./path/home/index.php");
?>

<?
session_start();
if(($_POST[username]!="")&&($_POST[password]!="")) {
if(empty($self))$self="./comment.php";
$rootpath="";
require_once($rootpath."lib/DB.php");
require_once($rootpath."lib/conn.inc.php");
if (!$db->open()){
die($db->error());
}
$username = htmlspecialchars(trim($_POST[username]),ENT_QUOTES);
$password = htmlspecialchars(trim($_POST[password]),ENT_QUOTES);
$SQL="select USER_LOGIN,USER_ROLE from itpr_user where USER_LOGIN='$username' and USER_PWD='$password' and USER_STATUS='Y' ";

$result=mysql_query($SQL);
if(mysql_num_rows($result)==1) {
$rs=mysql_fetch_array($result);
if($rs[USER_ROLE]=="A"){
$_SESSION[admin]=$username;
}
$_SESSION[su]=$username;
mysql_query("update itpr_user set LAST_LOGIN='".date("Y-m-d H:i:s")."' where USER_LOGIN='$username'");
echo "<meta http-equiv='refresh' content='0; url=$self'>";

} else {
echo "<SCRIPT LANGUAGE='JavaScript'>window.alert('ข้อมูลเข้าระบบไม่ถูกต้อง')</SCRIPT>";
echo "<meta http-equiv='refresh' content='0; url=$self'>";
}


} 
$focus="0";
include("include/index_head.php"); //include("include/index_inside.php");


include("include/index_profile.php"); //include("include/comment.php");

?>

<?php
include("include/index_bottom.php");
mysql_close();
?>
