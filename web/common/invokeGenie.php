<?php include_once("/pcg/app/settings/genieConfiguration.inc.php"); ?>
<? include_once(CLASS_DATABASE_CONNECTION_POOL); ?>
<?php 
//session_start(); 
?>
<?

        $databaseType = $_REQUEST['databaseType'];
        $dbHostName = $_REQUEST['dbHostName'];
        $dbUserName = $_REQUEST['dbUserName'];
        $dbPassword = $_REQUEST['dbPassword'];

        $dbPool = new databaseConnectionPool($databaseType,$dbHostName,$dbUserName,$dbPassword);       
       
?>
<meta http-equiv="refresh" content="0;url=<? echo PAGE_MAIN_PAGE; ?>"> 