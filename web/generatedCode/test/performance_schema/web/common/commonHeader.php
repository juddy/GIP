<?php  
    include_once("{APPLICATION_CONF_FILE}");
    session_start();
    include_once(CONFIG_FILE);
    header("Cache-control: private");  //IE 6 Fix for back button to work
?> 
<?php
   
   if (HAVE_PAGE_TIMER)
   {
       include_once(CLASS_PAGE_TIMER);  	 	
       $thisPageTimer = new pageTimer();
       $thisPageTimer->startTimer();
   }
   

    include_once(CLASS_TEXT_ENCRYPTER);
    include_once(CLASS_REQUEST_UTILS);
   

    if ($needAuth)
    {

    	// This page will check if user is autenticated.. 
    	// if not will print error message and exit  
  
    }

    
?>
<html>
<head>
<title><? echo APPLICATION_NAME; ?>  </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Page Title" content="<? echo APPLICATION_NAME; ?>">
<meta name="Description" content="Put Description Here ">
<meta name="Subject" content="Put Subject here">
<meta name="Keywords" content="phpcodegip,php">
<meta name="Author" content="Nilesh Dosooye, Your Name here">
</head>
<body>
<link rel="stylesheet" href="<? echo URL_STYLE_SHEET; ?>" type="text/css">
<script language="javascript" src="<? echo URL_COMMON_JAVA_SCRIPT; ?>"></script>
<script language="javascript" src="<? echo URL_JAVASCRIPT_VALIDATOR; ?>"></script>
<!-- Here is the main title of the site-->
<?
    if ($showHeader)
    {
?>
<div id="main-title"><? echo APPLICATION_NAME; ?></div>

<? } ?>
<div id="main-text">