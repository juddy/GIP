<?
include_once("{APPLICATION_CONF_FILE}"); // This file should be put in the common include dir for PHP
?>
<?php

include_once(CONFIG_FILE);
$needAuth = true;       // set to true if this page needs authentication
$showHeader = true;     // set to true if you want the header to show on this page
include_once(PAGE_HEADER);
?>
<?

$name = $_REQUEST['name'];
$emailAddress = $_REQUEST['emailAddress'];
$job = $_REQUEST['job'];
$city = $_REQUEST['city'];
$country = $_REQUEST['country'];
$comments = $_REQUEST['comments'];

$emailContent = "";
$emailContent .= "Name : ".$name."\n";
$emailContent .= "Email Address : ".$emailAddress."\n";
$emailContent .= "Job Title : ".$job."\n\n";
$emailContent .= "City : ".$city."\n\n";
$emailContent .= "Country : ".$country."\n\n";
$emailContent .= "Comments : ".$comments."\n\n";

mail(APPLICATION_ADMIN_EMAIL,"Feedback from ".APPLICATION_NAME,$emailContent,"from: ".$emailAddress);

?>
<h2>Feedback Submitted</h2>
<br>
<b>Thanks for your comments <b></b><? echo $name; ?>. We appreciate your time in giving us feedback.</b>
<br><br>
If you requested a response and we have a response, we'll get back to you as soon as possible.
<br>
</span><br>


<?php
include_once(PAGE_FOOTER);
?>