<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>form delete audit</title>


<!-- Delete function -->
<script type="text/javascript">
function show_confirm()
{
var r=confirm("Are you sure to delete <?php  ?>");
if (r==true)
  {
	window.location = 'delete_audit.php?pkey=<?=$objResult["pkey"];?>';
  }
else
  {

  }
}
</script>
<!-- end Delete function -->

</head>
<body>
<?
$objConnect = mysql_connect("localhost","root","scb1234!") or die("Error Connect to Database"); 
$objDB = mysql_select_db("workbench",$objConnect);

// Ming...
$rootpath ="../../";
session_start();
require_once($rootpath."lib/func_date.php");
require_once($rootpath."lib/DB.php");
require_once($rootpath."lib/conn.inc.php");
$focus=2;
$focus2=0;
include($rootpath."include/index_head.php");

// end Ming...

$strSQL = "SELECT * FROM itpr_audit"; // change table name here
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>

<font size="3" color="#000000">

<br>


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

<table border="1">
<tr>
<th><div align="center">Date</div></th>
<th><div align="center">Title</div></th>
<th><div align="center">Auditor</div></th>
<th><div align="center">Auditee</div></th>
<th><div align="center">Risk level</div></th>
<th><div align="center">Action plan</div></th>
<th><div align="center">Audit by</div></th>
<th><div align="center">Target date</div></th>
<th><div align="center">Action</div></th>
<th><div align="center">Latest response</div></th>
<th><div align="center">Postponed1</div></th>
<th><div align="center">Postponed2</div></th>
<th><div align="center">Postponed3</div></th>
<th><div align="center">delete</div></th>
</tr>

<? while($objResult = mysql_fetch_array($objQuery)) { ?>

<tr>
<td align="center"><?=$objResult["DATE"];?></td> 
<td align="center"><?=$objResult["TITLE"];?></td>
<td align="center"><?=$objResult["AUDITOR"];?></td>
<td align="center"><?=$objResult["AUDITEE"];?></td>
<td align="center"><?=$objResult["RISK_LEVEL"];?></td>
<td align="center"><?=$objResult["ACTION_PLAN"];?></td>
<td align="center"><?=$objResult["AUDIT_BY"];?></td>
<td align="center"><?=$objResult["TARGET_DATE"];?></td>
<td align="center"><?=$objResult["ACTION"];?></td>
<td align="center"><?=$objResult["LASTEST_RESPONSE"];?></td>
<td align="center"><?=$objResult["POSTPONED1"];?></td>
<td align="center"><?=$objResult["POSTPONED2"];?></td>
<td align="center"><?=$objResult["POSTPONED3"];?></td>
<td align="center">
<a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete_audit.php?pkey=<?=$objResult["pkey"];?>';}">Delete</a></td> <? //change method GET here ?>
</tr>

<?php }	//end while ?>

</table>

</font>

<? mysql_close($objConnect); ?>
<font color="#000000">
<br>Back to HomePage <a href="./index.php">Click Here</a>.
</font>

<?
include($rootpath."include/index_bottom.php");
mysql_close();
?>

</body>
</html>
