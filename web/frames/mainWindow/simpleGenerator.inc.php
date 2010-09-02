<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>

<?
   $table = $_REQUEST['table'];
   $db = $_REQUEST['db'];
?>

<h1><? echo LANG_SG_SIMPLE_GENERATOR; ?></h1>
<? echo LANG_SG_SIMPLE_GENERATOR_DESC; ?>
<br><br>

<ul>
<li>
<b><a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_CHOOSE_WHAT_TO_GENERATE; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">

<? echo LANG_SIMPLE_GENERATE_ALL_CODE_LINK; ?>

</a></b>
</li>
</ul>

<table width=100%>


<tr>
<?



if ($table=="")
{
?>

<br>
<h4><? echo LANG_SIMPLE_NO_TABLE_SELECTED; ?></h4>

<br><br>



<?	
}
else if ($table!="")
{

?>

<td>




<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
		<a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_CHOOSEFIELDS_FOR_ENTER; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>&formType=enter">
		<? echo LANG_SIMPLE_FORM_MAKER; ?>
	          </a>
	</td>
  </tr>
  <tr> 
    <td valign="baseline">
      <ul>
        <li><? echo LANG_SIMPLE_FORM_MAKER_DESC; ?></li>
      </ul>
    </td>
  </tr>
</table>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
		<a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_INSERT_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
		<? echo LANG_SIMPLE_INSERT_BUILDER; ?>
		
		</a>
	</td>
  </tr>
  <tr> 
    <td valign="baseline">
      <ul>
        <li><? echo LANG_SIMPLE_INSERT_BUILDER_DESC; ?>
         </li>
      </ul>
    </td>
  </tr>
</table>


<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
		<a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_LISTER_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
		
		<? echo LANG_SIMPLE_DATABASE_LISTER; ?>
		
		</a>
	</td>
  </tr>
  <tr> 
    <td valign="baseline">
      <ul>
        <li><? echo LANG_SIMPLE_DATABASE_LISTER_DESC; ?></B>
         </li>
      </ul>
    </td>
  </tr>
</table>



<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
		<a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_CRUD_GRID_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
		
		<? echo LANG_SIMPLE_CRUD_GRID; ?>
		
		</a>
	</td>
  </tr>
  <tr> 
    <td valign="baseline">
      <ul>
        <li><? echo LANG_SIMPLE_CRUD_GRID_DESC; ?></B>
         </li>
      </ul>
    </td>
  </tr>
</table>


<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
		<a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_CHOOSEFIELDS_FOR_ENTER; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>&formType=edit">
		
		<? echo LANG_SIMPLE_EDIT_FORM_MAKER; ?>
		
		</a>
	</td>
  </tr>
  <tr> 
    <td valign="baseline">
      <ul>
        <li><? echo LANG_SIMPLE_EDIT_FORM_MAKER_DESC; ?>
         </li>
      </ul>
    </td>
  </tr>
</table>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
		<a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_UPDATE_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
		
		<? echo LANG_SIMPLE_UPDATE_MAKER; ?>
		
		</a>
	</td>
  </tr>
  <tr> 
    <td valign="baseline">
      <ul>
        <li><? echo LANG_SIMPLE_UPDATE_MAKER_DESC; ?>
         </li>
      </ul>
    </td>
  </tr>
</table>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
		<a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_VIEW_ONE_RECORD_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
		
		<? echo LANG_SIMPLE_VIEW_MAKER; ?>
		
		</a>
	</td>
  </tr>
  <tr> 
    <td valign="baseline">
      <ul>
        <li>		<? echo LANG_SIMPLE_VIEW_MAKER_DESC; ?>
         </li>
      </ul>
    </td>
  </tr>
</table>



<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
		<a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_DELETE_CONFIRMATION_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
		
		<? echo LANG_SIMPLE_DELETE_CONFIRMATION_MAKER; ?>
		
		</a>
	</td>
  </tr>
  <tr> 
    <td valign="baseline">
      <ul>
        <li><? echo LANG_SIMPLE_DELETE_CONFIRMATION_MAKER_DESC; ?>
         </li>
      </ul>
    </td>
  </tr>
</table>


<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
		<a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_DELETE_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
		
		<? echo LANG_SIMPLE_DELETE_SCRIPT_MAKER; ?>
		
		</a>
	</td>
  </tr>
  <tr> 
    <td valign="baseline">
      <ul>
        <li><? echo LANG_SIMPLE_DELETE_SCRIPT_MAKER_DESC; ?>
         </li>
      </ul>
    </td>
  </tr>
</table>

<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
		<a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_POWER_SEARCH_FORM; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
		
		<? echo LANG_SIMPLE_SEARCH_FORM_MAKER; ?>
		</a>
	</td>
  </tr>
  <tr> 
    <td valign="baseline">
      <ul>
        <li><<? echo LANG_SIMPLE_SEARCH_FORM_MAKER_DESC; ?>
         </li>
      </ul>
    </td>
  </tr>
</table>


<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
		<a href="<? echo PAGE_GENERATOR_PHP_SIMPLE_POWER_SEARCH_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
		
		<? echo LANG_SIMPLE_SEARCH_SCRIPT_MAKER; ?>
		
		</a>
	</td>
  </tr>
  <tr> 
    <td valign="baseline">
      <ul>
        <li><? echo LANG_SIMPLE_SEARCH_SCRIPT_MAKER_DESC; ?>
         </li>
      </ul>
    </td>
  </tr>
</table>










<br>
</td>

<?
} // end if isset table
	else {
?>		
   <td valign=top><h3><? echo "$langChooseDbTable"; ?></h3></td> 

<?
}

?>

</tr>
</table>

<? 
include_once(INC_SUPERFOOTER);
?>