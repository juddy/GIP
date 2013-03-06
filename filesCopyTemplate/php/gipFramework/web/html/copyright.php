<?
include_once("{APPLICATION_CONF_FILE}"); // This file should be put in the common include dir for PHP
?>
<?php

	include_once(CONFIG_FILE);
	$needAuth = true;       // set to true if this page needs authentication
	$showHeader = true;     // set to true if you want the header to show on this page
	include_once(PAGE_HEADER);
?>
<h2>Copyright Statement</h2>



<?php
	include_once(PAGE_FOOTER);
?>