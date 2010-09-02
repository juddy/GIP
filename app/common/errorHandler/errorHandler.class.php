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
			$adminEmailContent = LANG_INTERNALS_ERROR_OCCURED_IN.$this->getAppName().", version ".$this->getAppVersion()."\n\n";
			$adminEmailContent = $adminEmailContent.LANG_INTERNALS_ERROR_PAGE." : ".$this->getErrorPage()." \n\n";
			$adminEmailContent = $adminEmailContent.LANG_INTERNALS_PROGRAM_ERROR_MESSAGE." : ".$this->getProgramErrorMessage()." \n\n";
			$adminEmailContent = $adminEmailContent.LANG_INTERNALS_USER_ERROR_MESSAGE." : ".$this->getUserErrorMessage()." \n\n";

			$adminEmailSubject = LANG_INTERNALS_ERROR_IN.$this->getAppName().", v ".$this->getAppVersion()."\n\n";

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
			echo "<br><br>";
			echo LANG_INTERNALS_ERROR_OCCURED_IN.$this->getAppName().", version ".$this->getAppVersion()."<br>";
			echo LANG_INTERNALS_PROGRAM_ERROR_MESSAGE." : <b>".$this->getProgramErrorMessage()."</b> <br>";
			echo LANG_INTERNALS_PROGRAM_ERROR_MESSAGE." : <b>".$this->getUserErrorMessage()."</b> <br>";
			echo LANG_INTERNALS_PLEASE_TRY_AGAIN."<br>";
			echo "<br><br>";


		}

		if ($this->getQuitProgram())
		{
			die($this->getAppName().LANG_INTERNALS_STOPPED_HERE);
		}
	}


}
?>