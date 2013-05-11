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
	<table width='700' border='0' align='center' cellpadding='0' cellspacing='0'>
		<tr>
			<td width='25%'>
				<center><a href='./add.php'>Add</a></center>
			</td>
			<td width='25%'>
				<center><a href='./form_delete_audit.php'>Delete</a></center>
			</td>
			<td width='25%'>
				<center><a href='./import.php'>Import</a></center>
			</td>
			<td width='25%'>
				<center><a href='./export.php'>Export</a></center>
			</td>
		</tr>
		<tr><td><br><br></td></tr>
	</table>

<?php
	print "
	<table border='1' align='center' bordercolor = '#568756'>
	<tr>
		<th>Date</th>
		<th>Title</th>
		<th>Autitor</th>
		<th>Auditee</th>
		<th>Risk Level</th>
		<th>Action Plan</th>
		<th>Audit By</th>
		<th>Target Date</th>
		<th>Action</th>
		<th>Last Response</th>
		<th>Postponed 1</th>
		<th>Postponed 2</th>
		<th>Postponed 3</th>
	</tr>
	";


	//query
	$SQL_audit="SELECT * FROM itpr_audit ";
	$ordersresult = mysql_query($SQL_audit);
	while($ordersrow = mysql_fetch_array($ordersresult)){
                
		print "<tr>";
		print "<td><center><a href='edit.php?pkey=" . $ordersrow['pkey'] . ";order=".$order."'>" . $ordersrow['DATE'] . "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['TITLE'] .",order=". "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['AUDITOR'] . "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['AUDITEE'] . "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['RISK_LEVEL'] . "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['ACTION_PLAN'] . "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['AUDIT_BY'] . "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['TARGET_DATE'] . "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['ACTION'] . "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['LATEST_RESPONSE'] . "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['POSTPONED1'] . "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['POSTPONED2'] . "</a></center></td>";
		print "<td><center><a href='./edit.php?pkey=" . $ordersrow['pkey'] . "'>" . $ordersrow['POSTPONED3'] . "</a></center></td>";

	}
	print "</table>";



//************************************************************************************************
?>
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



