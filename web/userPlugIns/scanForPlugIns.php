<?php include_once("//var/www/gip/app/settings/gipConfiguration.inc.php"); 
include_once(INC_SUPERHEADER);
?>
<?
include_once(CLASS_FILESYSTEM_UTILS);

function recursive_listdir($base)
{
	static $filelist = array();
	static $dirlist = array();
	
	
	
	if(is_dir($base))
	{
		$dh = opendir($base);
		
		while (false !== ($dir = readdir($dh)))
		{
			if (is_dir($base ."/". $dir) && $dir !== '.' && $dir !== '..')
			{
				$subbase = $base .FILE_SEPARATOR.$dir;
				//$dirlist[] = $subbase;
				$subdirlist = recursive_listdir($subbase);
			}
			elseif(is_file($base ."/". $dir) && $dir !== '.' && $dir !== '..')
			{
				if (strtolower(substr($base .FILE_SEPARATOR. $dir,-17))==".plugin.class.php")
				{
					$filelist[] = $base .FILE_SEPARATOR. $dir;
				}
			}
		}
		
		closedir($dh);
	}
	
	//$array['dirs'] = $dirlist;
	$array['files'] = $filelist;
	
	return $filelist;
}

$path = USER_PLUGINS_DIRECTORY;


$plugins = recursive_listdir($path);
include_once(CLASS_PLUGIN_LOADER);
$thisPlugInLoader = new plugInLoader();

//$arguments['db'] = $_REQUEST['db'];
//$arguments['table'] = $_REQUEST['table'];

$arguments['db'] = $db;
$arguments['table'] = $table;

?>
<h2><? echo LANG_UPLUGINS_FOUND_IN; ?> <? echo $path; ?></h2>


<?

if (count($plugins)==0)
{
?>

<h2><? echo LANG_UPLUGINS_NO_PLUGINS_FOUND; ?></h2>

<?
}
else
{

?>

<table cellpadding="6" cellspacing="0" width="100%">
<tr bgcolor="#9999CC">
<td width=150><? echo LANG_UPLUGINS_PLUGIN_NAME; ?></td>
<td width=450><? echo LANG_BASIC_DESCRIPTION; ?></td>
<td><? echo LANG_BASIC_AUTHOR; ?></td>
<td><? echo LANG_BASIC_RUN; ?></td>
</tr>


<?

for ($a=0;$a<count($plugins);$a++)
{
	$thisPlugIn = $plugins[$a];
	
	$fileString = fileSystemUtils::getStringFromFile($thisPlugIn);
	preg_match_all( '/<DESCRIPTION>(.+)<\/DESCRIPTION>/', $fileString , $descMatch);
	preg_match_all( '/<PARAMETERS>(.+)<\/PARAMETERS>/', $fileString , $parameterMatch);
	preg_match_all( '/<AUTHOR>(.+)<\/AUTHOR>/', $fileString , $authorMatch);
	preg_match_all( '/<PLUGINNAME>(.+)<\/PLUGINNAME>/', $fileString , $nameMatch);
	preg_match_all( '/<LOADER>(.+)<\/LOADER>/', $fileString , $loaderMatch);
	
	$description = $descMatch[1][0];
	$author = $authorMatch[1][0];
	$name = $nameMatch[1][0];
	
	    $loader = isset($loaderMatch[1][0]) ? $loaderMatch[1][0] : "";
	    $parameters = isset($parameterMatch[1][0]) ? $parameterMatch[1][0] : "";	    

	
	if ($author=="") { $author = LANG_BASIC_ANONYMOUS; }
	if ($description=="") { $description = LANG_BASIC_NOT_AVAILABLE; }
	
	$enDescription = urlencode($description);
    $enAuthor = urlencode($author);
	
?>

<tr valign=top>
<td>&nbsp; 
<a href="<? echo PAGE_PLUGIN_RUN_PLUGIN; ?>?name=<? echo $name; ?>&path=<? echo $thisPlugIn; ?>&loader=<? echo $loader; ?>&db=<? echo $arguments['db']; ?>&table=<? echo $arguments['table']; ?>&author=<? echo $enAuthor; ?>&description=<? echo $enDescription; ?>">

<? echo $name; ?>
</a>

</td>
<td>&nbsp; <? echo $description; ?></td>
<td>&nbsp; <? echo $author; ?></td>

<td>&nbsp; 

<a href="<? echo PAGE_PLUGIN_RUN_PLUGIN; ?>?name=<? echo $name; ?>&path=<? echo $thisPlugIn; ?>&loader=<? echo $loader; ?>&db=<? echo $arguments['db']; ?>&table=<? echo $arguments['table']; ?>&author=<? echo $enAuthor; ?>&description=<? echo $enDescription; ?>">

<b><? echo LANG_BASIC_RUN; ?></b>

</a> </td>



</tr>

<?
}
?>

</table>

<?
} // end else no plugins found
?>