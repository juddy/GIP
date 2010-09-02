<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?

include_once(CLASS_TABLE);
include_once(CLASS_HTML_FORM_ELEMENT_BUILDER);

$arguments = array();
$generateWhatForm = requestUtils::getRequestObject('formType');
$arguments['db'] = requestUtils::getRequestObject('db');
$arguments['table'] = requestUtils::getRequestObject('table');
$arguments['headerText'] = "";
$arguments['footerText'] = "";

if ($generateWhatForm=="enter") { $scriptToGo = PAGE_GENERATOR_PHP_GFRAMEWORK_ENTER_FORM; }
else if ($generateWhatForm=="edit") { $scriptToGo = PAGE_GENERATOR_PHP_GFRAMEWORK_ENTER_FORM; }

$thisTable = new table($arguments['table'],$arguments['db']);
$fieldNames = $thisTable->getFieldNameArray();
$thisHtmlFormBBuilder = new htmlFormElementBuilder();
?>
<h2><? echo LANG_SIMPLE_FORM_MAKER_CHOOSE_FIELDS; ?> <? echo $arguments['table']; ?></h2>
<? echo LANG_SIMPLE_FORM_MAKER_CHECK_BOXES; ?> <b><? echo $arguments['table']; ?></b>.<br><br>

<form name="libraryEnterForm" method="POST" action="<? echo $scriptToGo; ?>">
<input type="hidden" name="table" value="<? echo $arguments['table']; ?>">
<input type="hidden" name="db" value="<? echo $arguments['db']; ?>">
<input type="hidden" name="formType" value="<? echo $generateWhatForm; ?>">
<table cellpadding="4" cellspacing="4"> 
<tr>
<td><? echo LANG_SIMPLE_FORM_MAKER_FIELD_NAME; ?></td>
<td><? echo LANG_SIMPLE_FORM_MAKER_FORM_LABEL; ?></td>
<td><? echo LANG_SIMPLE_FORM_MAKER_INCLUDE; ?></td>
<td><? echo LANG_SIMPLE_FORM_MAKER_ELEMENT_TYPE; ?></td>
<td><? echo LANG_SIMPLE_FORM_MAKER_SIZE; ?></td>
</tr>
<?
for ($a=0;$a<count($fieldNames);$a++)
{
?>   
<tr>	
<td align="right">
<font color="blue">
<b>
<? echo $fieldNames[$a]; ?> ->
</b>
</font>
</td>
<td> <input type="textfield" name="label<? echo $fieldNames[$a]; ?>" value="<? echo ucfirst($fieldNames[$a]); ?> :" size="22"></td>

<td>
<input type="checkbox" name="chosenFieldName[]" value="<? echo $fieldNames[$a]; ?>" checked>
</td>
<td>
<select name="inputType<? echo $fieldNames[$a]; ?>">
<? echo $thisHtmlFormBBuilder->printFormElemenTypeList(); ?>
</select>

</td>
<td> <input type="textfield" name="size<? echo $fieldNames[$a]; ?>" value="20" size="3"></td>
</tr>


   	
<?   	
}
?>
</table>
<input type="submit" name="Submit" value="<? echo LANG_SIMPLE_FORM_MAKER_GENERATE_FORM; ?>">
</form>