<?php  

class errorHandler
{
	
	// Variables
	var $userErrorMessage;		// comment for userErrorMessage
	var $programErrorMessage;		// comment for programErrorMessage
	var $emailAdmin;		// comment for emailAdmin
	var $errorPage;		// comment for errorPage
	var $quitProgram;		// comment for quitProgram
	var $displayError;		// comment for displayError
	var $appName;		// comment for appName
	var $appVersion;		// comment for appVersion
	var $emailAddress;		// comment for emailAddress
	var $logToFile;		// comment for logToFile
	var $logFile;		// comment for logFile
	
	/**
	* @return returns value of variable $userErrorMessage
	* @desc getUserErrorMessage : Getting value for variable $userErrorMessage
	*/
	function getUserErrorMessage()
	{
		return $this->userErrorMessage;
	}
	
	/**
	* @param param : value to be saved in variable $userErrorMessage
	* @desc setUserErrorMessage : Setting value for $userErrorMessage
	*/
	function setUserErrorMessage($value)
	{
		$this->userErrorMessage = $value;
	}
	
	/**
	* @return returns value of variable $programErrorMessage
	* @desc getProgramErrorMessage : Getting value for variable $programErrorMessage
	*/
	function getProgramErrorMessage()
	{
		return $this->programErrorMessage;
	}
	
	/**
	* @param param : value to be saved in variable $programErrorMessage
	* @desc setProgramErrorMessage : Setting value for $programErrorMessage
	*/
	function setProgramErrorMessage($value)
	{
		$this->programErrorMessage = $value;
	}
	
	/**
	* @return returns value of variable $emailAdmin
	* @desc getEmailAdmin : Getting value for variable $emailAdmin
	*/
	function getEmailAdmin()
	{
		return $this->emailAdmin;
	}
	
	/**
	* @param param : value to be saved in variable $emailAdmin
	* @desc setEmailAdmin : Setting value for $emailAdmin
	*/
	function setEmailAdmin($value)
	{
		$this->emailAdmin = $value;
	}
	
	/**
	* @return returns value of variable $errorPage
	* @desc getErrorPage : Getting value for variable $errorPage
	*/
	function getErrorPage()
	{
		return $this->errorPage;
	}
	
	/**
	* @param param : value to be saved in variable $errorPage
	* @desc setErrorPage : Setting value for $errorPage
	*/
	function setErrorPage($value)
	{
		$this->errorPage = $value;
	}
	
	/**
	* @return returns value of variable $quitProgram
	* @desc getQuitProgram : Getting value for variable $quitProgram
	*/
	function getQuitProgram()
	{
		return $this->quitProgram;
	}
	
	/**
	* @param param : value to be saved in variable $quitProgram
	* @desc setQuitProgram : Setting value for $quitProgram
	*/
	function setQuitProgram($value)
	{
		$this->quitProgram = $value;
	}
	
	/**
	* @return returns value of variable $displayError
	* @desc getDisplayError : Getting value for variable $displayError
	*/
	function getDisplayError()
	{
		return $this->displayError;
	}
	
	/**
	* @param param : value to be saved in variable $displayError
	* @desc setDisplayError : Setting value for $displayError
	*/
	function setDisplayError($value)
	{
		$this->displayError = $value;
	}
	
	
	
	
	/**
	* @return returns value of variable $appName
	* @desc getAppName : Getting value for variable $appName
	*/
	function getAppName()
	{
		return $this->appName;
	}
	
	/**
	* @param param : value to be saved in variable $appName
	* @desc setAppName : Setting value for $appName
	*/
	function setAppName($value)
	{
		$this->appName = $value;
	}
	
	/**
	* @return returns value of variable $appVersion
	* @desc getAppVersion : Getting value for variable $appVersion
	*/
	function getAppVersion()
	{
		return $this->appVersion;
	}
	
	/**
	* @param param : value to be saved in variable $appVersion
	* @desc setAppVersion : Setting value for $appVersion
	*/
	function setAppVersion($value)
	{
		$this->appVersion = $value;
	}
	
