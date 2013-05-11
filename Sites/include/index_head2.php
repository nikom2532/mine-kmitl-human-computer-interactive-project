<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=windows-874'>
<title>index_header2</title>
<style type='text/css'>
</style>
<link href='<?=$rootpath?>css/style.css' rel='stylesheet' type='text/css'>
</head>
<body bgcolor="#effbfd" background="<?=$rootpath?>images/background.jpg" bgproperties="fixed">
<table width='900' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td width="900"><img src="<?=$rootpath?>images/logo.jpg"></td>
      </tr>
</table>

<table width='900' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='222222'>
<tr height="30">
<td width="50" bgcolor="#effbfd"></td>
<?
$arr_text=array("Home","Admin","Contact");
$arr_link=array($rootpath."path/home/",$rootpath."admin/",$rootpath."contact.php");

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
<td width="50" bgcolor="#effbfd"></td>
</tr>
</table>
<!-- menu here -->

<table width='900' border='0' align='center' cellpadding='0' cellspacing='0'>
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

	echo "<br><br><br><br><table width='400' border='0' align='center' cellpadding='0' cellspacing='0'  bgcolor='9dbcf4' class='fline'>
					<form name='login' action='".$rootpath."index.php' method='post'><input type='hidden' name='self' value='$GLOBALS[PHP_SELF]'>
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

?>

