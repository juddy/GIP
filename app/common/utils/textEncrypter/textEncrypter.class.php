<? include_once("//var/www/gip/app/settings/gipConfiguration.inc.php"); ?>
<? include_once(CLASS_ERROR_HANDLER); ?>
<? 
class textEncrypter
{

	    var $salt;
	    var $separator;
	        
        /**
        * @return returns value of variable $salt 
        * @desc getSalt : Getting value for variable $salt 
        */
        function getSalt ()
        {
                return $this->salt ;
        }

        /**
        * @param param : value to be saved in variable $salt 
        * @desc setSalt : Setting value for $salt 
        */
        function setSalt ($value)
        {
                $this->salt  = $value;
        }
        
        /**
        * @return returns value of variable $separator
        * @desc getSeparator : Getting value for variable $separator
        */
        function getSeparator()
        {
                return $this->separator;
        }

        /**
        * @param param : value to be saved in variable $separator
        * @desc setSeparator : Setting value for $separator
        */
        function setSeparator($value)
        {
                $this->separator = $value;
        }        
        
        function textEncrypter()
        {
        	$this->setSalt("xyz");
        	$this->setSeparator("|||");
        }
        	    
        /**
        * @return put return description here..
        * @param param :  parameter passed to function
        * @desc encode :  put function description here ... 
        */
        function encode($string)
        {
                // Write Function Code Here
                
                $string = $string.$this->getSeparator().$this->getSalt();
                $string = base64_encode($string);
                
                return $string;
        }	
	

        /**
        * @return put return description here..
        * @param param :  parameter passed to function
        * @desc decode :  put function description here ... 
        */
        function decode($string)
        {
                // Write Function Code Here

                $string = base64_decode($string);
                $tokens = explode($this->getSeparator(),$string);
                
                if ($tokens[1]!=$this->getSalt())
                {
                   	$thisError = new errorHandler();
			        $thisError->setUserErrorMessage("Data Tampering Detected !! Administrator has been notified ! ");
			        $thisError->setProgramErrorMessage("POST DATA TAMPERING -->".$string);
			        $thisError->setErrorPage($_SERVER['PHP_SELF']);
			        $thisError->setEmailAdmin(false);
			        $thisError->setQuitProgram(true);
			        $thisError->handleError();
                }
 
                
                return $tokens[0];

        }        
        
}


?>