	/**
	* @return returns value of variable $emailAddress
	* @desc getEmailAddress : Getting value for variable $emailAddress
	*/
	function getEmailAddress()
	{
		return $this->emailAddress;
	}
	
	/**
	* @param param : value to be saved in variable $emailAddress
	* @desc setEmailAddress : Setting value for $emailAddress
	*/
	function setEmailAddress($value)
	{
		$this->emailAddress = $value;
	}
	
	/**
	* @return returns value of variable $logToFile
	* @desc getLogToFile : Getting value for variable $logToFile
	*/
	function getLogToFile()
	{
		return $this->logToFile;
	}
	
	/**
	* @param param : value to be saved in variable $logToFile
	* @desc setLogToFile : Setting value for $logToFile
	*/
	function setLogToFile($value)
	{
		$this->logToFile = $value;
	}
	
	/**
	* @return returns value of variable $logFile
	* @desc getLogFile : Getting value for variable $logFile
	*/
	function getLogFile()
	{
		return $this->logFile;
	}
	
	/**
	* @param param : value to be saved in variable $logFile
	* @desc setLogFile : Setting value for $logFile
	*/
	function setLogFile($value)
	{
		$this->logFile = $value;
	}
	
	
	function errorHandler()
	{
		
		$this->setDisplayError(ERROR_HANDLER_DISPLAY_ERROR_TO_USER);
		$this->setEmailAdmin(ERROR_HANDLER_SEND_ADMIN_EMAIL_ON_ERROR);
		$this->setAppName(APPLICATION_NAME);
		$this->setAppVersion(APPLICATION_VERSION);
		$this->setEmailAddress(APPLICATION_ADMIN_EMAIL);
		$this->setQuitProgram(ERROR_HANDLER_QUIT_PROGRAM_ON_ERROR);
	}
	
	
	
	/**
	* @return void
	* @desc Handles errors that occur during program execution. Sends email to admin if required and display nice error message for user
	*/
	function handleError()
	{
		
		
		if ($this->getEmailAdmin())
		{
			$adminEmailContent = "Error has occured in  ".$this->getAppName().", version ".$this->getAppVersion()."\n\n";
			$adminEmailContent = $adminEmailContent."Error Page : ".$this->getErrorPage()." \n\n";
			$adminEmailContent = $adminEmailContent."Program Error Message : ".$this->getProgramErrorMessage()." \n\n";
			$adminEmailContent = $adminEmailContent."User Error Message : ".$this->getUserErrorMessage()." \n\n";
			
			$adminEmailSubject = "Error in ".$this->getAppName().", v ".$this->getAppVersion()."\n\n";
			
			if ($this->getEmailAdmin())
			{
				mail($this->getEmailAddress(),$adminEmailSubject,$adminEmailContent,$adminEmailSubject);
			}
			
			if ($this->logToFile)
			{
				// write code to log to log file
				
			}
			
		}
		
		if ($this->getDisplayError())
		{
			
?>
<style type="text/css">
<!--
.style4 {
	color: #003366;
	font-weight: bold;
	font-size: 16px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style6 {
	color: #FF0000;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 18px;
}

.style9 {color: #FF0000; font-weight: bold; font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 14px; }
-->
</style>
<table width="733" border="0" cellspacing="6" cellpadding="6">
  <tr valign="top">
    <td height="35" colspan="2"><span class="style6"> An Error has occurred in
        <? echo $this->getAppName(); ?> Version <? echo $this->getAppVersion(); ?> </span></td>
  </tr>
  <tr valign="top">
    <td width="156" height="60"><span class="style9">Cause of the Error : </span></td>
    <td width="535" height="80" bgcolor="#CCCCCC"><span class="style4"><? echo $this->getUserErrorMessage(); ?> </span></td>
  </tr>
  <tr valign="top">
    <td height="30" colpan=2>&nbsp;</td>
  </tr>
</table>

<?



		}
		
		if ($this->getQuitProgram())
		{
			
			die("<span class=\"style9\">".$this->getAppName()." has stopped at this Page. Please Try again.</span>");
			
		}
	}
	
	
}
?>