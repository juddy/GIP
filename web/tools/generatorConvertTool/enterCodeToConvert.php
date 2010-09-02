<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CONFIG_FILE);
include_once(INC_SUPERHEADER);
?>


<h1><? echo LANG_UTILITIES_GEN_GENERATOR_TITLE; ?> </h1>
<h2><? echo LANG_UTILITIES_GEN_GENERATOR_SUB_TITLE; ?></h2>
<p><? echo LANG_UTILITIES_GEN_GENERATOR_TEXT1; ?></p>
<p><? echo LANG_UTILITIES_GEN_GENERATOR_TEXT2; ?> </p>

<form name="form1" method="post" action="<? echo TOOLS_GEN_CONVERT_TOOL_CONVERT; ?>">

    <table width="637" border="0" cellspacing="4" cellpadding="4">
        <tr>
            <td valign="top"><div align="right"><b><? echo LANG_UTILITIES_GEN_GENERATOR_CLASS_NAME; ?> :</b></div></td>
            <td><input type="text" name="generatorName" value=""></td>
        </tr>
        <tr>
            <td valign="top"><div align="right"><b><? echo LANG_UTILITIES_GEN_GENERATOR_ENTER_CODE; ?> :</b></div></td>
            <td><textarea name="codeToConvert" cols="50" rows="20" wrap="VIRTUAL"></textarea></td>
        </tr>
        <tr>
            <td valign="top"><div align="right"></div></td>
            <td>
			<!--
			<input type="radio" name="generateKind" value="php" checked>
PHP Output Code
    <input type="radio" name="generateKind" value="javascript">
JavaScript Output Code 
!-->&nbsp;
<input type="hidden" name="generateKind" value="php">
</td>
        </tr>
    </table>
    <p>
        <input type="submit" name="Submit" value="<? echo LANG_UTILITIES_GEN_GENERATOR_GENERATE_PLUGIN; ?>">
</p>
</form>
<p>&nbsp;</p>

<?
include_once(INC_SUPERFOOTER);
?>