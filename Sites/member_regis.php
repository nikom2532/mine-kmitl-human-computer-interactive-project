<?
$rootpath="";
session_start();
require_once($rootpath."lib/DB.php");
require_once($rootpath."lib/conn.inc.php");

if (!$db->open()){
	die($db->error());
}

if($flag=="ok") {
	$username=trim($_POST[username]);
	$pass1=trim($_POST[pass1]);
	$pass2=trim($_POST[pass2]);


	$msg_warn="";

	if((strlen($username)<4)||(strlen($username)>15)) {
		$msg_warn.="<br>��س���� username 4-15 ����ѡ��";
	} else {
		if(ereg("[^-|_|0-9a-zA-Z]",$username)) {
			$msg_warn= "<br>username ����ö�����ѡ������ a-z , A-Z, 0-9, - , _";
		}
		$SQL1="select username from customer_v3 where username='$username'";
		$result1=mysql_query($SQL1);
		if(mysql_num_rows($result1)>0) {
			$msg_warn.="<br>username : $username �ռ�����������";
		}
	}
	if($pass1!=$pass2) {
		$warning= "<br>password 2 ��ͧ �е�ͧ����͹�ѹ";
	} 
	if((strlen($pass1)<4)||(strlen($pass1)>15)) {
		$warning= "<br>password �е�ͧ�բ�Ҵ 4-15 ����ѡ��";
	} 
	if(ereg("[^-|_|0-9a-zA-Z]",$pass1)) {
		$warning= "<br>password ����ö�����ѡ������ a-z , A-Z, 0-9, - , _";
	}

	if(empty($name)) {
		$msg_warn.="<br>��س��к� ����-���ʡ�� ����";
	}



	if(empty($sex)) {
		$msg_warn.="<br>��س����͡ �� ����";
	}

	if(empty($email)) {
		$msg_warn.="<br>��س��к�������";
	}


	if(empty($address)) {
		$msg_warn.="<br>��س��кط������";
	}




	if($msg_warn=="") {

		$regis_date=date("Y-m-d H:i:s");
		if (getenv(HTTP_X_FORWARDED_FOR)){ 
		$regis_ip=getenv(HTTP_X_FORWARDED_FOR); 
		}else{ 
		$regis_ip=getenv(REMOTE_ADDR); 
		}

		$birthday=$birth_year."-".$birth_month."-".$birth_date;

		$SQL="insert into customer_v3(username, password, name, sex, birthday, email, address, regis_date, regis_ip, enable) values('$username', '$pass1', '$name', '$sex', '$birthday', '$email', '$address', '$regis_date', '$regis_ip', 'y')";
		$result=mysql_query($SQL);
		if(!$result)die(mysql_error());


		$_SESSION[su]=$username;

			echo '<html>
               <head>
               <title>Please wait . .</title>
               </head>
               <body OnLoad="OnLoadEvent();" >
               <form name="ForwardForm" action="index.php" method="POST">
                <input type="hidden" name="type" value="pre">
                <input type="hidden" name="hsql" value="'.$SQL.'">
               </form>
               <SCRIPT LANGUAGE="Javascript" >
                function OnLoadEvent(){
                 document.ForwardForm.submit();
                 }
               </SCRIPT>
               </body>
              </html>';


		mysql_close();
		die;

	}
}

?>

<!-- Html below -->


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<title>My Galaxy</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	color: #FFFFFF;
}
-->
</style>
<link href="<?=$rootpath?>css/style.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#effbfd" background="<?=$rootpath?>images/background.jpg" bgproperties="fixed">
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="900"><img src="<?=$rootpath?>images/logo.jpg"></td>
        </tr>
        <tr > 
          <td bgcolor="aee3ed">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
