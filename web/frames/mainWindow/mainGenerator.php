<? 
include("/pcg/app/settings/genieConfiguration.inc.php"); 
include_once(INC_SUPERHEADER);
?>
<?


    // Initializing constants to blank to prevent undefined notices if error is turned to E_ALL 
    $thisTable = isset($_REQUEST['table']) ? $_REQUEST['table'] : "";
    $thisDb = isset($_REQUEST['db']) ? $_REQUEST['db'] : "";
    
    $thisNewGenType = isset($_REQUEST['newGenType']) ? $_REQUEST['newGenType'] : "";
    $generatorType = isset($_REQUEST['genType']) ? $_REQUEST['genType'] : "";
    $_SESSION['genType'] = isset($_SESSION['genType']) ? $_SESSION['genType'] : "";
    $_SESSION['table'] = isset($_SESSION['table']) ? $_SESSION['table'] : "";
    $_SESSION['db'] = isset($_SESSION['db']) ? $_SESSION['db'] : "";
    
       
   
   if ($thisNewGenType!="")
   {
   	    $_SESSION['genType'] = $thisNewGenType;
   }
   
   if ($thisTable=="")
   {  $thisTable = $_SESSION['table'];      }
   else { $_SESSION['table'] = $thisTable; }
   
   if ($thisDb=="")
   { $thisDb = $_SESSION['db']; }
   else { $_SESSION['db'] = $thisDb; }


    if ($thisNewGenType!="")
   {
       $genTypeToShow = $thisNewGenType;    
   }
   else
   {
	    $genTypeToShow = $_SESSION['genType'];
   }


?>
<? echo LANG_BASIC_ACTIVE; ?> <? echo LANG_BASIC_DATABASE; ?> :

<? if ($thisDb=="") { ?> <i><? echo LANG_BASIC_NONE_SELECTED; ?></i> <? } else { ?>   <b class="chosen"> <? echo $thisDb; ?> </b> <? } ?>

<br>
<? echo LANG_BASIC_ACTIVE; ?> <? echo LANG_BASIC_TABLE; ?>: 

<? if ($thisTable=="") { ?> <i><? echo LANG_BASIC_NONE_SELECTED; ?></i> <? } else { ?>   <b class="chosen"> <?  echo $thisTable; ?> </b> <? } ?>

 <br>
<?
    if ($genTypeToShow==GENERATOR_SIMPLE) 
    { 
    	
    	include_once(INC_GENERATOR_SIMPLE);
    
    } 
    else if ($genTypeToShow==GENERATOR_ADVANCED) 
    { 
    	
    	include_once(INC_GENERATOR_ADVANCED);
    
    }
    else if ($genTypeToShow==GENERATOR_FULLAPP) 
    { 

    	include_once(INC_GENERATOR_FULLAPP);
    
    }      
    else if ($genTypeToShow==GENERATOR_USER_PLUGINS) 
    { 

    	include_once(INC_GENERATOR_USERPLUGINS);
    
    }       
    else if ($genTypeToShow==GENERATOR_UTILS) 
    { 

    	include_once(INC_GENERATOR_UTILS);
    
    }
	else
	{

    	include_once(INC_GENERATOR_SIMPLE);
	}
    
    
?>
<? 
include_once(INC_SUPERFOOTER);
?>