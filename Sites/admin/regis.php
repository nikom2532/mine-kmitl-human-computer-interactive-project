<?
$rootpath ="../";
session_start();
require_once($rootpath."lib/func_date.php");
require_once($rootpath."lib/DB.php");
require_once($rootpath."lib/conn.inc.php");
if (!$db->open()){
	die($db->error());
}
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
<!-- ++++++++++++++++++++++ Menu +++++++++++++++++++++++++++ -->
<table width='800' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='222222'>
<tr height="30">
</tr>
</table>
<!-- ++++++++++++++++++++++ end Menu +++++++++++++++++++++++++++ -->
<br>
<br><center>
<!-- Edit homepage here-->
<table style="text-align: center; width: 200;">
  <tr>
    <td>
     <br>
	 <h3>Register Page</h3>
	 
<form action="regis2.php" method="post" name="form">
	 <table border="1">
	 <tr>
	 <td width="250">Username :</td>
	 <td width="150"><input type="text" name="USER_LOGIN"></td>
	 </tr>
	 <tr>
	 <td>Password :</td>
	 <td><input type="password" name="USER_PWD"></td>
	 </tr>
	 <tr>
	 <td>Name :</td>
	 <td><input type="text" name="USER_NAME"></td>
	 </tr>
	 <tr>
	 <td>Status :</td>
	 <td><select name="USER_STATUS">
	 <option value="Y">Enable</option>
	 <option value="N">Disable</option>
	 </select></td>
	 </tr>
	 <tr>
	 <td>Role :</td>
	 <td><select name="USER_ROLE">
	 <option value="U">User</option>
	 <option value="A">Admin</option>
	 </select></td>
	 </tr>
	 <tr>
	 <td>
	 <input type="submit" value="OK">
	 <input type="reset" value="Cancel">
	 </td>
	 </tr>
	 </table>
</form>
	<table>
	<tr>
	<td>
	 User Page click > <a href="<?=$rootpath?>admin/index.php"> Back </a> <
	 </td>
	 </tr>
	 </table>
	 
	 
	
	
    </td>
  </tr>
</table>

</center>
</font>

<?
include($rootpath."include/index_bottom.php");
mysql_close();


}
?>