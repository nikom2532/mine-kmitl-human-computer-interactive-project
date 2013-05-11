<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>delete_risk</title>
</head>
<body>
<?
$objConnect = mysql_connect("localhost","root","scb1234!") or die("Error Connect to Database");
$objDB = mysql_select_db("workbench");

$strSQL = "DELETE FROM itpr_risk "; // change table name here
$strSQL .="WHERE RISK_NUMBER = '".$_GET["RISK_NUMBER"]."' "; // insert primary key here
$objQuery = mysql_query($strSQL);
if($objQuery==true){
	echo "Record Deleted.";
	}
else{
	echo "Error Delete [".$strSQL."]";
	}
	
mysql_close($objConnect);
?>
<br>Back to Table <a href="form_delete_risk.php">Click Here</a>.
</body>
</html>
