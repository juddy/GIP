<?

Class EasyUpload 
{
	var $pathFile;	
	var $originalFileName;	
	var $SO;	
	var $sizeMaxFileName = 20;
	var $extensionFile;
	var $nameFile;

	/*
		Constructor of the Class
		Construtor da Classe
	*/
	function ClassUpload()
	{
	}


    /*
		Seta a variável de instância "$pathFile", que contém o local físico do servidor remoto onde o arquivo será salvo.
		Arrow the instance variable "$pathFile", that it contains the physical place of the remote server where the archive will be saved.
    */	
	function setPath($pathFile)
	{
		$this->pathFile = $pathFile;
	}


	/*
		Seta um tamanho máximo para o nome do arquivo a ser gravado no servidor.
		Arrow a maximum size for the name of the archive to be recorded in the server.
	*/
	function setSizeMaxFileName($sizeMaxFileName)
	{
		$this->sizeMaxFileName = $sizeMaxFileName;
	}		


    /*
		Seta o nome do arquivo que será gravado no servidor.
		Arrow the name of the archive that will be recorded in the server.
    */	
	function setOriginalFileName($originalFileName)
	{
		$this->originalFileName = $originalFileName;
	}


	/*
		Retorna o nome do arquivo original já formatado
		It returns the name from the formatted original archive already.
	*/
	function getOriginalFileName()
	{
		return $this->originalFileName;
	}	


	/*
		Retorna apenas o nome do arquivo formatado e sem a extensão
		It returns only the name from the formatted archive and without the extension
	*/
	function getNameFile()
	{
		return $this->nameFile;
	}

	/*
        Gera um número randômico para ser concatenado com o nome do arquivo.
		It generates a random number to be concatenated with the name of the archive.
	*/
	function RandomName($nameLength) {
	    $name = "";
	    for ($index = 1; $index <= $nameLength; $index++) 
		{
			 mt_srand((double) microtime() * 1000000);
	         $randomNumber = mt_rand(1, 62);
	         if ($randomNumber < 11)
	              $name .= Chr($randomNumber + 48 - 1); // [ 1,10] => [0,9]
	         else if ($randomNumber < 37)
	              $name .= Chr($randomNumber + 65 - 10); // [11,36] => [A,Z]
	         else
	              $name .= Chr($randomNumber + 97 - 36); // [37,62] => [a,z]
	    }
		$name = $name."_".time();
		$this->formatNameFile();
		$this->formatExtensionFile();
		$this->originalFileName = $this->nameFile."_".$name.".".$this->extensionFile;	    
	}


	/*
		Retira os possíveis caracteres inválidos do nome do arquivo e os converte para caracteres minúsculas
		It removes the possible invalid characters of the name of the archive and it converts them for very small characters
	*/
	function InvalidCaracter($var)
	{
		$a="ÁáÉéÍíÓóÚúÇçÃãÀàÂâÊêÎîÔôÕõÛû& -!@#$%¨&*()_+}=}{[]^~?/:;><,'´`\"\\º";
		$b="AaEeIiOoUuCcAaAaAaEeIiOoOoUue___________________________________";		
		$var = strtr($var,$a,$b);				
		$var = strtolower($var);	
		return $var;
	}


	/*
		Seta a variável de instância do nome do arquivo
		Arrow the variable of instance of the name of the archive
	*/	
	function formatNameFile()
	{
		$originalFileName = $this->originalFileName;	
		$posDivisionNameExtension = strpos($originalFileName,".");
	    $nameFile  = substr($originalFileName,0,$posDivisionNameExtension);	
		$nameFile  = $this->InvalidCaracter($nameFile);				
		$this->nameFile = $nameFile;
	}


	/*
		Seta a variável de instância da extensão do arquivo
		Arrow the 0 variable of instance of the extension of the archive
	*/
	function formatExtensionFile()
	{
		$originalFileName = $this->originalFileName;
		$invertFile = strrev($originalFileName);
		$posDivisionNameExtension = strpos($invertFile,".");
	    $extensionFile = substr($invertFile,0,$posDivisionNameExtension);
		$extensionFile = strrev($extensionFile);	
		$extensionFile = $this->InvalidCaracter($extensionFile);
		$this->extensionFile = $extensionFile;
	}	


	/*
		Retorna apenas a extensão do arquivo 
		It returns only the extension from the archive
	*/
	function getExtensionFile()
	{
		return $this->extensionFile;
	}		

	/*
		Seta os valores do nome e da extensão, caso não queira formatar	o nome do arquivo.
		Arrow the values of the name and the extension, in case that it does not want to format the name of the archive.
	*/
	function setNameAndExtension()
	{
		$this->formatNameFile();
		$this->formatExtensionFile();	
	}

	/*
		Formata o "$originalFileName" para caractere minúsculos e caso o nome do arquivo passado tenha caracteres especiais o substituam.
		E caso o seu tamanho máximo seja setado pelo usuário é feito o truncamento.

		It formats "$originalFileName" for character the very small ones and case the name of the last archive has characters special substitutes it. 
		E case its maximum size is setado by the user is made the truncation.
	*/
	function formatOriginalFileName()
	{
		$this->formatNameFile();
		$this->formatExtensionFile();
		$sizeFileName = strlen($this->nameFile);		
		if ($sizeFileName>$this->sizeMaxFileName)
		{ 
	         $this->nameFile = substr($this->nameFile,0,$this->sizeMaxFileName); 
		}
		$this->originalFileName = $this->nameFile. "." .$this->extensionFile;
	}


	/*
		Seta o Sistema Operacional (WINDOWS, UNIX/LINUX)
		Arrow the Operational system (WINDOWS, UNIX/LINUX)		
	*/
	function setSO($SO)
	{
		$this->SO = $SO;
	}


	/*
		Configura a divisão do Diretório caso seja LINUX/UNIX ou WINDOWS
		It configures the division of the Directory case is LINUX/UNIX or WINDOWS
	*/
	function getDivisionDIR()
	{
		$SO = $this->SO;
		$SO = strtolower($SO);
		switch ($SO)
		{
			case "w":
				$divisionDir = "\\";
				break;
			case "l":
				$divisionDir = "/";
				break;
			case "u":
				$divisionDir = "/";
				break;				
		}				
		
		return $divisionDir;
	}


	/*
		Verifica se já existe um arquivo no servidor com o mesmo nome do arquivo que se deseja passar como parâmetro.
		It verifies if already it the same exists an archive in the server with name of the archive that if it desires to pass as parameter.
	*/
	function isFileExist($file)
	{
		$x;
		$file = $this->originalFileName;
		$openDir = @opendir($this->pathFile);
		while (($filesServer=@readdir($openDir))!=false)
		{
			if (is_file($this->pathFile.$this->getDivisionDIR().$filesServer)):
				if ($filesServer==$file)
				{
					$x = true;
					break;			
				}
				else
				{
					$x = false;
				}
			else:
				$x = false;
			endif;
		
		}
		@closedir($openDir);
		return $x;
	}


	/*
		Realiza o Upload pela função copy()
		Carries through the Upload for the function	Copy().
	*/
	function uploadCopyFile($file)
	{
		$x = false;
		$pathUpload = $this->pathFile.$this->getDivisionDIR().$this->originalFileName;
		$openDir = @opendir($this->pathFile);
 		if (@copy($file,$pathUpload)):
			if (@is_uploaded_file($file))
			{
				$x = true;
			}
		endif;
		@closedir($openDir);
		return $x;
	}
	
	/*
		Realiza o Upload pela função move_uploaded_file()
		Carries through the Upload for the function	Move_uploaded_file().
	*/
	function uploadMoveFile($file)
	{
		$x = false;
		$pathUpload = $this->pathFile.$this->getDivisionDIR().$this->originalFileName;
 		if (@move_uploaded_file($file,$pathUpload)):
			if (@is_uploaded_file($file))
			{
				$x = true;
			}
		endif;
		return $x;
	}	

}
?>