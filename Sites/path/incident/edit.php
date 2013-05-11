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

	echo $_REQUEST["pkey"];
	$pkey = $_REQUEST["pkey"];
	$table_name = "itpr_incident";	//change Table Name here

	$SQL_audit="SELECT * FROM ";
	$SQL_audit.=$table_name;
	$SQL_audit.=" where pkey = '$pkey'";

	$ordersresult = mysql_query($SQL_audit);
	while($ordersrow = mysql_fetch_array($ordersresult))
	{
?>
	<form action = "edit2.php" method="POST">

<table>
	<tr>
		<td>incident number : </td>
		<td><input type="text" name="data1" size="40" value="<?php echo $ordersrow['INCIDENT_NUMBER']; ?>">
		</td>
	</tr>
	<tr>
		<td>date : </td>
		<td><input type="text" name="data2" size="40" value="<?php echo $ordersrow['DATE']; ?>">
		</td>
	</tr>
	<tr>
		<td>severity : </td>
		<td><input type="text" name="data3" size="40" value="<?php echo $ordersrow['SEVERITY']; ?>">
		</td>
	</tr>
	<tr>
		<td>description : </td>
		<td><input type="text" name="data4" size="40" value="<?php echo $ordersrow['DESCRIPTION']; ?>">
		</td>
	</tr>
	<tr>
		<td>application : </td>
		<td><input type="text" name="data5" size="40" value="<?php echo $ordersrow['APPLICATION']; ?>">
		</td>
	</tr>
	<tr>
		<td>cause : </td>
		<td><input type="text" name="data6" size="40" value="<?php echo $ordersrow['CAUSE']; ?>">
		</td>
	</tr>
	<tr>
		<td>risk it category : </td>
		<td><input type="text" name="data7" size="40" value="<?php echo $ordersrow['RISK_IT_CATEGORY']; ?>">
		</td>
	</tr>
	<tr>
		<td>Temporary solution : </td>
		<td><input type="text" name="data8" size="40" value="<?php echo $ordersrow['TEMPORARY_SOLUTION']; ?>">
		</td>
	</tr>
	<tr>
		<td>permanent solution : </td>
		<td><input type="text" name="data9" size="40" value="<?php echo $ordersrow['PERMANENT_SOLUTION']; ?>">
		</td>
	</tr>
	<tr>
		<td>action by : </td>
		<td><input type="text" name="data10" size="40" value="<?php echo $$ordersrow['ACTION_BY']; ?>">
		</td>
	</tr>
	<tr>
		<td>downtime : </td>
		<td><input type="text" name="data11" size="40" value="<?php echo $ordersrow['DOWNTIME']; ?>">
		</td>
	</tr>
	<tr>
		<td>major customers : </td>
		<td>	<input type="text" name="data12" size="40" value="<?php echo $ordersrow['MAJOR_CUSTOMERS']; ?>">
		</td>
	</tr>
	<tr>
		<td>Loss : </td>
		<td>	<input type="text" name="data13" size="40" value="<?php echo $ordersrow['LOSS']; ?>">
		</td>
	</tr>
	<tr>
		<td>Reputation : </td>
		<td>	<input type="text" name="data14" size="40" value="<?php echo $ordersrow['REPUTATION']; ?>">
		</td>
	</tr>
	<tr>
		<td>attachment : </td>
		<td>	<input type="text" name="data15" size="40" value="<?php echo $ordersrow['ATTACHMENT']; ?>">
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
	}	//end while

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
