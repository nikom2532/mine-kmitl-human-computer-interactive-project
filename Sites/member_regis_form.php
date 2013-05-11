<meta http-equiv='Content-Type' content='text/html; charset=windows-874'>

<table width="580"  border="0" cellspacing="2" cellpadding="0" align="center">

   <tr class="nortxt"> 
    <td height="20" bgcolor="85d9e8" align="center"><b>รายละเอียดของสมาชิก</b></td>
   </tr>
   <tr class="nortxt"> 
    <td height="20"> 
                                
			<table width="98%" border="0" cellspacing="3" cellpadding="0">
               <tr class="nortxt"> 
               <td width="30%"><b>ชื่อเข้าใช้ระบบ </b></td>
               <td> 
<? if (ereg("member_edit",$GLOBALS[REQUEST_URI], $array)) {
			echo $_SESSION[su];
} else {
?>
   <input name="username" type="text" class="nortxt" size="20"maxlength="15" value="<?=$username?>"> <font color="FF0000">*</font>
<? } ?>
     </td>
      </tr>
    <tr class="nortxt" bgcolor="85d9e8"> 
     <td><b>รหัสผ่าน </b></td>
      <td>
     <input name="pass1" type="password" class="nortxt" size="20"maxlength="15" value="<?=$pass1?>"> <font color="FF0000">* <?=$msg1?></font>
     </td>
       </tr>
      <tr class="nortxt"> 
    <td><b> ยื่นยันรหัสผ่าน</b></td>
     <td>
     <input name="pass2" type="password" class="nortxt" size="20"maxlength="15" value="<?=$pass2?>"> <font color="FF0000">* <?=$msg2?></font>
     </td>
      </tr>
  </table>
                              
	</div></td>
       </tr>
      <tr class="nortxt"> 
          <td height="20" bgcolor="85d9e8" align="center">
                                <b>รายละเอียดส่วนบุคคล</b>
                              </td>
                          </tr>
                          <tr class="nortxt"> 
                            <td height="20">
                                <table width="98%" border="0" cellspacing="3" cellpadding="0">
                                  <tr class="nortxt" bgcolor="75d1f8"> 
                                    <td width="32%"><b>
                                        ชื่อ - นามสกุล</b></td>
                                    <td width="68%"> 
                                        <input name="name" type="text" class="nortxt" size="30" value="<?=$name?>" maxlength="50"> <font color="FF0000">*</font>
                                      </td>
                                  </tr>
                                  <tr class="nortxt"> 
                                    <td></td>
                                    <td>
                                        &nbsp;
                                      </td>
                                  </tr>
    <tr class="nortxt" bgcolor="6cb3f6"> 
     <td colspan="2" align="center">
    <input type="submit" value=" -- OK -- ">
        </td>
        </tr>
         
                              </table></td>
                          </tr>
                          <tr class="nortxt"> 
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr class="nortxt"> 
                            <td height="20"></td>
                          </tr>
                        </table>
