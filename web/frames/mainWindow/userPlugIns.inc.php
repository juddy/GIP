<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>

<h1><? echo LANG_UP_USER_PLUGINS; ?></h1>
<? echo LANG_UP_USER_PLUGINS_DESC; ?>
<br>
<h4> <a href="<? echo PAGE_SOURCEFORGE_PLUGIN_DEVELOPMENT_URL; ?>?print=y"><? echo LANG_UPLUGINS_LEARN_HOW_TO_WRITE_YOUR_OWN_PGIN; ?></a>
</h4>

<br>
<?
   $table = $_REQUEST['table'];
   $db = $_REQUEST['db'];
   
?>


<!--
<b>
 <a href="<? echo PAGE_PLUGIN_SCAN_FOR_PLUGINS; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>"><? echo LANG_PCG_PLUGIN_SCAN_PLUGINS; ?></a> </b> - <? echo LANG_PCG_PLUGIN_SCAN_PLUGINS_DESC; ?>
!-->
<? include_once(INC_SCAN_PLUGINS); ?>

<? 
include_once(INC_SUPERFOOTER);
?>