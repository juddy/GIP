<?

    include_once("/pcg/app/settings/genieConfiguration.inc.php");
    
   define("WEB_COMMON_COMPONENT",WEB_PATH.FILE_SEPARATOR."common");
   define("INC_HEADER",WEB_COMMON_COMPONENT.FILE_SEPARATOR."header.php");
   define("INC_FOOTER",WEB_COMMON_COMPONENT.FILE_SEPARATOR."footer.php");

     
   define("INC_SUPERHEADER",WEB_COMMON_COMPONENT.FILE_SEPARATOR."superHeader.inc.php");
   define("INC_SUPERFOOTER",WEB_COMMON_COMPONENT.FILE_SEPARATOR."superFooter.inc.php");
          
   define("URL_STYLE_SHEET",URL_ADDRESS.WEB_SEPARATOR."common/styleSheets/style.css");
   define("URL_COMMON_JAVA_SCRIPT",URL_ADDRESS.WEB_SEPARATOR."common/javascript/commonJavaScript.js");
   define("URL_IMAGE_FOLDER",URL_ADDRESS.WEB_SEPARATOR."images");
   define("URL_JAVASCRIPT_VALIDATOR",URL_ADDRESS.WEB_SEPARATOR."common/javascript/formValidator/javascriptFormValidator.js");
   define("URL_JAVASCRIPT_TREE",URL_ADDRESS.WEB_SEPARATOR."common/javascript/mktree.js");
   define("URL_STYLE_SHEET_TREE",URL_ADDRESS.WEB_SEPARATOR."common/styleSheets/mktree.css.php");
       
     $today = date("Y-m-d");
     $dateTime = date("Y-m-d h:i:s");
     $userIpAddress=getenv("remote_addr");    
    
   define("GENERATOR_SIMPLE","simple");
   define("GENERATOR_ADVANCED","advanced");
   define("GENERATOR_FULLAPP","fullapp");
   define("GENERATOR_USER_PLUGINS","userPlugIns");   
   define("GENERATOR_UTILS","utils");

   define("DEFAULT_GENERATOR",GENERATOR_SIMPLE); // simple", advanced", fullapp", utils     

   define("GENERATED_FILES_FOLDER",WEB_PATH.FILE_SEPARATOR."generatedCode");
      
?>