</div>
<!-- Here is the footer  -->

<?php
    if ($showHeader)
    {
?>
<div id="footer">

<a href="http://phpcodegip.sourceforge.net" target="_blank">GIP Generated Application</a> :: <a href="<? echo PAGE_HTML_MAIN_INDEX_PAGE; ?>">home</a> :: <a href="<? echo PAGE_HTML_COPYRIGHT; ?>">copyright</a> :: <a href="<? echo PAGE_HTML_CONTACT_US; ?>">contact</a>
<br>
<?
   if (HAVE_PAGE_TIMER)
   {
       $thisPageTimer->endTimer();
       $thisPageTimer->displayTimeTaken();
   }
 ?>
</div>

<div id="left-menu">
	<p><a href="<? echo PAGE_HTML_MAIN_INDEX_PAGE; ?>" class="current">Home</a></p>
	<p><a href="<? echo PAGE_HTML_ABOUT_US; ?>">About</a></p>
	<p><a href="<? echo PAGE_HTML_CONTACT_US; ?>">Contact Us</a></p>
	<p><a href="<? echo PAGE_HTML_FAQS; ?>">FAQs</a></p>
	<p><a href="<? echo PAGE_HTML_COPYRIGHT; ?>">Copyright</a></p>
</div>
<?php } ?>