<?php include_once("/pcg/app/settings/genieConfiguration.inc.php"); 
include_once(INC_SUPERHEADER);
?>
<?

   include_once(CLASS_PLUGIN_LOADER);
   $thisPlugInLoader = new plugInLoader();
   
   $author = urldecode($_REQUEST['author']);
   $description = urldecode($_REQUEST['description']);
   
   $arguments['db'] = $_REQUEST['db'];
   $arguments['table'] = $_REQUEST['table'];

   $plugInName = $_REQUEST['name'];
   $plugInPath = $_REQUEST['path'];
   
   $generatedCode = $thisPlugInLoader->loadPlugIn(
                            $plugInName,
                            $plugInPath,
                            $arguments
                    );                     
?>
<table>
<tr>
<td align="right"><b><? echo LANG_UPLUGINS_PLUGIN_NAME; ?> :</b> </td>
<td><? echo $plugInName; ?></td>
</tr>
<tr>
<td align="right"><b><? echo LANG_BASIC_DESCRIPTION; ?> :</b></td>
<td><? echo $description; ?></td>
</tr>
<tr>
<td align="right"><b><? echo LANG_BASIC_AUTHOR; ?> :</b></td>
<td><? echo $author; ?></td>
<tr>
</table>
<h3><? echo LANG_UPLUGINS_BELOW_IS_OUTPUT; ?></h3>
<hr>
<? echo $generatedCode; ?>
