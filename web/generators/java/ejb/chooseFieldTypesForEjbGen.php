<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?

   include_once(CLASS_TABLE);
   include_once(CLASS_HTML_FORM_ELEMENT_BUILDER);

   $arguments['db'] = $_REQUEST['db'];
   $arguments['table'] = $_REQUEST['table'];

   $thisTable = new table($arguments['table'],$arguments['db']);
   $fieldNames = $thisTable->getFieldNameArray();
?>
Choose FieldsTypes for Java EJB Generation<br>
Please choose the Types for the Fields in Table <b><? echo $arguments['table']; ?></b>.<br><br>

<form name="chooseType" method="POST" action="generateEjbCode.php">
<input type="hidden" name="table" value="<? echo $arguments['table']; ?>">
<input type="hidden" name="db" value="<? echo $arguments['db']; ?>">


Pakage Root : <input type="textfield" name="packageRoot" value="org.yourorganization.app" size="30">
<br><br>

<table cellpadding="4" cellspacing="4"> 
<tr>
<td>Field Name</td>
<td>Field Label</td>
<td>Field Type</td>
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
<input type="hidden" name="fieldNames[]" value="<? echo $fieldNames[$a]; ?>">
</td>
<td> <input type="textfield" name="label<? echo $fieldNames[$a]; ?>" value="<? echo strtolower($fieldNames[$a]); ?>" size="22"></td>


<td>
<select name="fieldType<? echo $fieldNames[$a]; ?>">
<option value="String" selected>String</option>
<option value="Integer">Integer</option>
<option value="double">double</option>
<option value="int">int</option>
<option value="boolean">boolean</option>
<option value="Double">Double</option>
<option value="char">char</option>
</select>

</td>

</tr>


   	
<?   	
   }
?>
</table>
<input type="submit" name="Submit" value="Generate Code">
</form>