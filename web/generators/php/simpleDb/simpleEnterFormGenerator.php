<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
   include_once(CLASS_TABLE);
   include_once(CLASS_PLUGIN_LOADER);
   
   $thisPlugInLoader = new plugInLoader();
   $arguments = array();
   $arguments['db'] = requestUtils::getRequestObject('db');
   $arguments['table'] = requestUtils::getRequestObject('table');
   $arguments['headerText'] = "";
   $arguments['footerText'] = "";   
   
   $thisTable = new table($arguments['table'],$arguments['db']);
   $allFields = $thisTable->getFieldNameArray();   
   
   $fields = requestUtils::getRequestObject("chosenFieldName");
   
   for ($a=0;$a<count($allFields);$a++)
   {
   	  $fieldSize[$allFields[$a]] = requestUtils::getRequestObject("size".$allFields[$a]);  
   	  $fieldType[$allFields[$a]] = requestUtils::getRequestObject("inputType".$allFields[$a]);
   	  $fieldLabel[$allFields[$a]] = requestUtils::getRequestObject("label".$allFields[$a]);
   }
   
   $arguments['chosenFields'] = requestUtils::getRequestObject('chosenFieldName');
   $arguments['fieldSize'] = $fieldSize;
   $arguments['fieldType'] = $fieldType;
   $arguments['label'] = $fieldLabel;
   $arguments['formType'] = requestUtils::getRequestObject('formType');
   
   
   $generatedCode = $thisPlugInLoader->loadPlugIn(
                            PLUGIN_PHP_SIMPLE_WEB_ENTER_FORM_GENERATOR_NAME,
                            PLUGIN_PHP_SIMPLE_WEB_ENTER_FORM_GENERATOR_CLASS,
                            $arguments
                    );                 
                    
   highlight_string($generatedCode);
?>