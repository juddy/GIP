<?

    include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");

    define("INC_MAIN_PAGE",WEB_PATH.FILE_SEPARATOR."index.php");
	
    define("INC_FRAME_COMPONENT",WEB_PATH.FILE_SEPARATOR."frames");
    define("INC_FRAME_GENERATOR_COMPONENT",INC_FRAME_COMPONENT.FILE_SEPARATOR."mainWindow");

    define("INC_MAIN_FRAMESET",INC_FRAME_COMPONENT.FILE_SEPARATOR."mainFrameSet.inc.php");    
    define("INC_GENERATOR_SIMPLE",INC_FRAME_GENERATOR_COMPONENT.FILE_SEPARATOR."simpleGenerator.inc.php");
    define("INC_GENERATOR_ADVANCED",INC_FRAME_GENERATOR_COMPONENT.FILE_SEPARATOR."advancedGenerator.inc.php");
    define("INC_GENERATOR_FULLAPP",INC_FRAME_GENERATOR_COMPONENT.FILE_SEPARATOR."fullAppGenerator.inc.php");
    define("INC_GENERATOR_USERPLUGINS",INC_FRAME_GENERATOR_COMPONENT.FILE_SEPARATOR."userPlugIns.inc.php"); 
    define("INC_GENERATOR_UTILS",INC_FRAME_GENERATOR_COMPONENT.FILE_SEPARATOR."utilsGenerator.inc.php");

    define("INC_COMMON_COMPONENT",WEB_PATH.FILE_SEPARATOR."common");    
    define("INC_LOGIN_PAGE",INC_COMMON_COMPONENT.FILE_SEPARATOR."rubLamp.inc.php");
    
   define("INC_PLUGINS_COMPONENT",WEB_PATH.FILE_SEPARATOR."userPlugIns");
   define("INC_SCAN_PLUGINS",INC_PLUGINS_COMPONENT.FILE_SEPARATOR."scanForPlugIns.php");        
    
?>
