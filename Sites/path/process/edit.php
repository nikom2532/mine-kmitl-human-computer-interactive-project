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
	$pkey = $_REQUEST["pkey"];
	$SQL_audit="SELECT * FROM ";

	$table_name = "itpr_process";	//change Table Name here

	$SQL_audit.=$table_name;
	$SQL_audit.=" where pkey = '$pkey'";

	$ordersresult = mysql_query($SQL_audit);
	while($ordersrow = mysql_fetch_array($ordersresult))
	{	
?>
	<form action = "edit2.php" method="POST">

<table>
	<tr>
		<td>Process Number : </td>
		<td><input type="text" name="data1" size="40" value="<?php echo $ordersrow['PROCESS_NUMBER']; ?>">
		</td>
	</tr>
	<tr>
		<td>date : </td>
		<td><input type="text" name="data2" size="40" value="<?php echo $ordersrow['DATE']; ?>">
		</td>
	</tr>
	<tr>
		<td>name : </td>
		<td><input type="text" name="data3" size="40" value="<?php echo $ordersrow['NAME']; ?>">
		</td>
	</tr>
	<tr>
		<td>department : </td>
		<td><input type="text" name="data4" size="40" value="<?php echo $ordersrow['DEPARTMENT']; ?>">
		</td>
	</tr>
	<tr>
		<td>Owner : </td>
		<td><input type="text" name="data5" size="40" value="<?php echo $ordersrow['OWNER']; ?>">
		</td>
	</tr>
	<tr>
		<td>cobit : </td>
		<td><input type="text" name="data6" size="40" value="<?php echo $ordersrow['COBIT']; ?>">
		</td>
	</tr>
	<tr>
		<td>risk it category : </td>
		<td><input type="text" name="data7" size="40" value="<?php echo $ordersrow['RISK_IT_CATEGORY']; ?>">
		</td>
	</tr>
	<tr>
		<td>status : </td>
		<td><input type="text" name="data8" size="40" value="<?php echo $ordersrow['STATUS']; ?>">
		</td>
	</tr>
	<tr>
		<td>approved by : </td>
		<td><input type="text" name="data9" size="40" value="<?php echo $ordersrow['APPROVED_BY']; ?>">
		</td>
	</tr>
	<tr>
		<td>contact person : </td>
		<td><input type="text" name="data10" size="40" value="<?php echo $$ordersrow['CONTACT_PERSON']; ?>">
		</td>
	</tr>
	<tr>
		<td>process document : </td>
		<td><input type="text" name="data11" size="40" value="<?php echo $ordersrow['PROCESS_DOCUMENT']; ?>">
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
