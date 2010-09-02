<?

$encodedLanguageFile = $_POST['encodedLanguageFile'];
$languageName = $_POST['languageName'];
$languageFileText = base64_decode($encodedLanguageFile);

$fileNameToSave = $languageName.date("Y-m-d").".inc.php";


header("Content-Type: text/plain");
header("Content-Disposition: attachment; filename=$fileNameToSave");


echo $languageFileText;

?>