<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>

<h1><? echo LANG_FAG_FULLAPP_GENERATOR; ?></h1>
<? echo LANG_FAG_FULLAPP_GENERATOR_DESC; ?>
<br><br>

<?
   $table = $_REQUEST['table'];
   $db = $_REQUEST['db'];
?>




<? 
include_once(INC_SUPERFOOTER);
?>