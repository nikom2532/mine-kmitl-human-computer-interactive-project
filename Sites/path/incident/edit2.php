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
	$pkey = $_POST["pkey"];
	$data1 = $_POST["data1"];
	$data2 = $_POST["data2"];
	$data3 = $_POST["data3"];
	$data4 = $_POST["data4"];
	$data5 = $_POST["data5"];
	$data6 = $_POST["data6"];
	$data7 = $_POST["data7"];
	$data8 = $_POST["data8"];;
	$data9 = $_POST["data9"];
	$data10 = $_POST["data10"];
	$data11 = $_POST["data11"];
	$data12 = $_POST["data12"];
	$data13 = $_POST["data13"];
	$data14 = $_POST["data14"];
	$data15 = $_POST["data15"];

	//mysql
	$sql = "UPDATE itpr_incident SET ";
	$sql .= "INCIDENT_NUMBER= $data1
		,DATE= '$data2'
		,SEVERITY= $data3
		,DESCRIPTION= '$data4'
		,APPLICATION= '$data5'
		,CAUSE= '$data6'
		,RISK_IT_CATEGORY= '$data7'
		,TEMPORARY_SOLUTION= '$data8'
		,PERMANENT_SOLUTION= '$data9'
		,ACTION_BY= '$data10'
		,DOWNTIME= '$data11'
		,MAJOR_CUSTOMERS= '$data12'
		,LOSS= '$data13'
		,REPUTATION= '$data14'
		,ATTACHMENT= '$data15'";
	$sql .= " WHERE pkey = $pkey";

//	insert
	mysql_query($sql);
	if(mysql_query($sql)==true){
		echo "insert okay<br>";
		
	}else{
		echo "insert fail<br>";

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
