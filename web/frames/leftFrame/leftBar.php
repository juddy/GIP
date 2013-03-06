<? 
include("/var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CLASS_DATABASE_QUERY);
?>

<script type="text/javascript">
function changeurl(db,table)
{
	parent.mainWindow.location.href="<? echo PAGE_FRAME_RIGHT_MAIN_GENERATOR; ?>?db="+db+"&table="+table
	parent.genChooser.location.href="<? echo PAGE_FRAME_RIGHT_GEN_CHOOSER; ?>?db="+db+"&table="+table
}
</script>
<link rel="stylesheet" href="<? echo URL_STYLE_SHEET; ?>" type="text/css">

<? if (!SHOW_DB_TREE_LIST) { ?>

<style>
li{ list-style: none; margin-left:0px;  list-style-image: url(<? echo URL_IMAGE_FOLDER; ?>/arrow.gif);} 
ul{ list-style: none; margin-left:2px; 
list-style-image: url(<? echo URL_IMAGE_FOLDER; ?>/arrow.gif);} 
</style>

<? } 
   else 
   { 
?>
<SCRIPT SRC="<? echo URL_JAVASCRIPT_TREE; ?>" LANGUAGE="JavaScript"></SCRIPT>
<LINK REL="stylesheet" HREF="<? echo URL_STYLE_SHEET_TREE; ?>"> 
<? } ?>




<body background="<? echo URL_IMAGE_FOLDER; ?>/gradhor.gif" >

<?

$thisDbQuery = new databaseQuery();
$allDatabases = $thisDbQuery->getDatabases();

?>
<b><? echo LANG_BASIC_DATABASES; ?></b>
<br>

<?


if ($allDatabases=="") { $allDatabases[0] = ""; } 
?>
<UL CLASS="mktree">
<?
for ($a=0;$a<count($allDatabases);$a++)
{

	$connected = $thisDbQuery->useDatabase($allDatabases[$a]);

	if ($connected)
	{

		$allTables = $thisDbQuery->getTables();
		$currentDatabase = $allDatabases[$a];
		$numberOfTables = count($allTables);

		// if ($currentDatabase=="") { $currentDatabase = "DatabaseRoot"; }

?>

 
        
        <li> <a href="#" onclick="changeurl('<? echo $currentDatabase; ?>','')" class="text-decoration: none;"> 	

        <? 
        if ($currentDatabase=="") 
        { 
        	echo "DatabaseRoot"; 
        }
        else 
        {
        	echo "<span class=\"dbName\">".$currentDatabase."</span>";
        	//echo " <span class=minitext>(".$numberOfTables.")</span>";
        }
        ?>
        

        
  </a>


  <ul>  
  <? for ($b=0;$b<$numberOfTables;$b++)
  {
  ?>
<li>
 <a href="#" onclick="changeurl('<? echo $currentDatabase; ?>','<?  echo $allTables[$b]; ?>')"  onMouseOver="window.status='Database --><? echo $currentDatabase; ?>, Table --> <?  echo $allTables[$b]; ?>';return true"> 	

 <?  echo $allTables[$b]; ?> 

 </a> 
</li>
    
<?  }
  ?>
  </ul>

      
 <?   	
	} // end connected

}
?>
</ul>
</body>
