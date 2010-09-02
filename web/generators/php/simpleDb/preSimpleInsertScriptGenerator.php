<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?

include_once(CLASS_TABLE);
$arguments = array();
$arguments['db'] = requestUtils::getRequestObject('db');
$arguments['table'] = requestUtils::getRequestObject('table');
$arguments['headerText'] = "";
$arguments['footerText'] = "";

$thisTable = new table($arguments['table'],$arguments['db']);
$fieldNames = $thisTable->getFieldNameArray();

?> 
<h2>Please choose what you want in your Insert Code?</h2>
<form name="libraryPreInsertForm" method="POST" action="simpleInsertScriptGenerator.php">
<input type="hidden" name="table" value="<? echo $arguments['table']; ?>">
<input type="hidden" name="db" value="<? echo $arguments['db']; ?>">


<table>
<tr valign=top>
<td><h3>Header : </h3></td>
<td><input type="checkbox" name="header" value="" checked> </td>
</tr>
</table>

<table cellpadding="4" cellspacing="4"> 
<tr>
<td>Field Name</td>
<td>Include</td>
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

<td>
<input type="checkbox" name="chosenFieldName[]" value="<? echo $fieldNames[$a]; ?>" checked>
</td>
</tr>


   	
<?   	
}
?>
</table>


<input type="submit" name="Submit" value="<? echo LANG_SIMPLE_FORM_MAKER_GENERATE_FORM; ?>">
</form>