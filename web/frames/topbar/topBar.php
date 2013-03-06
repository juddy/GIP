<? 
include("//var/www/gip/app/settings/gipConfiguration.inc.php");
?>
<body background="<? echo URL_IMAGE_FOLDER; ?>/bluebar1.gif" bgcolor="white" style="margin:2">
<link rel="stylesheet" href="<? echo URL_STYLE_SHEET; ?>" type="text/css">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr valign=top>
<td>
<table width=290 cellpadding="0" cellspacing="0" border="0"><tr><td>
<a href="<? echo PAGE_FRAME_RIGHT_MAINDESCRIPTION; ?>" target="mainWindow">
<img src="<? echo URL_IMAGE_FOLDER."/GIP.gif"; ?>" border="0" alt="Back to GIP Home">
</a>
</td>
<td valign=top>
 <b><a href="<? echo PAGE_GITHUB_PROJECT_HOMEPAGE_URL; ?>" target="mainWindow"><? echo strtoupper(APPLICATION_NAME); ?> v<? echo APPLICATION_VERSION; ?></a></b>
 <br>(<a href="<? echo PAGE_AUTHOR_BIO; ?>" target="mainWindow"><font color=red><? echo LANG_BASIC_BY; ?><b> W.J. Kennedy</b></font></a>)
</td>
</tr>
</table>
 
 </td>

<td>
       
<? if (HAVE_AUTHENTICATION)
{
	
	if ($_SESSION['dbSession'])
	{
		
?>

<? echo LANG_BASIC_DATABASE_TYPE; ?> : <b><? echo $_SESSION['dbType']; ?> </B>
<br>
<? echo LANG_BASIC_DATABASE." ".LANG_BASIC_USER; ?> : <b><? echo $_SESSION['dbUserName']; ?> </b> (<a href="<? echo PAGE_LOGOUT_GENIE; ?>" target="_top"><? echo LANG_BASIC_LOGOUT; ?></a>)


<?
	}
  }
  else { 
  ?>

<? echo LANG_BASIC_DATABASE_TYPE; ?> : <b><? echo DATABASE_SERVER_TO_USE; ?> </B>
<br>
<? echo LANG_BASIC_DATABASE." ".LANG_BASIC_USER; ?> : <b><? echo DATABASE_USER_NAME; ?> </b> 

<? } ?>
 </td>
 <td>
<script language="JavaScript" src="<? echo PAGE_UPDATE_SERVER1_URL; ?>?v=<? echo APPLICATION_VERSION_NUMBER; ?>" type="text/javascript"></script>
</td>




</tr>

</table>
</body>
