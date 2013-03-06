<?


include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");

    $languageName = $_REQUEST['languageName'];
    $fileToSaveTo = $_REQUEST['fileToSaveTo'];
    $translatorName = $_REQUEST['translatorName'];
    $translatorEmail = $_REQUEST['translatorEmail'];    
    $countryName = $_REQUEST['countryName'];    



$requestKeys = array_keys($_REQUEST);

$newLanguageFile = "";
$newLanguageFile .= "<?\n";

$indent = "\t\t";

$newLanguageFile .= $indent."// LANGUAGE FILE FOR PhpCodeGenie \n";
$newLanguageFile .= $indent."// Language : ".$languageName."\n";
$newLanguageFile .= $indent."// Language File Generation Date : ".date("Y-m-d")."\n";
$newLanguageFile .= $indent."// Translated By : ".$translatorName."\n"; 
$newLanguageFile .= $indent."// Email Address : ".$translatorEmail."\n"; 
$newLanguageFile .= $indent."// Country  : ".$countryName."\n\n\n"; 

for ($a=0;$a<count($requestKeys); $a++)
{
   
	$key = $requestKeys[$a];
	if (substr($key,0,4)=="LANG")
	{
	     	
  	   $newLanguageFile .= $indent."define(\"".$key."\",\"".$_REQUEST[$key]."\");\n";
		
	}
}

$newLanguageFile .= "\n?>";
$encodedLanguageFile = base64_encode($newLanguageFile);

?>
<h2>Building New Language File for <font color=red><? echo $languageName; ?></font></h2>

<form name="saveLanguageFile" action="saveLanguageFileForUser.php" method="POST">
<input type="hidden" name="encodedLanguageFile" value="<? echo $encodedLanguageFile; ?>">
<input type="hidden" name="languageName" value="<? echo $languageName ?>">
<input type="submit" name="submit" value="Save this File on my PC">
</form>

<font color=blue><b>Be sure to click on the Save File above and save this File to your PC. You can save it in the <font color=red>../app/language/</font> folder of your gip Installation and then you can change the language file in your //var/www/gip/app/settings/gipConfiguration.inc.php to this new language FileName.</b></font>
<br><br>

<?
echo "<pre>";
highlight_string($newLanguageFile);
echo "</pre>";
?>