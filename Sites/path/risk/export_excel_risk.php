<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Export Risk CSV</title>
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

<br><br><h1>Form Export Risk.csv File</h1><br><br>
<h2>Risk</h2>
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

$table_name = "itpr_risk"; // change tablename here
$showQuery = "SELECT * FROM ";
$showQuery .= $table_name;

$objQuery = mysql_query($showQuery);

while($objResult = mysql_fetch_array($objQuery))
	{
		$data1 = $objResult["DATE_ASSESSED"];
		$data2 = $objResult["RISK_NUMBER"];
		$data3 = $objResult["DESCRIPTION"];
		$data4 = $objResult["DEPARTMENT"];
		$data5 = $objResult["APPROVED_BY"];
		$data6 = $objResult["CAUSE"];
		$data7 = $objResult["RISK_IT_CATEGORY"];
		$data8 = $objResult["IMPACT_INHERITED"];
		$data9 = $objResult["FREQUENCY_INHERITED"];
		$data10 = $objResult["RISK_LEVEL_INHERITED"];
		$data11 = $objResult["IMPACT_RESIDUAL"];
		$data12 = $objResult["FREQUENCY_RESIDUAL"];
		$data13 = $objResult["RISK_LEVEL_RESIDUAL"];
		$data14 = $objResult["EXISTING_CONTROL1"];
		$data15 = $objResult["EXISTING_CONTROL2"];
		$data16 = $objResult["EXISTING_CONTROL3"];
		$data17 = $objResult["EXISTING_CONTROL4"];
		$data18 = $objResult["CONTROL_EFFICIENCY"];
		$data19 = $objResult["ATTACHMENT"];
		
		fwrite($objwrite,"\"$data1\",\"$data2\",\"$data3\",\"$data4\",\"$data5\",\"$data6\",\"$data7\",\"$data8\",\"$data9\",\"$data10\",\"$data11\",\"$data12\",\"$data13\",\"$data14\",\"$data15\",\"$data16\",\"$data17\",\"$data18\",\"$data19\",\n");
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
