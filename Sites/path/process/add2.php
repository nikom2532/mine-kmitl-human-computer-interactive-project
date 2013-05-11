<?
	$rootpath ="../../";
	session_start();
	require_once($rootpath."lib/func_date.php");
	require_once($rootpath."lib/DB.php");
	require_once($rootpath."lib/conn.inc.php");
	if (!$db->open()){
		die($db->error());
	}
	$focus=2;
	include($rootpath."include/index_head.php");
?>
<?php	//check login
	if($_SESSION[su]!="")
	{
?>
<font size="3" color="#000000">
<center>
	<br>
	<font size = '5' color="#ghghgh">
	<?php
		echo "Add\n\n";
	?>
	<br><br><center><a href="index.php">Back to table</a></center>
	</font>
</center>

<br><center>

<!-- ******************** start main ***************** -->
<?php
	//create variable
	$data1 = $_POST["data1"];
	$data2 = $_POST["data2"];
	$data3 = $_POST["data3"];
	$data4 = $_POST["data4"];
	$data5 = $_POST["data5"];
	$data6 = $_POST["data6"];
	$data7 = $_POST["data7"];
	$data8 = $_POST["data8"];
	$data9 = $_POST["data9"];

	//mysql
	$sql = "INSERT INTO itpr_process (DATE,NAME,DEPARTMENT,OWNER,COBIT,RISK_IT_CATEGORY,STATUS,APPROVED_BY,CONTACT_PERSON,PROCESS_DOCUMENT
) VALUES (CURDATE(), '$data1', '$data2', '$data3', '$data4', '$data5', '$data6', '$data7', '$data8', '$data9')";

//	insert
	mysql_query($sql);
	if(mysql_query==true){
		echo "Insert Okay<br>";

}	else{
		echo "Error";
}

?>
<!-- ******************** end main ***************** -->
<table style="text-align: left; width: 200;">
  <tr>
    <td>
     
    </td>
  </tr>
</table>

</center>
</font>

<?
include($rootpath."include/index_bottom.php");
mysql_close();
}	//end check login
?>
