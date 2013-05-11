<?
$rootpath ="";
session_start();
require_once($rootpath."lib/func_date.php");
require_once($rootpath."lib/DB.php");
require_once($rootpath."lib/conn.inc.php");
if (!$db->open()){
	die($db->error());
}



$focus=4;
include($rootpath."include/index_head.php");
?>
<font size ="2" color="#FF6699">

<table width="250" align="center">
<tr>
<td><img src="<?=$rootpath?>images/Iming.jpg" width="100%" height="37%"></td>
</tr>
<tr>
<td><b></b></td>
</tr>
<tr>
<td><b>S. Nikom (Huang Guang Ming)</b></td>
</tr>
<tr>
<td><b>Tel: 085-506-5953</b></td>
</tr>
<tr>
<td><b>E-mail : nikom2532@hotmail.com</b></td>
</tr>
<tr>
<td><b>twitter : <a href="twitter.com/nikom2532">twitter.com/nikom2532</a></b></td>
</tr>
<tr>
<td><b>facebook : <a href="http://www.facebook.com/nikom2532">www.facebook.com/nikom2532</a></b></td>
</tr>
<tr>
<td><b></b></td>
</tr>
<tr>
<td><img src="<?=$rootpath?>images/admin_profile2.jpg" width="100%" height="45%"></td>
</tr>
<tr>
<td><b></b></td>
</tr>
<tr>
<td><b>S.Panupong</b></td>
</tr>
<tr>
<td><b>Tel: 087-780-3678</b></td>
</tr>
<tr>
<td><b>E-mail : panupongsaetung268@hotmail.com</b></td>
</tr>
<tr>
<td><b>Facebook : <a href="http://www.facebook.com/skimloor">www.facebook.com/skimloor</a></b></td>
</tr>
<tr>
<td><b></b></td>
</tr>
</table>

</font>



<?
include($rootpath."include/index_bottom.php");
mysql_close();
?>