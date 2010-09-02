<? 
class upload
{ 

        // Variables 
        var $fullFileName ;
        var $originalFileName ;
        var $newFileName ;
        var $fileExtension ;
        var $fileSize ;
        var $customerId ; 
        var $itemId ; 
        var $itemType ;
        var $tempUploadPath ;
        var $realUploadPath ; 
        var $maxUploadSize ;
        var $uploadedFileInfo;
        var $tmpFileName;

        /**
        * @return returns value of variable $fullFileName 
        * @desc getFullFileName : Getting value for variable $fullFileName 
        */
        function getFullFileName ()
        {
                return $this->fullFileName ;
        }

        /**
        * @param param : value to be saved in variable $fullFileName 
        * @desc setFullFileName : Setting value for $fullFileName 
        */
        function setFullFileName ($value)
        {
                $this->fullFileName  = $value;
        }

        /**
        * @return returns value of variable $originalFileName 
        * @desc getOriginalFileName : Getting value for variable $originalFileName 
        */
        function getOriginalFileName ()
        {
                return $this->originalFileName ;
        }

        /**
        * @param param : value to be saved in variable $originalFileName 
        * @desc setOriginalFileName : Setting value for $originalFileName 
        */
        function setOriginalFileName ($value)
        {
                $this->originalFileName  = $value;
        }

        /**
        * @return returns value of variable $newFileName 
        * @desc getNewFileName : Getting value for variable $newFileName 
        */
        function getNewFileName ()
        {
                return $this->newFileName ;
        }

        /**
        * @param param : value to be saved in variable $newFileName 
        * @desc setNewFileName : Setting value for $newFileName 
        */
        function setNewFileName ($value)
        {
                $this->newFileName  = $value;
        }

        /**
        * @return returns value of variable $fileExtension 
        * @desc getFileExtension : Getting value for variable $fileExtension 
        */
        function getFileExtension ()
        {
                return $this->fileExtension ;
        }

        /**
        * @param param : value to be saved in variable $fileExtension 
        * @desc setFileExtension : Setting value for $fileExtension 
        */
        function setFileExtension ($value)
        {
                $this->fileExtension  = $value;
        }

        /**
        * @return returns value of variable $fileSize 
        * @desc getFileSize : Getting value for variable $fileSize 
        */
        function getFileSize ()
        {
                return $this->fileSize ;
        }

        /**
        * @param param : value to be saved in variable $fileSize 
        * @desc setFileSize : Setting value for $fileSize 
        */
        function setFileSize ($value)
        {
                $this->fileSize  = $value;
        }

        /**
        * @return returns value of variable $customerId 
        * @desc getCustomerId : Getting value for variable $customerId 
        */
        function getCustomerId ()
        {
                return $this->customerId ;
        }

        /**
        * @param param : value to be saved in variable $customerId 
        * @desc setCustomerId : Setting value for $customerId 
        */
        function setCustomerId ($value)
        {
                $this->customerId  = $value;
        }

        /**
        * @return returns value of variable $itemId 
        * @desc getItemId : Getting value for variable $itemId 
        */
        function getItemId ()
        {
                return $this->itemId ;
        }

        /**
        * @param param : value to be saved in variable $itemId 
        * @desc setItemId : Setting value for $itemId 
        */
        function setItemId ($value)
        {
                $this->itemId  = $value;
        }

        /**
        * @return returns value of variable $itemType 
        * @desc getItemType : Getting value for variable $itemType 
        */
        function getItemType ()
        {
                return $this->itemType ;
        }

        /**
        * @param param : value to be saved in variable $itemType 
        * @desc setItemType : Setting value for $itemType 
        */
        function setItemType ($value)
        {
                $this->itemType  = $value;
        }

        /**
        * @return returns value of variable $tempUploadPath 
        * @desc getTempUploadPath : Getting value for variable $tempUploadPath 
        */
        function getTempUploadPath ()
        {
                return $this->tempUploadPath ;
        }

        /**
        * @param param : value to be saved in variable $tempUploadPath 
        * @desc setTempUploadPath : Setting value for $tempUploadPath 
        */
        function setTempUploadPath ($value)
        {
                $this->tempUploadPath  = $value;
        }

        /**
        * @return returns value of variable $realUploadPath 
        * @desc getRealUploadPath : Getting value for variable $realUploadPath 
        */
        function getRealUploadPath ()
        {
                return $this->realUploadPath ;
        }

        /**
        * @param param : value to be saved in variable $realUploadPath 
        * @desc setRealUploadPath : Setting value for $realUploadPath 
        */
        function setRealUploadPath ($value)
        {
                $this->realUploadPath  = $value;
        }

        /**
        * @return returns value of variable $maxUploadSize 
        * @desc getMaxUploadSize : Getting value for variable $maxUploadSize 
        */
        function getMaxUploadSize ()
        {
                return $this->maxUploadSize ;
        }

        /**
        * @param param : value to be saved in variable $maxUploadSize 
        * @desc setMaxUploadSize : Setting value for $maxUploadSize 
        */
        function setMaxUploadSize ($value)
        {
                $this->maxUploadSize  = $value;
        }
        
        
        /**
        * @return returns value of variable $uploadedFileInfo
        * @desc getUploadedFileInfo : Getting value for variable $uploadedFileInfo
        */
        function getUploadedFileInfo()
        {
                return $this->uploadedFileInfo;
        }

