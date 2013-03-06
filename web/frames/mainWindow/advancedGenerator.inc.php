<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
   $table = $_REQUEST['table'];
   $db = $_REQUEST['db'];
?>

<h1><? echo LANG_AG_ADVANCED_GENERATOR; ?></h1>
<? echo LANG_AG_ADVANCED_GENERATOR_DESC; ?> <a href="<? echo PAGE_GITHUB_WHAT_IS_GIP_URL; ?>">(<? echo LANG_AG_ADVANCED_GENERATOR_DIAGRAM; ?>)</a>
<br><br>

<ul>
<li>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_CHOOSE_WHAT_TO_GENERATE; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">

<? echo LANG_ADVANCED_GENERATE_ALL_CODE_LINK; ?>

</a>
</li>
</ul>

<?

if ($table=="")
{
?>


<br><br>
<h4><? echo LANG_ADVANCED_NO_TABLE_SELECTED; ?></h4>
<br><br>

	
<?	
}
else if ($table!="")
{

?>

<td>

<h3><? echo LANG_AGEN_APP_COMPONENT_GENERATOR; ?></h3>
<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
                <a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_GENERATE_INFO_CODE; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_CLASS_MAKER; ?></a>
        </td>
  </tr>
  <tr>
    <td valign="baseline">
      <ul>
        <li><? echo LANG_AGEN_CLASS_MAKER_DESC; ?></li>
      </ul>
    </td>
  </tr>
</table>


<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
                <a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_GENERATE_GENMANAGER_CODE; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_TABLE_GEN_MANAGER_GENERATOR; ?></a>
                ( <a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_GENERATE_MANAGER_CODE; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_TABLE_MANAGER_GENERATOR; ?></a>)
        </td>
  </tr>
  <tr>
    <td valign="baseline">
      <ul>
        <li><? echo LANG_AGEN_TABLE_GEN_MANAGER_GENERATOR_DESC; ?></li>
      </ul>
    </td>
  </tr>
</table>


<table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="baseline" height="30">
                <a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_GENERATE_GENDAO_CODE; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_GEN_DAO_GENERATOR; ?></a>
                (    <a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_GENERATE_DAO_CODE; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_DAO_GENERATOR; ?></a> )
        </td>
  </tr>
  <tr>
    <td valign="baseline">
      <ul>
        <li><? echo LANG_AGEN_GEN_DAO_GENERATOR_DESC; ?></li>
      </ul>
    </td>
  </tr>
</table>


<h3><? echo LANG_AGEN_COMMON_COMPONENT_GENERATOR; ?></h3>
<table>
<tr>
<td>

<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_COMMON_CLASS; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_CLASS_CONSTANTS_GENERATOR; ?></a> - <? echo LANG_AGEN_CLASS_CONSTANTS_GENERATOR_DESC; ?>
<br>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_COMMON_PAGE; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_PAGE_CONSTANTS_GENERATOR; ?></a> - <? echo LANG_AGEN_PAGE_CONSTANTS_GENERATOR_DESC; ?>
<br>

<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_COMMON_DB; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_DB_CONSTANTS_GENERATOR; ?></a> - <? echo LANG_AGEN_DB_CONSTANTS_GENERATOR_DESC; ?>
<br>


</td>
</tr>

</table>

<h3><? echo LANG_AGEN_WEB_COMPONENT_GENERATOR; ?></h3>
<table>
<tr>
<td>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_CHOOSE_FIELDS_FOR_ENTER_FORM; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>&formType=enter">XXX</a>

<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_ENTER_FORM; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_WEB_GEN_ENTER_FORM; ?> - <? echo LANG_AGEN_WEB_GEN_ENTER_FORM_DESC; ?></a>
<br>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_INSERT_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_WEB_GEN_INSERT_SCRIPT; ?> - <? echo LANG_AGEN_WEB_GEN_INSERT_SCRIPT_DESC; ?></a>
<br>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_EDIT_FORM; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_WEB_GEN_EDIT_FORM; ?> - <? echo LANG_AGEN_WEB_GEN_EDIT_FORM_DESC; ?></a>
<br>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_UPDATE_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_WEB_GEN_UPDATE_SCRIPT; ?> - <? echo LANG_AGEN_WEB_GEN_UPDATE_SCRIPT_DESC; ?></a>
<br>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_DELETE_CONFIRMATION_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_WEB_GEN_DELETE_CONFIRMATION_SCRIPT; ?> - <? echo LANG_AGEN_WEB_GEN_DELETE_CONFIRMATION_SCRIPT_DESC; ?></a>
<br>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_DELETE_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_WEB_GEN_DELETE_SCRIPT; ?> - <? echo LANG_AGEN_WEB_GEN_DELETE_SCRIPT_DESC; ?></a>
<br>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_VIEW_ONE_RECORD; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_WEB_GEN_VIEW_SCRIPT; ?> - <? echo LANG_AGEN_WEB_GEN_VIEW_SCRIPT_DESC; ?></a>
<br>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_LIST_ALL_RECORDS; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_WEB_GEN_LIST_ALL_SCRIPT; ?> - <? echo LANG_AGEN_WEB_GEN_LIST_ALL_SCRIPT_DESC; ?></a>
<br>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_CRUD_GRID_GENERATOR; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_WEB_GEN_CRUD_GRID_SCRIPT; ?> - <? echo LANG_AGEN_WEB_GEN_CRUD_GRID_SCRIPT_DESC; ?></a>
<br>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_POWER_SEARCH_FORM; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_WEB_GEN_POWER_SEARCH_FORM; ?> - <? echo LANG_AGEN_WEB_GEN_POWER_SEARCH_FORM_DESC; ?></a>
<br>
<a href="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_POWER_SEARCH_SCRIPT_SCRIPT; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_AGEN_WEB_GEN_POWER_SEARCH_SCRIPT; ?> - <? echo LANG_AGEN_WEB_GEN_POWER_SEARCH_SCRIPT_DESC; ?></a>
<br>


</td>
</tr>

</table>

<?
}

?>
</tr>
</table>

<? 
include_once(INC_SUPERFOOTER);
?>
