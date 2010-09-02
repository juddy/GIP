<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CONFIG_FILE);
include_once(INC_SUPERHEADER);
?>

<h1><? echo LANG_UTILITIES_HTML_FORM_EXT_TITLE; ?></h1>
<p><? echo LANG_UTILITIES_HTML_FORM_EXT_DESC; ?></p>
<form name="form1" method="post" action="<? echo TOOLS_GEN_EXTRACT_FROM_FORM_EXTRACT; ?>">
  <p><? echo LANG_UTILITIES_HTML_FORM_EXT_EXTRACT_FORM_ELEMENTS; ?></p>
  <p>
    <textarea name="code" cols="50" rows="20" wrap="VIRTUAL"></textarea> 
  </p>
  <table width="100%" border="0" cellspacing="4" cellpadding="4">
      <tr>
          <td width="33%"><b>PHP</b></td>
          <td width="33%"><b>PCG</b></td>
          <td width="33%"><b>Java</b></td>
      </tr>
      <tr>
          <td><input name="language" type="radio" value="php" checked>
            $_REQUEST['formElement']</td>
          <td><input name="language" type="radio" value="pcg">
            commonUtils::getRequestObject('formElement')</td>
          <td><input name="language" type="radio" value="java">
            request.getParameter(formElement)</td>
      </tr>
  </table>
  <p>
      <input type="submit" name="Submit" value="<? echo LANG_UTILITIES_HTML_FORM_EXT_EXTRACT_FORM_ELEMENTS; ?>">
</p>
</form>
<p>&nbsp;</p>
<?
include_once(INC_SUPERFOOTER);
?>