<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>csv_audit</title>
</head>
<body>
<?
copy($_FILES["fileCSV"]["tmp_name"],$_FILES["fileCSV"]["name"]); // Copy/Upload CSV
 
$objConnect = mysql_connect("localhost","root","scb1234!") or die("Error Connect to Database"); // Conect to MySQL
$objDB = mysql_select_db("workbench",$objConnect);
 
$objCSV = fopen($_FILES["fileCSV"]["name"], "r"); //open csv file

while (($objArr = fgetcsv($objCSV, 1000, ",")) !== FALSE) {

$strSQL = "INSERT INTO itpr_audit"; // change table name here
$strSQL .="(NO,TITLE,ITEM_NO,ACTION_PLAN,DATE,SUBMIT_DATE,RISK_LEVEL,ACTION,TARGET_DATE,AUDITEE,AUDITOR,AUDIT_BY,LATEST_RESPONSE,POSTPONED1,POSTPONED2,POSTPONED3)";
//$strSQL .=" (DATE,TITLE,AUDITOR,AUDITEE,RISK_LEVEL,ACTION_PLAN,AUDIT_BY,TARGET_DATE,ACTION,LATEST_RESPONSE,POSTPONED1,POSTPONED2,POSTPONED3) ";
$strSQL .="VALUES (";

$strSQL .="'$objArr[0]'";   
$strSQL .=",";
$strSQL .="'$objArr[1]'"; 
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
   
$strSQL .=")";

$objQuery = mysql_query($strSQL);

	if($objQuery==true){
		echo "Import & Upload Done.<br>";
	}
	else{
		echo "<br>fail";
		echo "<br>";
	}
}
fclose($objCSV);
mysql_close($objConnect);
?>
View Page <a href="index.php">Click here</a>.
</body>
</html>
