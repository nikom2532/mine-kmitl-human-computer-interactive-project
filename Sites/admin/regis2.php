<?
$rootpath ="../";
session_start();
require_once($rootpath."lib/func_date.php");
require_once($rootpath."lib/DB.php");
require_once($rootpath."lib/conn.inc.php");
if (!$db->open()){
	die($db->error());
}
$focus=0;
$focus2=0;
include($rootpath."include/index_head.php");
?>
<font size="3" color="#000000">

<br>
<?php	//check login
	if($_SESSION['su']!="")
	{
?>
<!-- ++++++++++++++++++++++ Menu +++++++++++++++++++++++++++ -->
<table width='800' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='222222'>
<tr height="30">
</tr>
</table>
<!-- ++++++++++++++++++++++ end Menu +++++++++++++++++++++++++++ -->
<br>
<br><center>
<!-- Edit homepage here-->
<table style="text-align: center; width: 200;">
  <tr>
    <td>
	<?php
		$data1 = $_POST["USER_LOGIN"];
		$data2 = $_POST["USER_PWD"];
		$data3 = $_POST["USER_NAME"];
		$data4 = $_POST["USER_STATUS"];
		$data5 = $_POST["USER_ROLE"];
		
		$sql = "INSERT INTO itpr_user (USER_LOGIN, USER_PWD, USER_NAME, USER_STATUS, USER_ROLE, CREATE_DATE) 
		VALUES ('$data1','$data2','$data3','$data4','$data5',CURDATE())";
		mysql_query($sql);
		if(mysql_query==true){
			echo "Insert OKAY";
		}else{
			echo "<br>";
			echo $sql;
			echo "<br>";
			echo "Error";	
		}
		echo "<br><a href='./index.php'> Back here </a>";
	?>
    </td>
  </tr>
</table>

</center>
</font>

<?
include($rootpath."include/index_bottom.php");
mysql_close();


}
?>