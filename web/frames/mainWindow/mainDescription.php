<? 
include("/pcg/app/settings/genieConfiguration.inc.php");
include_once(INC_SUPERHEADER);
?>
<table width="100%">
<tr>
<td valign=topan>
<script language="JavaScript" src="<? echo PAGE_UPDATE_SERVER2_URL; ?>?v=<? echo APPLICATION_VERSION_NUMBER; ?>" type="text/javascript"></script>

<h2>Useful Links</h2>
<ul>
<li>
<a href="<? echo PAGE_SOURCEFORGE_PROJECT_HOMEPAGE_URL; ?>">phpCodeGenie <? echo LANG_DESC_PROJECT_PAGE; ?></a>
</li>
<li>
<a href="<? echo PAGE_SOURCEFORGE_DONATE_URL; ?>"><? echo LANG_DESC_DONATE_TO_PROJECT; ?></a>
</li>
<li>
<a href="<? echo PAGE_SOURCEFORGE_PCG3_HELP_FORUM_URL; ?>"><? echo LANG_DESC_HAVING_PROBLEMS; ?></a>
</li>
<li>
<a href="<? echo PAGE_SOURCEFORGE_SUBMIT_A_BUG_URL ?>"><? echo LANG_DESC_SUBMIT_BUG; ?></a>
</li>
<li>
<a href="<? echo PAGE_SOURCEFORGE_SUBMIT_A_DOCUMENTATION_URL ?>"><? echo LANG_DESC_SUBMIT_DOCUMENTATION; ?></a></li>
<li>
<a href="<? echo PAGE_SOURCEFORGE_FEEDBACK_URL; ?>?print=y"><? echo LANG_DESC_GIVE_FEEDBACK; ?></a></li>
</ul>

<h3><b><? echo strtoupper(LANG_BASIC_NEW); ?> !! : <a href="<? echo TOOLS_LANGUAGE_BUILD_NEW_LANGUAGE_FILE; ?>" target="_self"><? echo LANG_BASIC_TRANSLATE; ?> PCG <? echo LANG_BASIC_IN_YOUR_LANGUAGE; ?>.</a></b></h3>

<h2><? echo LANG_BASIC_INTRODUCTION; ?></h2>
<? echo LANG_DESC_WHAT_IS_IT; ?>

<br><br>
<span align=center>
<h3>
<? echo LANG_DESC_INSTRUCTIONS; ?>
</h3>
</span>

</td>
<td>
<img src="<? echo URL_IMAGE_FOLDER; ?>/genie.gif">
</td>
</tr>
</table>
<? 
include_once(INC_SUPERFOOTER);
?>