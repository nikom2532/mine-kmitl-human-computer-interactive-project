<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>form_delete_process</title>
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


$strSQL = "SELECT * FROM itpr_process"; // change table name here
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
				<center><a href='./form_delete_process.php'>Delete</a></center>
			</td>
			<td width='25%'>
				<center><a href='./form_import_process.php'>Import</a></center>
			</td>
			<td width='25%'>
				<center><a href='./export_excel_process.php'>Export</a></center>
			</td>
		</tr>
		<tr><td><br><br></td></tr>
	</table>


<table border="1">
<tr>
<th><div align="center">process number</div></th>
<th><div align="center">date</div></th>
<th><div align="center">name</div></th>
<th><div align="center">department</div></th>
<th><div align="center">owner</div></th>
<th><div align="center">cobit</div></th>
<th><div align="center">risk it category</div></th>
<th><div align="center">status</div></th>
<th><div align="center">approved by</div></th>
<th><div align="center">contact person</div></th>
<th><div align="center">process document</div></th>
<th><div align="center">delete</div></th>
</tr>

<? while($objResult = mysql_fetch_array($objQuery)) { ?>

<tr>
<td align="center"><?=$objResult["PROCESS_NUMBER"];?></td>
<td align="center"><?=$objResult["DATE"];?></td>
<td align="center"><?=$objResult["NAME"];?></td>
<td align="center"><?=$objResult["DEPARTMENT"];?></td>
<td align="center"><?=$objResult["OWNER"];?></td>
<td align="center"><?=$objResult["COBIT"];?></td>
<td align="center"><?=$objResult["RISK_IT_CATEGORY"];?></td>
<td align="center"><?=$objResult["STATUS"];?></td>
<td align="center"><?=$objResult["APPROVED_BY"];?></td>
<td align="center"><?=$objResult["CONTACT_PERSON"];?></td>
<td align="center"><?=$objResult["PROCESS_DOCUMENT"];?></td>
<td align="center"><a href="delete_process.php?PROCESS_NUMBER=<?=$objResult["PROCESS_NUMBER"];?>">Delete</a></td> <? //change method GET here ?>
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
