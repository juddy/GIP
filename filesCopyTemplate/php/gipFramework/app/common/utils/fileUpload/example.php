<?
include "EasyUpload.php.php";

//////////////////////////////////////////////////////
// Uso Simples - Simple Use
/* 
$upload = new EasyUpload;
$upload->setSO("W");
$upload->setPath("F:\\teste");
$upload->setOriginalFileName($_FILES["file"]["name"]);
*/
//////////////////////////////////////////////////////

//////////////////////////////////////////////////////
// Limitando Tamanho de arquivos - Limiting So great of archives
/* 
$upload = new EasyUpload;
$upload->setSizeMaxFileName(5);
$upload->setSO("W");
$upload->setPath("F:\\teste");
$upload->setOriginalFileName($_FILES["file"]["name"]);
$upload->formatOriginalFileName();
*/
//////////////////////////////////////////////////////

//////////////////////////////////////////////////////
// Arquivos com nomes aleatórios - Archives with random names
/* 
$upload = new EasyUpload;
$upload->setSO("W");
$upload->setPath("F:\\teste");
$upload->setOriginalFileName($_FILES["file"]["name"]);
$upload->RandomName(10);
$upload->formatOriginalFileName();
*/
//////////////////////////////////////////////////////


//////////////////////////////////////////////////////
// Arquivos com tamanhos máximo e nomes aleatórios - Random archives with sizes maximum and names
/* 
$upload = new EasyUpload;
$upload->setSizeMaxFileName(25);
$upload->setSO("W");
$upload->setPath("F:\\teste");
$upload->setOriginalFileName($_FILES["file"]["name"]);
$upload->RandomName(5);
$upload->formatOriginalFileName();
*/

//////////////////////////////////////////////////////
// Uso Completo - Complete Use
$upload = new EasyUpload;
$upload->setSizeMaxFileName(25);
$upload->setSO("W");
$upload->setPath("F:\\teste");
$upload->setOriginalFileName($_FILES["file"]["name"]);
$upload->RandomName(5);
$upload->formatOriginalFileName();
$upload->setNameAndExtension();

$extensionFile = $upload->getExtensionFile();
$nameFileFull  = $upload->getOriginalFileName();
$nameFile 	   = $upload->getNameFile();
//////////////////////////////////////////////////////


if(( $upload->isFileExist($_FILES["file"]["name"]) || ($_FILES["file"]["name"] == $nameFileFull) )):
		$msgUpload = "<font color='#FF0000'>Existing archive in the server</font>: <strong>".$_FILES["file"]["name"]."</strong>";
else:

	//alternative method
	//if (!($upload->uploadMoveFile($_FILES["file"]["tmp_name"]))):

	if (!($upload->uploadCopyFile($_FILES["file"]["tmp_name"]))):
		$msgUpload = "<font color='#FF0000'>Unexpected error when sending the archive</font>";
	else:
		$msgUpload  = "Successfully Sent archive!!<br>";
		$msgUpload .= "<strong>Archive (full name):</strong> $nameFileFull<br>";
		$msgUpload .= "<strong>Archive (name):</strong> $nameFile<br>";	
		$msgUpload .= "<strong>Extension:</strong> $extensionFile<br>";
	endif;
endif;

echo $msgUpload;
?>