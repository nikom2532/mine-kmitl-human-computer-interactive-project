<?

$rootpath ="../../";
session_start();
require_once($rootpath."lib/func_date.php");
require_once($rootpath."lib/DB.php");
require_once($rootpath."lib/conn.inc.php");
if (!$db->open()){
	die($db->error());
}
$focus=2;
$focus2=0;
include($rootpath."include/index_head.php");
?>
<font size="3" color="#000000">

<br>




<!-- ++++++++++++++++++++++ Menu +++++++++++++++++++++++++++ -->
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
		}$rootpath."./path/audit/index.php"


?>
<td width="50" bgcolor="#effbfd"></td>
</tr>
</table>
<!-- ++++++++++++++++++++++ end Menu +++++++++++++++++++++++++++ -->

<br>

	<table width='700' border='0' align='center' cellpadding='0' cellspacing='0'>
		<tr>
			<td width='25%'>
				<center><a href='./add.php'>Add</a></center>
			</td>
			<td width='25%'>
				<center><a href='./form_delete_process.php'>Delete</a></center>
			</td>
			<td width='25%'>
				<center><a href='./form_import_process.php'>Import</a></center>
			</td>
			<td width='25%'>
				<center><a href='./export_excel_process.php'>Export</a></center>
			</td>
		</tr>
		<tr><td><br><br></td></tr>
	</table>
<?
$objConnect = mysql_connect("localhost","root","scb1234!") or die("Error Connect to Database"); 
$objDB = mysql_select_db("workbench",$objConnect);

$table_name = "itpr_process"; // change tablename here
$showQuery = "SELECT * FROM ";
$showQuery .= $table_name;

$objQuery = mysql_query($showQuery);
?>

<table width="10" border="1">
<tr>
<th><div align="center">Process number</div></th>
<th><div align="center">Date</div></th>
<th><div align="center">Name</div></th>
<th><div align="center">Department</div></th>
<th><div align="center">Owner</div></th>
<th><div align="center">Cobit</div></th>
<th><div align="center">Risk it category</div></th>
<th><div align="center">Status</div></th>
<th><div align="center">Approved by</div></th>
<th><div align="center">Contact person</div></th>
<th><div align="center">Process document</div></th>
</tr>

<?
while($objResult = mysql_fetch_array($objQuery))
{
?>

<tr>
<td><a href='edit.php?pkey= <?php echo $objResult["pkey"]; ?>'><?=$objResult["PROCESS_NUMBER"];?></a></td>
<td><a href='edit.php?pkey= <?php echo $objResult["pkey"]; ?>'><?=$objResult["DATE"];?></a></td>
<td><a href='edit.php?pkey= <?php echo $objResult["pkey"]; ?>'><?=$objResult["NAME"];?></a></td>
<td><a href='edit.php?pkey= <?php echo $objResult["pkey"]; ?>'><?=$objResult["DEPARTMENT"];?></a></td>
<td><a href='edit.php?pkey= <?php echo $objResult["pkey"]; ?>'><?=$objResult["OWNER"];?></a></td>
<td><a href='edit.php?pkey= <?php echo $objResult["pkey"]; ?>'><?=$objResult["COBIT"];?></a></td>
<td><a href='edit.php?pkey= <?php echo $objResult["pkey"]; ?>'><?=$objResult["RISK_IT_CATEGORY"];?></a></td>
<td><a href='edit.php?pkey= <?php echo $objResult["pkey"]; ?>'><?=$objResult["STATUS"];?></a></td>
<td><a href='edit.php?pkey= <?php echo $objResult["pkey"]; ?>'><?=$objResult["APPROVED_BY"];?></a></td>
<td><a href='edit.php?pkey= <?php echo $objResult["pkey"]; ?>'><?=$objResult["CONTACT_PERSON"];?></a></td>
<td><a href='edit.php?pkey= <?php echo $objResult["pkey"]; ?>'><?=$objResult["PROCESS_DOCUMENT"];?></a></td>
</tr>
<? } ?>
</table>
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
mysql_close();
?>
