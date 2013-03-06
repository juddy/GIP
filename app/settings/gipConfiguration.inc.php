<?
   session_start();
   define("URL_ADDRESS","http://amdx2/gip/web");

   // Linux Server
     define("SITE_PATH","/var/www/gip");
     define("FILE_SEPARATOR", "/");
     // win or nix
     define("OS_TYPE","nix");

   define("WEB_SEPARATOR","/");
   define("APP_PATH",SITE_PATH.FILE_SEPARATOR."app");
   define("WEB_PATH",SITE_PATH.FILE_SEPARATOR."web");    
    
   // Specify the language that you want to use gip in
   // You can make your own language file if it does exist yet
   // and send your contribution back to gip
   define("LANGUAGE_FILE",APP_PATH.FILE_SEPARATOR."language".FILE_SEPARATOR."lang_english.inc.php");  
      
   define("CONFIG_COMPONENT",APP_PATH.FILE_SEPARATOR."settings");
   define("CONFIG_FILE",CONFIG_COMPONENT.FILE_SEPARATOR."definitions.inc.php");   
   include_once(CONFIG_FILE);   

?>
