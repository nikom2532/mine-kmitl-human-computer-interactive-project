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
	$data16 = $_POST["data16"];
	$data17 = $_POST["data17"];
	$data18 = $_POST["data18"];
	$data19 = $_POST["data19"];

	//mysql
	$sql = "UPDATE itpr_risk SET ";
	$sql .= "DATE_ASSESSED = '$data1'
		,RISK_NUMBER = $data2
		,DESCRIPTION = '$data3'
		,DEPARTMENT = '$data4'
		,APPROVED_BY = '$data5'
		,CAUSE = '$data6'
		,RISK_IT_CATEGORY = '$data7'
		,IMPACT_INHERITED = '$data8'
		,FREQUENCY_INHERITED = '$data9'
		,RISK_LEVEL_INHERITED = '$data10'
		,IMPACT_RESIDUAL = '$data11'
		,FREQUENCY_RESIDUAL = '$data12'
		,RISK_LEVEL_RESIDUAL = '$data13'
		,EXISTING_CONTROL1 = '$data14'
		,EXISTING_CONTROL2 = '$data15'
		,EXISTING_CONTROL3 = '$data16'
		,EXISTING_CONTROL4 = '$data17'
		,CONTROL_EFFICIENCY = $data18
		,ATTACHMENT = '$data19'";
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
