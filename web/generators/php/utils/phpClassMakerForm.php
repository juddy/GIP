<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>

<script language="JavaScript" type="text/JavaScript">
function populateForm(form)
{
     form.variables.value = "id\nfirstName\nlastName\nemailAddress";
     form.className.value = "testClass";
     form.functions.value = "makeNewUser";
}
</script>


<h2><? echo LANG_UTILS_PCM_PHP_CLASS_MAKER; ?></h2>
<? echo LANG_UTILS_PCM_PHP_CLASS_MAKER_DESC; ?>
<br>
<form name="form1" method="post" action="<? echo PAGE_GENERATE_PHP_CLASS; ?>">
  <table width="500" border="0" cellspacing="5" cellpadding="5">
    <tr> 
      <td width="170" height="30" valign="top"> <div align="right"><strong><? echo LANG_UTILS_PCM_CLASS_NAME; ?> :</strong></div></td>
      <td width="330" height="30"><input name="className" type="text" id="className"></td>
    </tr>
    <tr> 
      <td height="30" valign="top"> <div align="right"><strong><? echo LANG_UTILS_PCM_CLASS_VARIABLES; ?>
          :</strong></div></td>
      <td height="30"><textarea name="variables" rows="10" wrap="VIRTUAL" id="variables"></textarea></td>
    </tr>
    <tr> 
      <td height="30" valign="top"> <div align="right"><strong><? echo LANG_UTILS_PCM_CLASS_MEMBER_FUNCTIONS; ?>
          :</strong></div></td>
      <td height="30"><textarea name="functions" rows="10" wrap="VIRTUAL" id="functions"></textarea></td>
    </tr>
    <tr>
      <td height="30" valign="top">&nbsp;</td>
      <td height="30"><a href="#" onClick="populateForm(document.form1)"><? echo LANG_UTILS_PCM_POPULATE_FORM_WITH_INPUT; ?></a></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="Submit" value="<? echo LANG_UTILS_PCM_GENERATE_CLASS_CODE; ?>">
  </p>
  <p>&nbsp;</p>
</form>

<? 
include_once(INC_SUPERFOOTER);
?>