<!-- menu here -->
  <tr> 
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="7"  bgcolor="aee3ed"></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">

              <tr> 
                <td><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td valign="top">
                      <!-- ******************* insite main ******************** -->
                      
                      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">

                          <tr> 
                            <td><img src="<?=$rootpath?>images/space.gif" width="10" height="10"></td>
                          </tr>
                          <tr> 
                            <td><table width="100%" border="0" cellpadding="5" cellspacing="0" class="fline">
                                <tr> 
                                  <td valign="top"><TABLE cellSpacing=2 cellPadding=0 width="100%" border=0 bgcolor="40c9f6">
                                      <TBODY>
                                        <TR> 
                                          <TD> </TD>
                                        </TR>

                                        <TR> 
                                          <TD class="bkheadnor"><FONT 
        color=#cc0000><U>�����˵�</U></FONT></TD>
                                        </TR>
                                        <TR> 
                                          <TD class=body> <P class="nortxt"> 
                                              ��سҡ�͡������㹪�ͧ���������ͧ���� 
                                              <FONT 
            color=#cc0000>*</FONT> ��ҡѺ�������ú��ǹ����ó� ���ͤ����дǡ�ͧ��Ҫԡ㹡�����ԡ�� 
                                       
                                              <BR>
                                              <BR>
                                            </P></TD>
                                        </TR>
                                        <TR> 
                                          <TD class=body></TD>
                                        </TR>
                                        <TR> 
                                          <TD class=body vAlign=top height=4> </TD>
                                        </TR>
                                        <TR> 
                                          <TD class=body vAlign=top></TD>
                                        </TR>
                                        <TR> 
                                          <TD class=body vAlign=top>


					<table width="580" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr> 
                      <td height="24" bgcolor="b0eef9" class="btxt" align="center"><b>Ẻ�������Ѥ���Ҫԡ</b></td>
                    </tr>
					</table>

<script language="javascript">
	function Validator(myForm)
	{


		if((myForm.username.value.length<4) || (myForm.username.value.length>15))
		{
			alert('��������к��е�ͧ��� 4-15 ����ѡ�ä��');
			myForm.username.focus();
			return(false);
		}
		if((myForm.pass1.value.length<4) || (myForm.pass1.value.length>15))
		{
			alert('���ʼ�ҹ��ͧ�բ�Ҵ 4-15 ����ѡ�ä��');
			myForm.pass1.focus();
			return(false);
		}
		if(myForm.pass1.value!=myForm.pass2.value)
		{
			alert('���ʼ�ҹ 2 ��ͧ���ç�ѹ���');
			myForm.pass1.focus();
			return(false);
		}


		if(myForm.name.value.length<1)
		{
			alert('��سҡ�͡����-���ʡ�Ţͧ��ҹ���¤��');
			myForm.name.focus();
			return(false);
		}


		if((!myForm.sex[0].checked)&&(!myForm.sex[1].checked))
		{
			alert('��س����͡�ȴ��¤��');
			return(false);
		}


			var Accept = "@";
			var Data = myForm.email.value;
			var Valid = false;
			for (i = 0;  i < Data.length;  i++)
			{
					ch = Data.charAt(i);
						if (ch == Accept)
							Valid = true;

			}
			if (!Valid)
			{
					alert("��س������������١��ͧ���¤��");
					myForm.email.focus();
					return (false);
			}
		

		if(myForm.address.value.length<1)
		{
			alert('��سҡ�͡���������¤��');
			myForm.address.focus();
			return(false);
		}



		return (true);
	}
</script>

		<table width="580"  border="0" cellspacing="2" cellpadding="0" align="center">
		   <tr class="nortxt">
		   <td align="center"><font color="FF0000"><?=$msg_warn?></font></td>
		   </tr><form action="" method="post" name="regis" onsubmit="return Validator(this)">
					<input type="hidden" name="flag" value="ok">
		 </table>
<?
include("member_regis_form.php");
?>
</form>
</TD>
                                        </TR>
                                      </TBODY>
                                    </TABLE></td>
                                </tr>
                              </table></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
              <tr> 
                <td> <TABLE width="98%" border=0 align="center" cellPadding=0 cellSpacing=1>
                    <TBODY>
                    </TBODY>
                  </TABLE></td>
              </tr>
              <tr> 
                <td height="10"><img src="<?=$rootpath?>images/space.gif" width="8" height="10"></td>
              </tr>
              <tr> 
                <td> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td background="<?=$rootpath?>images/bo_line.gif"><img src="<?=$rootpath?>images/bo_line.gif" width="53" height="3"></td>
                    </tr>
                    <tr> 
                      <td height="5"><img src="<?=$rootpath?>images/space.gif" width="15" height="5"></td>
                    </tr>

                    <tr> 
                      <td height="40" class="grlink"><div align="center"><span class="grtxt">
                          <br>
                          Copyright &copy; 2009, All rights reserved.</span><br>
                        </div></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
          <td width="7"  bgcolor="aee3ed"></td>
        </tr>
      </table></td>
  </tr>
</table>                                      
</body>
</html>
<?
//include($rootpath."include/index_bottom.php");
?>
