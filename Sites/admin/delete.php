<?
$rootpath ="../";
require("check_session.php");
require_once($rootpath."lib/func_date.php");
require_once($rootpath."lib/DB.php");
require_once($rootpath."lib/conn.inc.php");
if (!$db->open()){
	die($db->error());
}
$focus="1";
include($rootpath."include/admin_head.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<?


$SQL1="select USER_LOGIN from itpr_user";
$result1=mysql_query($SQL1);
$allrow=mysql_num_rows($result1);
$perpage=20;
$allpage=ceil($allrow/$perpage);
if($page<1)$page=1;
$limstart=($page-1)*$perpage;

$paging="<select onchange=\"window.open(this.options[this.selectedIndex].value,'_top');this.selectedIndex=0;\" size=1 name='select'>";
for($i=1;$i<=$allpage;$i++) {
$paging.="<option value='index.php?page=$i'"; if($page==$i)$paging.=" selected"; $paging.=">$i</option>";
}
$paging.="</select>";
?>
<br><table align='center' border='1' width='600'><tr>
<td align='center' width='50%'><font color='000ff0'><a href='./regis.php'>Register</a></font></td>
<td align='center' width='50%'><font color='000ff0'>Delete</font></td>
</tr>
</table>
<br>
<table align='center' border='1' bordercolor='8888B2' cellspacing='0' cellpadding='0' width='600'>
<form name='byusername'>
<tr height='20'><td align='center' class='nortxt'><font color='000000'><b>เลือกดูตาม</b> username </font><input type='text' name='username'> <input type='button' value='  go  ' onClick="window.open('pop_user.php?username=' + document.byusername.username.value  , 'viewuser' , 'height=500,width=520,top=20,left=20, resizable=no, toolbar=no , scrollbars=yes , status=no'); return false;"></td></tr></form></table>

<?

$SQL2="select * from itpr_user order by CREATE_DATE desc limit $limstart,$perpage";
$result2=mysql_query($SQL2);
if(mysql_num_rows($result2)==0) {
	echo "<br><br><center>not found</center>";
	die;
}
?>
<br>
<table align='center' border='1' bordercolor='CDE1F5' cellspacing='0' cellpadding='0' width='700'>
<tr height='20'>
	<td align='center' class='nortxt'><font color='000000'><b>ลำดับ</b></font></td>
	<td align='center' class='nortxt'><font color='000000'><b>username</b></font></td>
	<td align='center' class='nortxt'><font color='000000'><b>ชื่อ</b></font></td>
	<td align='center' class='nortxt'><font color='000000'><b>เข้าระบบล่าสุด</b></font></td>
	<td align='center' class='nortxt'><font color='000000'><b>Status</b></font></td>
	<td align='center' class='nortxt'><font color='000000'><b>Role</b></font></td>
	<td align='center' class='nortxt'><font color='000000'><b>Edit</b></font></td>
	<td align='center' class='nortxt'><font color='000000'><b>Delete</b></font></td>
</tr>

<?
$j=(($page-1)*$perpage)+1;
while($rs2=mysql_fetch_array($result2)) {
	if($rs2[USER_STATUS]=="Y") {
		$rs2[USER_STATUS]="<font color='0000FF'>$rs2[USER_STATUS]</font>";
	} else {
		$rs2[USER_STATUS]="<font color='FF0000'>$rs2[USER_STATUS]</font>";
	}

$username = $rs2[USER_LOGIN];

echo "
<tr height='20'>
	<td align='center' class='nortxt'><font color='000000'>$j</font></td>
	<td align='center' class='nortxt'><a href='pop_user.php' onclick=\"window.open('pop_user.php?username=$rs2[USER_LOGIN]' , 'viewuser' , 'height=500,width=520,top=20,left=20, resizable=no, toolbar=no , scrollbars=yes , status=no'); return false;\">$rs2[USER_LOGIN]</a></td>
	<td align='center' class='nortxt'><font color='000000'>$rs2[USER_NAME]</font></td>
	<td align='center' class='nortxt'><font color='000000'>".mydatetime($rs2[LAST_LOGIN])."</font></td>
	<td align='center' class='nortxt'>$rs2[USER_STATUS]</td>
	<td align='center' class='nortxt'><font color='ff0000'>$rs2[USER_ROLE]</font></td>
	<td align='center' class='nortxt'><a href='pop_user.php' onclick=\"window.open('pop_user.php?username=$rs2[USER_LOGIN]' , 'viewuser' , 'height=500,width=520,top=20,left=20, resizable=no, toolbar=no , scrollbars=yes , status=no'); return false;\">ดูรายละเอียด/แก้ไข</a></td>
	<!-- delete mode -->
	<td align='center' class='nortxt'><font color='ff0000'>"; ?>
 
<a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete_admin.php?username=<?=$username;?>';}">Delete</a>

<?

echo "
</font></td>
</tr>";

$j++;


}
echo "</table><table border='0' align='center'><tr><td align='center' class='nortxt'><font color='#000000'>เลือกหน้า : $paging</font></td></tr></table>";


include($rootpath."include/admin_bottom.php");
?>
</font>
