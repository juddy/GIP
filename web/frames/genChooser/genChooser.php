<? 
include("//var/www/gip/app/settings/gipConfiguration.inc.php");
?>
<script type="text/javascript">
function changeurl(genType,db,table)
{
      parent.mainWindow.location.href="<? echo PAGE_FRAME_RIGHT_MAIN_GENERATOR; ?>?newGenType="+genType+"&db="+db+"&table="+table
}
</script>
<?

    // Initializing constants to blank to prevent undefined notices if error is turned to E_ALL 
    $thisTable = isset($_REQUEST['table']) ? $_REQUEST['table'] : "";
    $thisDb = isset($_REQUEST['db']) ? $_REQUEST['db'] : "";
    $generatorType = isset($_REQUEST['genType']) ? $_REQUEST['genType'] : "";
    $_SESSION['genType'] = isset($_SESSION['genType']) ? $_SESSION['genType'] : "";
    
    if ($generatorType!="")
    {
    	$_SESSION['genType'] = $generatorType;
    }  
    else if ($_SESSION['genType']=="")
    {
    	$_SESSION['genType'] = DEFAULT_GENERATOR;
    }
    
    $defaultColor = "#b2b2b2";
    $chosenColor = "#3fa4f1";
    
    if ($_SESSION['genType']==GENERATOR_SIMPLE) { $bgColorSimple = $chosenColor; } else { $bgColorSimple = $defaultColor; }
    if ($_SESSION['genType']==GENERATOR_ADVANCED) { $bgColorAdvanced = $chosenColor; } else { $bgColorAdvanced = $defaultColor; }
    if ($_SESSION['genType']==GENERATOR_FULLAPP) { $bgColorFullApp = $chosenColor; } else { $bgColorFullApp = $defaultColor; }        
    if ($_SESSION['genType']==GENERATOR_USER_PLUGINS) { $bgColorUtils = $chosenColor; } else { $bgColorUtils = $defaultColor; }
    if ($_SESSION['genType']==GENERATOR_UTILS) { $bgColorUtils = $chosenColor; } else { $bgColorUtils = $defaultColor; }
            
?>
<body style="margin:3">
<link rel="stylesheet" href="<? echo URL_STYLE_SHEET; ?>" type="text/css">

<table width="100%" height="30" border="1" cellpadding="2" cellspacing="2" bordercolor="#FFFFFF" bgcolor="#003366">
  <tr> 
    <td width="25%" bgcolor="<? echo $bgColorSimple; ?>"><div align="center">
    
    <a href="<? echo $_SERVER['PHP_SELF']; ?>?genType=<? echo GENERATOR_SIMPLE; ?>&db=<? echo $thisDb; ?>&table=<? echo $thisTable; ?>" class="genChooserLink" onclick="changeurl('<? echo GENERATOR_SIMPLE; ?>','<? echo $thisDb; ?>','<? echo $thisTable; ?>')">
              <? echo LANG_GEN_CHOOSER_BEGINNING_PROGRAMMERS; ?>
    </a></div>
    
    </td>
        
        
    <td width="25%" bgcolor="<? echo $bgColorAdvanced; ?>"> 
      <div align="center">
      <a href="<? echo $_SERVER['PHP_SELF']; ?>?genType=<? echo GENERATOR_ADVANCED; ?>&db=<? echo $thisDb; ?>&table=<? echo $thisTable; ?>" class="genChooserLink" onclick="changeurl('<? echo GENERATOR_ADVANCED; ?>','<? echo $thisDb; ?>','<? echo $thisTable; ?>')">  
               <? echo LANG_GEN_CHOOSER_ADVANCED_PROGRAMMERS; ?> </a></div>
       </td>
       
    <td width="25%" bgcolor="<? echo $bgColorFullApp; ?>"><div align="center">
    
    <a href="<? echo $_SERVER['PHP_SELF']; ?>?genType=<? echo GENERATOR_USER_PLUGINS; ?>&db=<? echo $thisDb; ?>&table=<? echo $thisTable; ?>" class="genChooserLink" onclick="changeurl('<? echo GENERATOR_USER_PLUGINS; ?>','<? echo $thisDb; ?>','<? echo $thisTable; ?>')">
    
    <? echo LANG_GEN_CHOOSER_USER_PLUGIN_GENERATOR; ?>
    
    </a>
        </div>
    </div></td>
    
    
    <td width="25%" bgcolor="<? echo $bgColorUtils; ?>"><div align="center">
    <a href="<? echo $_SERVER['PHP_SELF']; ?>?genType=<? echo GENERATOR_UTILS; ?>&db=<? echo $thisDb; ?>&table=<? echo $thisTable; ?>" class="genChooserLink" onclick="changeurl('<? echo GENERATOR_UTILS; ?>','<? echo $thisDb; ?>','<? echo $thisTable; ?>')">
             
    <? echo LANG_GEN_CHOOSER_UTILS_GENERATOR; ?>
    
    </a></div></td>
  </tr>
</table>
</body>
