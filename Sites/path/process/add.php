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
		echo "Add";
	?>
	</font>
</center>
<!-- ******************** add Form ***************** -->
<form action = "add2.php" method="POST">
<table><tr>
	<td>Name : </td><td><input type="text" name="data1" size="40"></td>
	</tr><tr>
	<td>Department : </td><td><input type="text" name="data2" size="40"></td>
	</tr><tr>
	<td>Owner : </td><td><input type="text" name="data3" size="40"></td>
	</tr><tr>
	<td>Cobit : </td><td><input type="text" name="data4" size="40"></td>
	</tr><tr>
	<td>Risk IT Category : </td><td><input type="text" name="data5" size="40"></td>
	</tr><tr>
	<td>Status : </td><td><input type="text" name="data6" size="40"></td>
	</tr><tr>
	<td>Approved by : </td><td><input type="text" name="data7" size="40"></td>
	</tr><tr>
	<td>Contact Person : </td><td><input type="text" name="data8" size="40"></td>
	</tr><tr>
	<td>Process Document : </td><td><input type="text" name="data9" size="40"></td>
	</tr><tr>
	<td><?php echo"\t\t\t\t"; ?><input type="submit" name="submit" value="Submit"></td>
	</tr>
</table>
</form>
<!-- ******************** end add Form ***************** -->
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
