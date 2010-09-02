<?
include_once("../../../app/language/lang_english.inc.php");

$allConstants = get_defined_constants();

$constantKeys = array_keys($allConstants);

?>
<style type="text/css">
<!--
textarea {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #0066FF;
	background-color: #FFFFCC;
}
td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
.miniText {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #CC0000;
}
-->
</style>
<h2>PCG Language Translation Tool</h2>
This tool allows you to translate the language file for phpCodeGenie. It loads the english language file as default and you can translate each of the language tokens in another language and build a new file for it. 
<br><br>
<form action="processLanguage.php" method="post">
  <p>
    <input type="submit" name="Submit" value="Build New Language File">  
    </p>
   
<br><br>
 <table>
 <tr>
   <td align=right> <b>Language Name   : </b></td><td> <input type="text" name="languageName" value="newLanguage">  </td>
 <tr>
 <tr>
 <td align=right> <b>File to Save to : </b></td><td> <input type="text" name="fileToSaveTo" value="lang_newLanguage.inc.php" size="30"> </td>
 </tr>
 <tr>
 <td align=right> <b>Translator Name : </b></td><td> <input type="text" name="translatorName" value="Your Name Here" size="30"> </td>
 </tr> 
 <tr>
 <td align=right> <b>Translator Email : </b></td><td> <input type="text" name="translatorEmail" value="your email"> </td>
 </tr> 
 <tr>
 <td align=right> <b>Country of Origin : </b></td><td> <input type="text" name="countryName" value="your country"> </td>
 </tr>   
 </table>   
    <br>
  <table cellpadding="8" cellspacing="0">
<tr>
<td>No</td>
  <td align=right><div align="center"><strong>Original English Word</strong></div></td>
  <td width="350"><div align="center"><strong>Translated Text </strong></div></td>
  </tr>
<?

$row = 0;
$miniMax = 40;
for ($a=0;$a<count($constantKeys); $a++)
{
   
	$key = $constantKeys[$a];

	if (substr($key,0,4)=="LANG")
	{
		$row = $row + 1;
		
		if (($row%2)==0) { $bgColor = "#FFFFFF"; } else { $bgColor = "#CCCCCC"; }
		
		$wordLength = strlen($allConstants[$key]);
		
		$textAreaRows = ($wordLength / 40) + 1;
		
		
?>	


<tr bgcolor="<? echo $bgColor; ?>">
  <td valign="middle"><? echo $row; ?>  </td>
  <td width=400 align=right valign="top"><? echo $allConstants[$key]; ?> 
  <br>
  <span class="miniText">[<? echo $key; ?>]</span> </td>		
  <td valign="top">
  <? if ($wordLength>$miniMax) { ?>
  
  
  <TEXTAREA name="<? echo $key; ?>" cols="70" rows="<? echo $textAreaRows; ?>" wrap="VIRTUAL" id="<? echo $key; ?>"></textarea>

  <? } else { ?>
  
  <input name="<? echo $key; ?>" type="text" id="<? echo $key; ?>" size="45">
  
  
  <? } ?>  </td>
  </tr>


<?

	}

}


?>
</table>
  <p>
    <input type="submit" name="Submit2" value="Build New Language File">
  </p>
</form>