<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<?
   $table = $_REQUEST['table'];
   $db = $_REQUEST['db'];
?>

<h1><? echo LANG_UG_UTILS_GENERATOR; ?></h1>
<? echo LANG_UG_UTILS_GENERATOR_DESC; ?>
<br>

	
<table width="100%" border="0" cellspacing="8" cellpadding="8">
    <tr valign="top">
        <td >
            <div align="right"><b><a href="<? echo PAGE_PHP_CLASS_MAKER_FORM; ?>">
            
            <? echo LANG_UTILITIES_PHP_CLASS_MAKER; ?>
            
            </a> </b></div></td>
        
        
        <td width="437">
        
         <? echo LANG_UTILITIES_PHP_CLASS_MAKER_DESC; ?>
        
        </td>
    </tr>
    <tr valign="top">
        <td><div align="right"><b><a href="<? echo PAGE_GENERATE_PHP_CLASS_FROM_TABLE; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
        
     <? echo LANG_UTILITIES_BUILD_CLASS_FROM_TABLE; ?>
                        
                        </a> </b></div></td>
        <td>
        
             <? echo LANG_UTILITIES_BUILD_CLASS_FROM_TABLE_DESC; ?>
        
        </td>
    </tr>
    <tr valign="top">
        <td><div align="right"><b><a href="<? echo TOOL_PHP_STYLE_SHEET_VIEWER; ?>">
        
     <? echo LANG_UTILITIES_STYLE_SHEET_VIEWER; ?>
        
        
        </a> </b></div></td>
        <td>
        
             <? echo LANG_UTILITIES_STYLE_SHEET_VIEWER_DESC; ?>
        
        </td>
    </tr>
    <tr valign="top">
        <td><div align="right"><b><a href="<? echo TOOLS_GEN_CONVERT_TOOL_ENTER_CODE; ?>">
        
             <? echo LANG_UTILITIES_GENERATE_GENERATOR; ?>
        
        
        </a></b></div></td>
        <td>
        
                     <? echo LANG_UTILITIES_GENERATE_GENERATOR_DESC; ?>
        
        
         </td>
    </tr>
    <tr valign="top">
        <td><div align="right"><b><a href="<? echo TOOLS_GEN_EXTRACT_FROM_FORM_ENTER_CODE; ?>">
        
                     <? echo LANG_UTILITIES_HTML_FORM_EXTRACTOR; ?>
        
        </a></b></div></td>
        <td>
        
            <? echo LANG_UTILITIES_HTML_FORM_EXTRACTOR; ?>
        
        </td>
    </tr>
    <tr valign="top">
        <td><div align="right"><b><a href="<? echo TOOLS_GEN_JAVA_EJB; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
        
            <? echo LANG_UTILITIES_JAVA_EJB_GENERATOR; ?>
        
        </a></b></div></td>
        <td>
        
                    <? echo LANG_UTILITIES_JAVA_EJB_GENERATOR_DESC; ?>
        
        </td>
    </tr>
    <tr valign="top">
        <td><div align="right"><b><a href="<? echo TOOLS_GEN_SQL; ?>?table=<? echo $table; ?>&db=<? echo $db; ?>">
        
                    <? echo LANG_UTILITIES_SQL_GENERATOR; ?>
        
        </a></b></div></td>
        <td>
        
                     <? echo LANG_UTILITIES_SQL_GENERATOR_DESC; ?>
        
        </td>
    </tr>
    <tr valign="top">
        <td><div align="right"><b><a href="<? echo TOOLS_GEN_GENERATE_NONSENSE; ?>">
        
                    <? echo LANG_UTILITIES_NONSENSE_GENERATOR; ?>
        
        </a></b></div></td>
        <td>
        
                   <? echo LANG_UTILITIES_NONSENSE_GENERATOR_DESC; ?>        
        </td>
    </tr>    
    <tr valign="top">
        <td><div align="right"><b><a href="<? echo TOOLS_LANGUAGE_BUILD_NEW_LANGUAGE_FILE; ?>">
        
                    <? echo LANG_UTILITIES_LANG_FILE_BUILDER; ?>
        
        </a></b></div></td>
        <td>
        
                   <? echo LANG_UTILITIES_LANG_FILE_BUILDER_DESC; ?>        
        </td>
    </tr>    
    
    
    
</table>
<p><br>
    </p>
<? 
include_once(INC_SUPERFOOTER);
?>