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
		echo "Edit\n\n";
	?>
	</font>
</center>
<?php
//*************  query input  ******************

	$pkey = $_REQUEST["pkey"];

	$SQL_audit="SELECT * FROM itpr_audit where pkey = '$pkey'";

	$ordersresult = mysql_query($SQL_audit);
	while($ordersrow = mysql_fetch_array($ordersresult))
	{	//begin while

	//create variable
	
	$data1 = $ordersrow["DATE"];
	$data2 = $ordersrow["TITLE"];
	$data3 = $ordersrow["AUDITOR"];
	$data4 = $ordersrow["AUDITEE"];
	$data5 = $ordersrow["RISK_LEVEL"];
	$data6 = $ordersrow["ACTION_PLAN"];
	$data7 = $ordersrow["AUDIT_BY"];
	$data8 = $ordersrow["TARGET_DATE"];
	$data9 = $ordersrow["ACTION"];
	$data10 = $ordersrow["LATEST_RESPONSE"];
	$data11 = $ordersrow["POSTPONED1"];
	$data12 = $ordersrow["POSTPONED2"];
	$data13 = $ordersrow["POSTPONED3"];
	}	//end while
	echo "<br>".$ordersrow['DATE'];
?>
	<form action = "edit2.php" method="POST">

<table><tr>
		<td>Date : </td>
		<td><input type="text" name="data1" size="40" value="<?php echo $data1; ?>">
		</td>
	</tr>
	<tr>
		<td>Title : </td>
		<td><input type="text" name="data2" size="40" value="<?php echo $data2; ?>">
		</td>
	</tr>
	<tr>
		<td>Auditor : </td>
		<td><input type="text" name="data3" size="40" value="<?php echo $data3; ?>">
		</td>
	</tr>
	<tr>
		<td>Auditee : </td>
		<td><input type="text" name="data4" size="40" value="<?php echo $data4; ?>">
		</td>
	</tr>
	<tr>
		<td>Risk level : </td>
		<td><input type="text" name="data5" size="40" value="<?php echo $data5; ?>">
		</td>
	</tr>
	<tr>
		<td>Action plan : </td>
		<td><input type="text" name="data6" size="40" value="<?php echo $data6; ?>">
		</td>
	</tr>
	<tr>
		<td>Audit_by : </td>
		<td><input type="text" name="data7" size="40" value="<?php echo $data7; ?>">
		</td>
	</tr>
	<tr>
		<td>Target date : </td>
		<td><input type="text" name="data8" size="40" value="<?php echo $data8; ?>">
		</td>
	</tr>
	<tr>
		<td>Action : </td>
		<td><input type="text" name="data9" size="40" value="<?php echo $data9; ?>">
		</td>
	</tr>
	<tr>
		<td>Lastest response : </td>
		<td><input type="text" name="data10" size="40" value="<?php echo $data10; ?>">
		</td>
	</tr>
	<tr>
		<td>Postponed1 : </td>
		<td><input type="text" name="data11" size="40" value="<?php echo $data11; ?>">
		</td>
	</tr>
	<tr>
		<td>Postponed2 : </td>
		<td><input type="text" name="data12" size="40" value="<?php echo $data12; ?>">
		</td>
	</tr>
	<tr>
		<td>Postponed3 : </td>
		<td>	<input type="text" name="data13" size="40" value="<?php echo $data13; ?>">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<br>
			<input type="hidden" name="pkey" value="<?php echo $pkey; ?>">
			<input type="submit" name="submit" value="Save">
			<input type="button" name="reset" value="Cancel">
			<input type="reset" name="reset" value="Reset">
		</td>
	</tr>
</table>

	</form>
<!-- ******************** end add Form ***************** -->

<?php
	//************  end quary input  ***************
?>

<br>


<br><center>



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
