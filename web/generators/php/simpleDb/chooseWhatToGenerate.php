<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?

  include_once(CLASS_DATABASE_QUERY);
  $thisDbQuery = new databaseQuery();

   $db = requestUtils::getRequestObject('db');
   $table = requestUtils::getRequestObject('table');  
  
   
   if (($db=="") && (DATABASE_SERVER_TO_USE!="oracle"))
   {
?>   	
     <? echo LANG_GALL_SIMPLE_CHOOSE_SCHEMA; ?>       	
<?	
      exit;
   }
   
  	$thisDbQuery->useDatabase($db);
    $allTables = $thisDbQuery->getTables();


?>
<h2><? echo LANG_GALL_SIMPLE_GEN_AND_SAVE_ALL; ?> <? echo $db; ?></h2>

<? echo LANG_GALL_SIMPLE_DESC; ?>

<h4><? echo LANG_GALL_SIMPLE_CHOOSE_SETTINGS_FOR_AUTO_GEN; ?></h4>
<form name="form1" method="post" action="<? echo PAGE_GENERATOR_PHP_SIMPLE_PROCESS_WHAT_TO_GENERATE; ?>">
    <input type="submit" name="Submit" value="<? echo LANG_GALL_SIMPLE_GENERATE_BUTTON; ?>">
    <br>
<table width="850" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td width="650" valign="top">
<table width="428" border="0" cellspacing="2" cellpadding="3">
          <tr> 
            <td width="100" valign="top" bgcolor="#000"><div align="center"><strong><font color="#FFFFFF"><? echo LANG_BASIC_PATH; ?>:</font></strong></div></td>
            <td width="500"><p> 
                <input name="generatePath" type="text" id="generatePath" value="<? echo GENERATED_SIMPLE_CODE_PATH; ?>" size="140">
              </p>
              <p><? echo LANG_GALL_SIMPLE_SELECT_PATH; ?></p></td>
          </tr>
          <tr> 
            <td valign="top" bgcolor="#000"><div align="right"><strong><font color="#FFFFFF"><? echo LANG_BASIC_GENERATE; ?> 
                :</font></strong></div></td>
            <td><p><? echo LANG_GALL_SIMPLE_CHOOSE_MODULES; ?></p>
              <table width="208" border="0" cellspacing="2" cellpadding="2">
                <tr> 
                  <td width="31"><input name="enter" type="checkbox" id="enter" value="y" checked></td>
                  <td width="163">Enter / Insert Code</td>
                </tr>
                <tr> 
                  <td><input name="edit" type="checkbox" id="edit" value="y" checked></td>
                  <td>Edit / Update Code</td>
                </tr>
                <tr> 
                  <td><input name="lister" type="checkbox" id="lister" value="y" checked></td>
                  <td>Lister Script</td>
                </tr>
                <tr> 
                  <td><input name="viewRecord" type="checkbox" id="viewRecord" value="y" checked></td>
                  <td>View One Record </td>
                </tr>
                <tr> 
                  <td><input name="delete" type="checkbox" id="delete" value="y" checked></td>
                  <td>Delete Script</td>
                </tr>
                <tr> 
                  <td><input name="search" type="checkbox" id="search" value="y" checked></td>
                  <td>Search Code</td>
                </tr>
                <tr> 
                  <td><input name="copyCommon" type="checkbox" id="copyCommon" value="y" checked></td>
                  <td>Copy Common</td>
                </tr>                
                
              </table></td>
          </tr>


        </table>
      </td>
      <td width="202" valign="top" bgcolor="#A1B4CD"> 
        <p><b><? echo LANG_BASIC_DATABASE; ?></b></p>
        <p><? echo LANG_BASIC_TABLE; ?></p>
        <table width="164" border="0" cellspacing="2" cellpadding="2">
        <?
           for ($b=0;$b<count($allTables);$b++)
           {
        ?>
          <tr> 
            <td width="24"><input name="tableName[]" type="checkbox" value="<? echo $allTables[$b]; ?>" checked></td>
            <td width="126"><? echo $allTables[$b]; ?></td>
          </tr>
        <?
           }
        ?>
        </table>
        <p>&nbsp;</p></td>
    </tr>
  </table>
  <p> 
  <input type="hidden" name="db" value="<? echo $db; ?>">
  <input type="hidden" name="table" value="<? echo $table; ?>">  
    <input type="submit" name="Submit" value="<? echo LANG_GALL_SIMPLE_GENERATE_BUTTON; ?>">
  </p>
</form>

<?
include_once(INC_SUPERFOOTER);
?>
