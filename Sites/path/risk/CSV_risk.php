<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CSV_risk</title>
</head>
<body>
<?
copy($_FILES["fileCSV"]["tmp_name"],$_FILES["fileCSV"]["name"]); // Copy/Upload CSV

$objConnect = mysql_connect("localhost","root","scb1234!") or die("Error Connect to Database"); // Conect to MySQL
$objDB = mysql_select_db("workbench",$objConnect);
 
$objCSV = fopen($_FILES["fileCSV"]["name"], "r"); //open csv file

while (($objArr = fgetcsv($objCSV, 1000, ",")) !== FALSE) {

$strSQL = "INSERT INTO itpr_risk"; // change table name here
$strSQL .="(DATE_ASSESSED
,RISK_NUMBER
,DESCRIPTION
,DEPARTMENT
,APPROVED_BY
,CAUSE
,RISK_IT_CATEGORY
,IMPACT_INHERITED
,FREQUENCY_INHERITED
,RISK_LEVEL_INHERITED
,IMPACT_RESIDUAL
,FREQUENCY_RESIDUAL
,RISK_LEVEL_RESIDUAL
,EXISTING_CONTROL1
,EXISTING_CONTROL2
,EXISTING_CONTROL3
,EXISTING_CONTROL4
,CONTROL_EFFICIENCY
,ATTACHMENT)";

$strSQL .="VALUES (";

$strSQL .="'$objArr[0]'";   
$strSQL .=",";
$strSQL .="$objArr[1]"; 
$strSQL .=",";
$strSQL .="'$objArr[2]'";   
$strSQL .=",";
$strSQL .="'$objArr[3]'";   
$strSQL .=",";
$strSQL .="'$objArr[4]'";   
$strSQL .=",";
$strSQL .="'$objArr[5]'";   
$strSQL .=",";
$strSQL .="'$objArr[6]'";   
$strSQL .=",";
$strSQL .="'$objArr[7]'";   
$strSQL .=",";
$strSQL .="'$objArr[8]'";   
$strSQL .=",";
$strSQL .="'$objArr[9]'";   
$strSQL .=",";
$strSQL .="'$objArr[10]'";
$strSQL .=",";
$strSQL .="'$objArr[11]'";   
$strSQL .=",";
$strSQL .="'$objArr[12]'";   
$strSQL .=",";
$strSQL .="'$objArr[13]'";   
$strSQL .=",";
$strSQL .="'$objArr[14]'";   
$strSQL .=",";
$strSQL .="'$objArr[15]'";   
$strSQL .=",";
$strSQL .="'$objArr[16]'";   
$strSQL .=",";
$strSQL .="$objArr[17]"; 
$strSQL .=",";
$strSQL .="'$objArr[18]'";  
   
$strSQL .=")";
$objQuery = mysql_query($strSQL);
	if($objQuery==true){
		echo "Import & Upload Done.<br>";
	}
	else{
	echo $strSQL;
		echo "fail";
		echo "<br>";
	}
}
fclose($objCSV);
mysql_close($objConnect);
?>
View Page <a href="index.php">Click here</a>.

</body>
</html>