        /**
        * @param param : value to be saved in variable $uploadedFileInfo
        * @desc setUploadedFileInfo : Setting value for $uploadedFileInfo
        */
        function setUploadedFileInfo($value)
        {
                $this->uploadedFileInfo = $value;
        }
        

        function upload()
        {

        	       	
        }        
        
        function iniUploadedFileInfo($thisUploadedFileInfo)
        {
            $this->setUploadedFileInfo($thisUploadedFileInfo);  	
            $this->setTmpFileName($thisUploadedFileInfo['tmp_name']);
            $this->setOriginalFileName($thisUploadedFileInfo['name']);
        	$this->setFileSize($thisUploadedFileInfo['size']);
        	$this->setMaxUploadSize(MAX_UPLOAD_SIZE);

        	       	
        }
        
      /**
        * @return returns value of variable $tmpFileName
        * @desc getTmpFileName : Getting value for variable $tmpFileName
        */
        function getTmpFileName()
        {
                return $this->tmpFileName;
        }

        /**
        * @param param : value to be saved in variable $tmpFileName
        * @desc setTmpFileName : Setting value for $tmpFileName
        */
        function setTmpFileName($value)
        {
                $this->tmpFileName = $value;
        }

        
        
	function generateAndSetNewFileName()
	{
		$newFileName .= $this->getCustomerId();
		$newFileName .= "_";
		$newFileName .= $this->getItemId();
		$newFileName .= "_";
		$newFileName .= "1";
		
		$this->setNewFileName($newFileName);
	}
	
	
	function generateAndSetNewUploadPath()
	{
		
		if ($this->getItemType()==TYPE_ITEM_SELLER)
		{
			$newPath .= UPLOAD_SELLER_ITEMS_DIRECTORY;
		}
		else if ($this->getItemType()==TYPE_ITEM_BUYER)
		{
			$newPath .= UPLOAD_BUYER_ITEMS_DIRECTORY;
		}
		
		$newPath .= FILE_SEPARATOR.$this->getCustomerId();
		$newPath .= FILE_SEPARATOR.$this->getItemId();
		
	    $this->setRealUploadPath($newPath);
		
	}

	
	function generateAndSetNewTempUploadPath()
	{
		
		if ($this->getItemType()==TYPE_ITEM_SELLER)
		{
			$newPath .= UPLOAD_TEMP_SELLER_DIRECTORY;
		}
		else if ($this->getItemType()==TYPE_ITEM_BUYER)
		{
			$newPath .= UPLOAD_TEMP_BUYER_DIRECTORY;
		}
		
		
	    $this->setTempUploadPath($newPath);
		
	}	
	
	function mkDirRecursive($strPath, $mode)
	{
		if (is_dir($strPath)) return true;
		
		$pStrPath = dirname($strPath);
		if (!$this->mkDirRecursive($pStrPath, $mode)) return false;
		
		return mkdir($strPath);
	}	

	
	function extractAndSetExtension()
	{
		$nameTokens = explode(".",$this->getOriginalFileName());
		$numberOfTokens = count($nameTokens) - 1;
		
		$extensionName = $nameTokens[$numberOfTokens];
		
		$this->setFileExtension($extensionName);
		
		for ($a=0; $a<$numberOfTokens;$a++)
		{
			$originalFile .= $nameTokens[$a].".";
			
		}
		
		//$this->setOriginalFileName($originalFile);
	}
	
	
	function uploadAndMoveFile($fileName,$path)
	{
		$success = false;
	    
		if (move_uploaded_file($fileName,$path))
		{

				$success = true;
		}
		return $success;
	}
	
    function removeInvalidCaracter($var)
	{
		$a="ÁáÉéÍíÓóÚúÇçÃãÀàÂâÊêÎîÔôÕõÛû& -!@#$%¨&*()_+}=}{[]^~?/:;><,'´`\"\\º";
		$b="AaEeIiOoUuCcAaAaAaEeIiOoOoUue___________________________________";
		$var = strtr($var,$a,$b);
		$var = strtolower($var);
		return $var;
	}
	
	
	function moveFileFromDirectory($fileName,$sourceDirectory,$destinationDirectory)
	{
		$x = false;
		
		$oldFileName = $sourceDirectory.FILE_SEPARATOR.$fileName;
		$newFileName = $destinationDirectory.FILE_SEPARATOR.$fileName;
		
		echo "Old : $oldFileName<br>";
		echo "New : $newFileName<br>";
		
		if (@rename($oldFileName,$newFileName))
		{
				$x = true;
		}

		return $x;	
	}
	
	
	
	function doUpload()
	{
		// Generating New FileName
		$this->generateAndSetNewFileName();
		$this->generateAndSetNewUploadPath();
		$this->generateAndSetNewTempUploadPath();
		$this->extractAndSetExtension();
		
		$this->mkDirRecursive($this->getTempUploadPath(),"0777");
		
		$this->uploadAndMoveFile($this->getTmpFileName(),$this->getTempUploadPath().FILE_SEPARATOR.$this->getNewFileName().".".$this->getFileExtension());
		
		$this->mkDirRecursive($this->getRealUploadPath(),"0777");
		
	}
} 


?>