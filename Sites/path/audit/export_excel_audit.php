<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Form Import Audit</title>
</head>
<body>
<?
$rootpath ="../../";
session_start();
require_once($rootpath."lib/func_date.php");
$focus=0;
$focus2=0;
include($rootpath."include/index_head.php");
?>
<font size="3" color="#000000">

<br>

<?php	//check login
	if($_SESSION['su']!="")
	{
?>
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

<br><br><h1>Export Audit.csv</h1><br><br>
<h2>Auditor</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" name="exportForm">
<table width="400" border="1">
<tr>
<td><div align="center">Insert CSV File Name :</div></td>
<td><div align="center"><input type="text" name="CSV_fileName"/></div></td>
<td><div align="center"><input name="submitt" type="submit" value="OK"/></div></td>
</tr>
</table>
</form>
<?
if(isset($_POST["submitt"])){
$filename = $_POST["CSV_fileName"]; // csv file name
$filename .= ".csv";
$objwrite = fopen($filename,"w");

$objConnect = mysql_connect("localhost","root","scb1234!") or die("Error Connect to Database"); 
$objDB = mysql_select_db("workbench",$objConnect);

$table_name = "itpr_audit"; // change tablename here
$showQuery = "SELECT * FROM ";
$showQuery .= $table_name;

$objQuery = mysql_query($showQuery);

while($objResult = mysql_fetch_array($objQuery))
	{
		$date = $objResult["DATE"];
		$title = $objResult["TITLE"];
		$auditor = $objResult["AUDITOR"];
		$auditee = $objResult["AUDITEE"];
		$risk = $objResult["RISK_LEVEL"];
		$aplan = $objResult["ACTION_PLAN"];
		$auditby = $objResult["AUDIT_BY"];
		$targetdate = $objResult["TARGET_DATE"];
		$action = $objResult["ACTION"];
		$latest = $objResult["LASTEST_RESPONSE"];
		$post1 = $objResult["POSTPONED1"];
		$post2 = $objResult["POSTPONED2"];
		$post3 = $objResult["POSTPONED3"];
		
		fwrite($objwrite,"\"$date\",\"$title\",\"$auditor\",\"$auditee\",\"$risk\",\"$aplan\",\"$auditby\",\"$targetdate\",\"$action\",\"$latest\",\"$post1\",\"$post2\",\"$post3\",\n");
	}
	
fclose($objwrite);
echo "<br>Generate CSV Done.<br><a href=$filename>Download</a> Here.";
mysql_close($objConnect);}
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
}
?>

</body>
</html>
