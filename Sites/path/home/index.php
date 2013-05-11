<?

$rootpath ="../../";
session_start();


if(($_POST[username]!="")&&($_POST[password]!="")) {
	if(empty($self))$self="home.php";
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
		mysql_query("update itpr_user set LAST_LOGIN ='".date("Y-m-d H:i:s")."' where USER_LOGIN='$username'");
		echo "<meta http-equiv='refresh' content='0; url=$self'><br><br>";
	} else {
		echo "<SCRIPT LANGUAGE='JavaScript'>window.alert('ข้อมูลเข้าระบบไม่ถูกต้อง')</SCRIPT>";
		echo "<meta http-equiv='refresh' content='0; url=$self'>";
	}
	mysql_close();
	die;
}

$focus=2;
$focus2=0;
include($rootpath."include/index_head.php");
?>
<font size="3" color="#000000">

<br>

<?php	//check login
	if($_SESSION[su]!="")
	{
?>


<!-- ++++++++++++++++++++++ Menu +++++++++++++++++++++++++++ -->
<table width='800' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='222222'>
<tr height="30">
<td width="50" bgcolor="#effbfd"></td>
<?
$arr_text=array("Audit","Incident","Process","Risk","Report");
$arr_link=array($rootpath."./path/audit/index.php",$rootpath."path/incident/index.php",$rootpath."path/process/index.php",$rootpath."path/risk/index.php",$rootpath."path/report/index.php");

		$i=0;
		while($arr_text[$i]) {
			if(($focus2==$i)&&($focus2!="")) {
			echo "
			<td bgcolor='2bbab5' align='center' class='wlink' width='160'><a href='$arr_link[$i]'><b>$arr_text[$i]</b></a></td>";
			} else {
			echo "
			<td bgcolor='81e874' align='center' class='wlink' width='160'><a href='$arr_link[$i]'><b>$arr_text[$i]</b></a></td>";
			}

			echo "<td width='5'></td>";
		$i++;
		}


?>
<td width="50" bgcolor="#effbfd"></td>
</tr>
</table>
<!-- ++++++++++++++++++++++ end Menu +++++++++++++++++++++++++++ -->

<br>

<br><center>


<!-- Edit homepage here-->
<table style="text-align: center; width: 200;">
  <tr>
    <td>
     <br><br><br>
	<h1>Welcome to ITPR_Workbench</h1>
    </td>
  </tr>
</table>

</center>
</font>

<?
include($rootpath."include/index_bottom.php");
//mysql_close();


}	//end check login
?>



