<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
   include_once(CLASS_PLUGIN_LOADER);
   include_once(CLASS_FILESYSTEM_UTILS);
   include_once(CLASS_DATABASE);
   
   $thisFileSystemUtils = new fileSystemUtils();
   $thisPlugInLoader = new plugInLoader();
   $thisDatabase = new database();
   
   $thisDb =  requestUtils::getRequestObject('db');
   
   echo "Db : $thisDb <br>";
   
   $thisDatabase->useDatabase($thisDb);
   $dbTables = $thisDatabase->getDbTables();
   $arguments = array();
   for ($a=0;$a<count($dbTables);$a++)
   {
   
   $arguments['db'] = requestUtils::getRequestObject('db');
   $arguments['table'] = requestUtils::getRequestObject('table');
   
   echo "<pre>";
   print_r($arguments);
   echo "</pre>";
   echo "<hr>";

   $generatedEnterFormCode = $thisPlugInLoader->loadPlugIn(
                            PLUGIN_PHP_GENIE_WEB_ENTER_FORM_GENERATOR_NAME,
                            PLUGIN_PHP_GENIE_WEB_ENTER_FORM_GENERATOR_CLASS,
                            $arguments
                    );


   $generatedInsertCode = $thisPlugInLoader->loadPlugIn(
                            PLUGIN_PHP_GENIE_WEB_INSERT_GENERATOR_NAME,
                            PLUGIN_PHP_GENIE_WEB_INSERT_GENERATOR_CLASS,
                            $arguments
                    );  
               
  

   $generatedEditFormCode = $thisPlugInLoader->loadPlugIn(
                            PLUGIN_PHP_GENIE_WEB_EDIT_FORM_GENERATOR_NAME,
                            PLUGIN_PHP_GENIE_WEB_EDIT_FORM_GENERATOR_CLASS,
                            $arguments
                    );                    
                    
        
                         
   $generatedUpdateCode = $thisPlugInLoader->loadPlugIn(
                           PLUGIN_PHP_GENIE_WEB_UPDATE_GENERATOR_NAME,
                           PLUGIN_PHP_GENIE_WEB_UPDATE_GENERATOR_CLASS,
                           $arguments
                  );  

   $generatedViewRecordCode = $thisPlugInLoader->loadPlugIn(
                            PLUGIN_PHP_GENIE_WEB_INSERT_GENERATOR_NAME,
                            PLUGIN_PHP_GENIE_WEB_INSERT_GENERATOR_CLASS,
                            $arguments
                    );                  
                    
                    
   $newWebPath = GENERATED_FILES_FOLDER.FILE_SEPARATOR.strtolower($_SESSION['db']).FILE_SEPARATOR."web".FILE_SEPARATOR."generatedForms".FILE_SEPARATOR.strtolower($arguments['table']);
   $newAppPath = GENERATED_FILES_FOLDER.FILE_SEPARATOR.strtolower($_SESSION['db']).FILE_SEPARATOR."app".FILE_SEPARATOR."classes".FILE_SEPARATOR.strtolower($arguments['table']);
      
   
   $newEnterFileName = $newWebPath.FILE_SEPARATOR."enterNew".ucfirst($arguments['table']).".php";
   $newInsertFileName = $newWebPath.FILE_SEPARATOR."insert".ucfirst($arguments['table']).".php";
   $newEditFileName = $newWebPath.FILE_SEPARATOR."edit".ucfirst($arguments['table']).".php";
   $newUpdateFileName = $newWebPath.FILE_SEPARATOR."update".ucfirst($arguments['table']).".php";        
   $newViewFileName = $newWebPath.FILE_SEPARATOR."view".ucfirst($arguments['table']).".php";
      
   $thisFileSystemUtils->makeDirectoryRecursive($newWebPath);
   $thisFileSystemUtils->makeDirectoryRecursive($newAppPath);   
   
   $thisFileSystemUtils->createNewFile($newEnterFileName,$generatedEnterFormCode);     
   $thisFileSystemUtils->createNewFile($newInsertFileName,$generatedInsertCode);
   $thisFileSystemUtils->createNewFile($newEditFileName,$generatedEditFormCode);
   $thisFileSystemUtils->createNewFile($newUpdateFileName,$generatedUpdateCode);      
   $thisFileSystemUtils->createNewFile($newViewFileName,$generatedViewRecordCode);    
   
   
   echo "File Created --> ".$newEnterFileName;  
   }                 
?>