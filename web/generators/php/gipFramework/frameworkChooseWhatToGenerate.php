<? 
include_once("/GIP/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?

include_once(CLASS_DATABASE_QUERY);
$thisDbQuery = new databaseQuery();

$db = requestUtils::getRequestObject('db');
$table = requestUtils::getRequestObject('table');

$thisDbQuery->useDatabase($db);
$allTables = $thisDbQuery->getTables();


?>
<h2><? echo LANG_GALL_ADV_HEADER; ?></h2>
<? echo LANG_GALL_ADV_DESC; ?>
<h4><? echo LANG_GALL_ADV_CHOOSE_SETTINGS_FOR_AUTO_GEN; ?></h4>
<form name="form1" method="post" action="<? echo PAGE_GENERATOR_PHP_GFRAMEWORK_PROCESS_WHAT_TO_GENERATE; ?>">
    <input type="submit" name="Submit" value="<? echo LANG_GALL_ADV_GENERATE_BUTTON; ?>">
<table width="650" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td width="434" valign="top">
<table width="428" border="0" cellspacing="2" cellpadding="3">
          <tr> 
            <td width="103" valign="top" bgcolor="#000066"><div align="right"><strong><font color="#FFFFFF"><? echo LANG_BASIC_PATH; ?>:</font></strong></div></td>
            <td width="304"><p> 
                <input name="generatePath" type="text" id="generatePath" value="<? echo GENERATED_FRAMEWORK_CODE_PATH; ?>" size="40">
              </p>
              <p><? echo LANG_GALL_ADV_SELECT_PATH; ?></p></td>
          </tr>
          <tr> 
            <td width="103" valign="top" bgcolor="#000066"><div align="right"><strong><font color="#FFFFFF"><? echo LANG_GALL_ADV_CONFIG_FILE; ?> :</font></strong></div></td>
            <td width="304"><p> 
                <input name="configFile" type="text" value="<? echo $db; ?>.conf.php" size="40">
              </p>
              <p><? echo LANG_GALL_ADV_CONFIG_FILE_DESC; ?></p></td>
          </tr>          
          
          <tr> 
            <td valign="top" bgcolor="#000066"><div align="right"><strong><font color="#FFFFFF"><? echo LANG_BASIC_GENERATE; ?>
                :</font></strong></div></td>
            <td><p><? echo LANG_GALL_ADV_CHOOSE_MODULES; ?></p>
              <table width="208" border="0" cellspacing="2" cellpadding="2">
                <tr> 
                  <td width="31"><input name="genDao" type="checkbox" id="genDao" value="y" checked></td>
                  <td width="163">Gen Dao</td>
                </tr>
                <tr> 
                  <td><input name="genManager" type="checkbox" id="genManager" value="y" checked></td>
                  <td>Gen Manager</td>
                </tr>
                <tr> 
                  <td><input name="infoObject" type="checkbox" id="infoObject" value="y" checked></td>
                  <td>Info Object</td>
                </tr>
                <tr> 
                  <td><input name="manager" type="checkbox" id="manager" value="y" checked></td>
                  <td> Manager</td>
                </tr>
                <tr> 
                  <td><input name="dao" type="checkbox" id="dao" value="y" checked></td>
                  <td>Dao Class</td>
                </tr>
                <tr> 
                  <td><input name="constants" type="checkbox" id="constants" value="y" checked></td>
                  <td>Constants</td>
                </tr>
                <tr> 
                  <td><input name="copyCommon" type="checkbox" id="copyCommon" value="y" checked></td>
                  <td>Copy Common Libs</td>
                </tr>
                <tr> 
                  <td><input name="frontEnd" type="checkbox" id="frontEnd" value="y" checked></td>
                  <td>Front End Pages</td>
                </tr>
              </table> </td>
          </tr>

        </table>
      </td>
      <td width="202" valign="top" bgcolor="#99CC99"> 
        <p><? echo LANG_BASIC_DATABASE; ?> : <b><? echo $db; ?></b></p>
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
   
    <input type="submit" name="Submit" value="<? echo LANG_GALL_ADV_GENERATE_BUTTON; ?>">
  </p>
</form>
<?

include_once(INC_SUPERFOOTER);

?>