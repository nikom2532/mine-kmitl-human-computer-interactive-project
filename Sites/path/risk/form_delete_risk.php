<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>form delete risk</title>
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


$strSQL = "SELECT * FROM itpr_risk"; // change table name here
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
				<center><a href='./form_delete_risk.php'>Delete</a></center>
			</td>
			<td width='25%'>
				<center><a href='./form_import_risk.php'>Import</a></center>
			</td>
			<td width='25%'>
				<center><a href='./export_excel_risk.php'>Export</a></center>
			</td>
		</tr>
		<tr><td><br><br></td></tr>
	</table>

<table border="1">
<tr>
<th><div align="center">date assessed</div></th>
<th><div align="center">risk number</div></th>
<th><div align="center">description</div></th>
<th><div align="center">department</div></th>
<th><div align="center">approved by</div></th>
<th><div align="center">cause</div></th>
<th><div align="center">risk it category</div></th>
<th><div align="center">impact inherited</div></th>
<th><div align="center">frequency inherited</div></th>
<th><div align="center">risk level inherited</div></th>
<th><div align="center">impact residual</div></th>
<th><div align="center">frequency residual</div></th>
<th><div align="center">risk level residual</div></th>
<th><div align="center">existing control1</div></th>
<th><div align="center">existing control2</div></th>
<th><div align="center">existing control3</div></th>
<th><div align="center">existing control4</div></th>
<th><div align="center">control efficiency</div></th>
<th><div align="center">attachment</div></th>
<th><div align="center">delete</div></th>
</tr>

<? while($objResult = mysql_fetch_array($objQuery)) { ?>

<tr>
<td align="center"><?=$objResult["DATE_ASSESSED"];?></td>
<td align="center"><?=$objResult["RISK_NUMBER"];?></td>
<td align="center"><?=$objResult["DESCRIPTION"];?></td>
<td align="center"><?=$objResult["DEPARTMENT"];?></td>
<td align="center"><?=$objResult["APPROVED_BY"];?></td>
<td align="center"><?=$objResult["CAUSE"];?></td>
<td align="center"><?=$objResult["RISK_IT_CATEGORY"];?></td>
<td align="center"><?=$objResult["IMPACT_INHERITED"];?></td>
<td align="center"><?=$objResult["FREQUENCY_INHERITED"];?></td>
<td align="center"><?=$objResult["RISK_LEVEL_INHERITED"];?></td>
<td align="center"><?=$objResult["IMPACT_RESIDUAL"];?></td>
<td align="center"><?=$objResult["FREQUENCY_RESIDUAL"];?></td>
<td align="center"><?=$objResult["RISK_LEVEL_RESIDUAL"];?></td>
<td align="center"><?=$objResult["EXISTING_CONTROL1"];?></td>
<td align="center"><?=$objResult["EXISTING_CONTROL2"];?></td>
<td align="center"><?=$objResult["EXISTING_CONTROL3"];?></td>
<td align="center"><?=$objResult["EXISTING_CONTROL4"];?></td>
<td align="center"><?=$objResult["CONTROL_EFFICIENCY"];?></td>
<td align="center"><?=$objResult["ATTACHMENT"];?></td>
<td align="center"><a href="delete_risk.php?RISK_NUMBER=<?=$objResult["RISK_NUMBER"];?>">Delete</a></td> <? //change method GET here ?>
</tr>

<? } ?>

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
