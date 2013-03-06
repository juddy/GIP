<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
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

mail("your@emailaddress.com","Feedback from GIP Application",$emailContent,"from: ".$emailAddress);

?>
<h2>Feedback Submitted</h2>
<br>
<b>Thanks for your comments <b></b><? echo $name; ?>. We appreciate your time in giving us feedback.</b>
<br><br>
If you requested a response and we have a response, we'll get back to you as soon as possible.
<br>
</span><br>


<?php
include_once("../common/footer.php");
?>