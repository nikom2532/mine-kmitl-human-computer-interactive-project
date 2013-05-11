<?
$rootpath ="../";
require("check_session.php");
require_once($rootpath."lib/func_date.php");
require_once($rootpath."lib/DB.php");
require_once($rootpath."lib/conn.inc.php");
if (!$db->open()){
	die($db->error());
}


if(($username!="")&&($submit!="")){
	$SQL2="update itpr_user set USER_STATUS='$USER_STATUS' where USER_LOGIN='$username'";
	mysql_query($SQL2);
  echo "<SCRIPT LANGUAGE='JavaScript'>window.alert('แก้ไขข้อมูล เรียบร้อยแล้ว')</SCRIPT>";
  echo "<script>opener.window.location.reload(); </script>";
  echo "<script>window.close();</script>";
  die;
}

$username = $_GET["username"]."%";

$SQL1="select * from itpr_user where USER_LOGIN like '$username'";
$result1=mysql_query($SQL1);

if(mysql_num_rows($result1)==0) {
	echo "not found";
	die;
}

$rs1=mysql_fetch_array($result1);

echo $rs1[USER_STATUS]."\n".$rs1[username];

?>

<TITLE>รายละเอียดสมาชิก</TITLE>

<meta http-equiv="Content-Type" content="text/html; charset=windows-874">

<center><font size='2'><b>แสดงข้อมูลผู้ใช้งาน</b><br><br></center>
<table align='center' border='1' bordercolor='CDE1F5' cellspacing='0' cellpadding='0' width='400' style='border: 1px solid #CDE1F5; filter:progid:DXImageTransform.Microsoft.Gradient( GradientType=0, StartColorStr=#ECF3FB, EndColorStr=#FFFFFF );'>
<tr height='20'><td align='center' width='150'><font size='2'><b>username</b></font></td><td> <font size='2'><?=$rs1[USER_LOGIN]?></font></td></tr>
<tr height='20'><td align='center' width='150'><font size='2'><b>ชื่อ</b></font></td><td> <font size='2'><?=$rs1[USER_NAME]?></font></td></tr>
<tr height='20'><td align='center' width='150'><font size='2'><b>วันลงทะเบียน</b></font></td><td> <font size='2'><?=mydatetime($rs1[CREATE_DATE])?></font></td></tr>
<tr height='20'><td align='center' width='150'><font size='2'><b>เข้าระบบล่าสุด</b></font></td><td> <font size='2'><?=mydatetime($rs1[LAST_LOGIN])?></font></td></tr>

<form action='pop_user.php' method='get'>
<input type='hidden' name='username' value='<?=$username?>'>
<tr height='20'>
<td align='center' width='150'><font size='2'>
<b>อนุญาตใช้งาน</b>
</font></td>
<td><font size='2'><input type='radio' name='USER_STATUS' value='Y' <?php if($rs1[USER_STATUS]=="Y") echo "checked"; ?>><font color='0000FF'>อนุญาต</font> <input type='radio' name='USER_STATUS' value='N' <?php if($rs1[USER_STATUS]=="N") echo "checked"; ?>><font color='FF0000'>ไม่อนุญาต</font></font> <input type='submit' name='submit' value='เปลี่ยน'></td></tr>
</form>
</table>
<center><br><br><input type='button' value='ปิดหน้าต่างนี้' onclick='javascript:window.close();'></center>

