<?
   session_start();
   define("URL_ADDRESS","http://openlpos.org/GIP/web/");

   // Linux Server
     define("SITE_PATH","/GIP");
     define("FILE_SEPARATOR", "/");
     // win or nix
     define("OS_TYPE","nix");


   /*****************   
   
   // Windows Server
   define("SITE_PATH","D:\\projects\\GIP");   // no trailing slashes
   define("FILE_SEPARATOR", "\\");
   // win or nix
   define("OS_TYPE","win");

   ***************/   


   define("WEB_SEPARATOR","/");
   define("APP_PATH",SITE_PATH.FILE_SEPARATOR."app");
   define("WEB_PATH",SITE_PATH.FILE_SEPARATOR."web");    
    
   // Specify the language that you want to use phpCodeGenie in
   // You can make your own language file if it does exist yet
   // and send your contribution back to phpCodeGenie
   define("LANGUAGE_FILE",APP_PATH.FILE_SEPARATOR."language".FILE_SEPARATOR."lang_english.inc.php");  
      
   define("CONFIG_COMPONENT",APP_PATH.FILE_SEPARATOR."settings");
   define("CONFIG_FILE",CONFIG_COMPONENT.FILE_SEPARATOR."definitions.inc.php");   
   include_once(CONFIG_FILE);   

?>
