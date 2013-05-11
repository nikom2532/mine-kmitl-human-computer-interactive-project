<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=windows-874'>
<title>ITPR WorkBench</title>
<style type='text/css'>
</style>
<link href='<?=$rootpath?>css/style.css' rel='stylesheet' type='text/css'>
</head>

<body bgcolor="#3E0061" bgproperties="fixed">
<table width='900' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td width="900"><a href ='<?=$rootpath?>'>
		<!--<img src="<?=$rootpath?>images/banner_workbench.JPG"></a></td>-->
		<img src="<?=$rootpath?>images/logo.jpg"></a></td>
      </tr>
      <tr > 
         <td height='30' bgcolor="#B811EF"><table width='100%' border='0' cellspacing='0' cellpadding='0'>
      <tr>
<?
if($_SESSION[su]!="") {
	echo "<td class='nortxt' align='center'><b>ยินดีต้อนรับคุณ</b> <img src='".$rootpath."images/arr.gif' width='12' height='8'> $_SESSION[su]  </td><td class='wlink' align='center'> <a href='".$rootpath."member_edit.php'>แก้ไขข้อมูล/เปลี่ยนรหัสผ่าน</a> </td><td class='nortxt' align='center'> <a href='".$rootpath."logout.php'><img src='".$rootpath."images/bu_log2.gif' width='53' height='19' border='0'></a></td>";
} else {
	/*echo "  <form name='login' action='".$rootpath."index.php' method='post'><input type='hidden' name='self' value='$GLOBALS[PHP_SELF]'><td class='nortxt'><div align='right'>ชื่อเข้าสู่ระบบ 
            </div></td>
          <td class='nortxt'><div align='center'> 
              <input type='text' name='username' maxlength='15' size='20'>
            </div></td>
          <td class='nortxt'><div align='center'> 
              <p>รหัสผ่าน</p>
            </div></td>
          <td class='nortxt'><input type='password' name='password' maxlength='15' size='20'></td>
          <td class='nortxt'><input type='submit' value='Login'></td></form>";*/
}
?>
		<td class='nortxt'><span id="tP">&nbsp;</span>
				<script type="text/javascript">
					function tS(){ x=new Date(); x.setTime(x.getTime()); return x; } 
					function lZ(x){ return (x>9)?x:'0'+x; } 
					function tH(x){ if(x==0){ x=12; } return (x>12)?x-=12:x; } 
					function y4(x){ return (x<500)?x+1900:x+543; } 
					function dT(){ window.status=''+eval(oT)+'';  document.getElementById('tP').innerHTML=eval(oT); setTimeout('dT()',1000); } 
					function aP(x){ return (x>11)?'pm':'am'; } var dN=new Array('วันอาทิตย์ที่','วันจันทร์ที่','วันอังคารที่','วันพุธที่','วันพฤหัสที่','วันศุกร์ที่','วันเสาร์ที่'),mN=new Array('มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฏาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'),oT="tS().getDate()+' '+mN[tS().getMonth()]+' '+y4(tS().getYear())+' '+' '+lZ(tS().getHours())+':'+lZ(tS().getMinutes())+':'+lZ(tS().getSeconds())+' น.'";
					if(!document.all){ window.onload=dT; }else{ dT(); }
				</script></td>
        </tr>
      </table>		 
		</td>
      </tr>
    </table></td>
  </tr>
  <tr><td><hr></td></tr>
</table>

<table width='1000' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='222222'>
<tr height="30">
<td width="50" bgcolor="#3E0061"></td>
<td width='5'></td>
<?
$arr_text=array("Home","Admin","Contact");
$arr_link=array($rootpath."index.php",$rootpath."admin/",$rootpath."contact.php");

		$i=0;
		while($arr_text[$i]) {
			if(($focus==$i)&&($focus!="")) {
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
<td width="50" bgcolor="#3E0061"></td>
</tr>
</table>
<!-- menu here -->

<table width='1000' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr> 
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="7"  bgcolor="#dddddd"></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">

              <tr> 
                <td><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td valign="top"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">

                          <tr> 
                            <td><img src="<?=$rootpath?>images/space.gif" width="10" height="10"></td>
                          </tr>
                          <tr> 
                            <td><table width="100%" border="0" cellpadding="5" cellspacing="0" class="fline" bgcolor="#cde8ec">
                                <tr> 
                                  <td valign="top" height="500">



<?
if(($_SESSION[su]=="")&&($focus!="0")) {

	echo "<br><br><br><br><table width='400' border='0' align='center' cellpadding='0' cellspacing='0'  bgcolor='9dbcf4' class='fline'>
					<tr>
						<td colspan='2' align='center' class='nortxt' height='60'><font color='FF0000'>คุณไม่สามารถใช้งานหน้านี้ได้<br>กรุณา Login เข้าสู่ระบบ</font></td>
					</tr><form name='login' action='".$rootpath."index.php' method='post'><input type='hidden' name='self' value='$GLOBALS[PHP_SELF]'>
                    <tr> 
                      <td width='150' align='right' class='nortxt' height='30'>Login : </td><td> <input type='text' name='username'></td>
					</tr>
					<tr>
                      <td width='150' align='right' class='nortxt' height='30'>Password : </td><td> <input type='password' name='password'></td>
					</tr>
					<tr>
						<td colspan='2' align='center' class='nortxt' height='30'><input type='submit' value='Login'></td>
					</tr></form>
					</table>";
include($rootpath."include/index_bottom.php");

}
?>
