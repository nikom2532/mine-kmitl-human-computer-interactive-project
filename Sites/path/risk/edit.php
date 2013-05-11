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

	$table_name = "itpr_risk";	//change Table Name here
	
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
		<td>DATE_ASSESSED : </td>
		<td><input type="text" name="data1" size="40" value="<?php echo $ordersrow['DATE_ASSESSED']; ?>">
		</td>
	</tr>
	<tr>
		<td>RISK_NUMBER : </td>
		<td><input type="text" name="data2" size="40" value="<?php echo $ordersrow['RISK_NUMBER']; ?>">
		</td>
	</tr>
	<tr>
		<td>DESCRIPTION : </td>
		<td><input type="text" name="data3" size="40" value="<?php echo $ordersrow['DESCRIPTION']; ?>">
		</td>
	</tr>
	<tr>
		<td>DEPARTMENT : </td>
		<td><input type="text" name="data4" size="40" value="<?php echo $ordersrow['DEPARTMENT']; ?>">
		</td>
	</tr>
	<tr>
		<td>APPROVED_BY : </td>
		<td><input type="text" name="data5" size="40" value="<?php echo $ordersrow['APPROVED_BY']; ?>">
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
		<td>IMPACT_INHERITED : </td>
		<td><input type="text" name="data8" size="40" value="<?php echo $ordersrow['IMPACT_INHERITED']; ?>">
		</td>
	</tr>
	<tr>
		<td>FREQUENCY_INHERITED : </td>
		<td><input type="text" name="data9" size="40" value="<?php echo $ordersrow['FREQUENCY_INHERITED']; ?>">
		</td>
	</tr>
	<tr>
		<td>RISK_LEVEL_INHERITED : </td>
		<td><input type="text" name="data10" size="40" value="<?php echo $$ordersrow['RISK_LEVEL_INHERITED']; ?>">
		</td>
	</tr>
	<tr>
		<td>IMPACT_RESIDUAL : </td>
		<td><input type="text" name="data11" size="40" value="<?php echo $ordersrow['IMPACT_RESIDUAL']; ?>">
		</td>
	</tr>
	<tr>
		<td>FREQUENCY_RESIDUAL : </td>
		<td>	<input type="text" name="data12" size="40" value="<?php echo $ordersrow['FREQUENCY_RESIDUAL']; ?>">
		</td>
	</tr>
	<tr>
		<td>RISK_LEVEL_RESIDUAL : </td>
		<td>	<input type="text" name="data13" size="40" value="<?php echo $ordersrow['RISK_LEVEL_RESIDUAL']; ?>">
		</td>
	</tr>
	<tr>
		<td>EXISTING_CONTROL1 : </td>
		<td>	<input type="text" name="data14" size="40" value="<?php echo $ordersrow['EXISTING_CONTROL1']; ?>">
		</td>
	</tr>
	<tr>
		<td>EXISTING_CONTROL2 : </td>
		<td>	<input type="text" name="data15" size="40" value="<?php echo $ordersrow['EXISTING_CONTROL2']; ?>">
		</td>
	</tr>
	<tr>
		<td>EXISTING_CONTROL3 : </td>
		<td>	<input type="text" name="data16" size="40" value="<?php echo $ordersrow['EXISTING_CONTROL3']; ?>">
		</td>
	</tr>
	<tr>
		<td>EXISTING_CONTROL4 : </td>
		<td>	<input type="text" name="data17" size="40" value="<?php echo $ordersrow['EXISTING_CONTROL4']; ?>">
		</td>
	</tr>
<tr>
		<td>Control_Efficiency : </td>
		<td>	<input type="text" name="data18" size="40" value="<?php echo $ordersrow['CONTROL_EFFICIENCY']; ?>">
		</td>
	</tr>
	<tr>
		<td>attachment : </td>
		<td>	<input type="text" name="data19" size="40" value="<?php echo $ordersrow['ATTACHMENT']; ?>">
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
