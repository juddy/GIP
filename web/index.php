<?php include_once("/var/www/gip/app/settings/gipConfiguration.inc.php"); ?>
<?php 
 //session_start(); 
 ?>
<head>
<title><? echo APPLICATION_NAME; ?> v<? echo APPLICATION_VERSION; ?> running on <? echo URL_ADDRESS; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Page Title" content="<? echo APPLICATION_NAME; ?> v<? echo APPLICATION_VERSION; ?> hosted  @ <? echo URL_ADDRESS; ?>">
</head>
<?
$_SESSION['dbSession'] = isset($_SESSION['dbSession']) ? $_SESSION['dbSession'] : "0";

if (!$_SESSION['dbSession'])
{
	
	
	if (HAVE_AUTHENTICATION)
	{
		
		include_once(INC_LOGIN_PAGE);
		
	} // end of have authentication
	else
	{

		include_once(INC_MAIN_FRAMESET);
		
		
	}
}
else
{
	include_once(INC_MAIN_FRAMESET);
}
?>
</html>
