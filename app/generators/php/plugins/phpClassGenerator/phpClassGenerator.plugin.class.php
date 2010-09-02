<? 
include_once("/pcg/app/settings/genieConfiguration.inc.php");
?>
<?
class phpClassGenerator
{
	// Variables
	var $classVariables;		// comment for classVariables
	var $classFunctions;		// comment for classFunctions
	var $className;		// comment for className
	var $codeIdent;		// comment for codeIdent


	/**
	* @return returns value of variable $classVariables
	* @desc getClassVariables : Getting value for variable $classVariables
	*/
	function getClassVariables()
	{
		return $this->classVariables;
	}

	/**
	* @param param : value to be saved in variable $classVariables
	* @desc setClassVariables : Setting value for $classVariables
	*/
	function setClassVariables($value)
	{
		$this->classVariables = $value;
	}

	/**
	* @return returns value of variable $classFunctions
	* @desc getClassFunctions : Getting value for variable $classFunctions
	*/
	function getClassFunctions()
	{
		return $this->classFunctions;
	}

	/**
	* @param param : value to be saved in variable $classFunctions
	* @desc setClassFunctions : Setting value for $classFunctions
	*/
	function setClassFunctions($value)
	{
		$this->classFunctions = $value;
	}

	/**
	* @return returns value of variable $className
	* @desc getClassName : Getting value for variable $className
	*/
	function getClassName()
	{
		return $this->className;
	}

	/**
	* @param param : value to be saved in variable $className
	* @desc setClassName : Setting value for $className
	*/
	function setClassName($value)
	{
		$this->className = $value;
	}

	/**
	* @return returns value of variable $codeIdent
	* @desc getCodeIdent : Getting value for variable $codeIdent
	*/
	function getCodeIdent()
	{
		return $this->codeIdent;
	}

	/**
	* @param param : value to be saved in variable $codeIdent
	* @desc setCodeIdent : Setting value for $codeIdent
	*/
	function setCodeIdent($value)
	{
		$this->codeIdent = $value;
	}

	function phpClassGenerator($arguments)
	{

		$this->setClassName($arguments['className']);
		$this->setClassVariables($arguments['variables']);
		$this->setClassFunctions($arguments['functions']);
		$this->setCodeIdent("\t\t");
	}


	function generate()
	{

		$code = $this->getPHPClass();

		return $code;

	}

	/**
	* @return a String containing the getter function
	* @param fieldName fieldName to construct Getter for
	* @desc This function constructs a getter function for a fieldName in a class
	*/
	function constructGetter($fieldName)
	{

		$getterFunction = "";
		$getterFunction .= $this->buildCommentsForFunction("get".ucfirst($fieldName),$this->getCodeIdent(),"Getting value for variable $".$fieldName,"y","returns value of variable $".$fieldName,"n");


		$getterFunction .= $this->getCodeIdent().
		"function get".ucfirst($fieldName)."()\n".
		$this->getCodeIdent()."{\n".
		$this->getCodeIdent().$this->getCodeIdent()."return \$this->".$fieldName.";\n".
		$this->getCodeIdent()."}\n\n";

		return $getterFunction;

	}

	/**
	* @return a String containg the setter function
	* @param fieldName fieldName to construct a Setter function for
	* @desc This function constructs a setter function for a fieldName in a class
	*/
	function constructSetter($fieldName)
	{

		$setterFunction = "";
		$setterFunction .= $this->buildCommentsForFunction("set".ucfirst($fieldName),$this->getCodeIdent(),"Setting value for $".$fieldName,"n","","y","value to be saved in variable $".$fieldName);

		$setterFunction .= $this->getCodeIdent().
		"function set".ucfirst($fieldName)."(\$value)\n".
		$this->getCodeIdent()."{\n".
		$this->getCodeIdent().$this->getCodeIdent()."\$this->".$fieldName." = \$value;\n".
		$this->getCodeIdent()."}\n\n";

		return $setterFunction;
	}


	/**
	* @return a String containing the comment block
	* @param functionName name of the function that we are building comment for
	* @param indent identation used to generate the comment
	* @param description The description to put in the definition line of the function
	* @param parameters Parameters passed to the function
	* @param haveReturn does the function being built have a return value? takes "y" or "n", "y" by default
	* @desc This function builds the commments Block to be put on top of functions
	*/
	function buildCommentsForFunction($functionName,$indent,
	$description="put description here... ",
	$haveReturn="y",
	$returnDescription="put return description here..",
	$haveParameter="y",
	$parameterDescription=" parameter passed to function",
	$numberOfParameters="1")
	{
		$lineSeparator = "\n";

		$commentString = "";
		$commentString .= $indent."/**".$lineSeparator;

		if ($haveReturn=="y")
		{
			$commentString .= $indent."* @return ".$returnDescription.$lineSeparator;
		}

		if ($haveParameter=="y")
		{
			if ($numberOfParameters==1)
			{
				$commentString .= $indent."* @param param : ".$parameterDescription.$lineSeparator;

			}
			else
			{
				for ($a=0;$a<count($parameters);$a++)
				{
					$commentString .= $indent."* @param ".$parameters[$a]." : parameter passed to function".$lineSeparator;
				}
			}
		}
		$commentString .= $indent."* @desc ".$functionName ." : ".$description.$lineSeparator;
		$commentString .= $indent."*/".$lineSeparator;

		return $commentString;
	}


	/**
	* @return a string containing the class variable declaration
	* @param fieldName name of the class variable
	* @desc this function builds the variable construct for a php class
	*/
	function constructVariable($fieldName)
	{

		$variableString = "";
		//$variableString = $this->getCodeIdent()."// ".$fieldName." field from table \n";
		$variableString .= $this->getCodeIdent();

		if (GENERATE_FOR_PHP5)
		{
			$variableString .= "private ";
		}
		else
		{
			$variableString .= "var ";
		}

		$variableString .="$".$fieldName.";\n";

		return $variableString;
	}


	/**
	* @return a String containing a function definition for a php Class
	* @param functionName the name of the functions
	* @desc This function constructs a function to use in php class
	*/
	function constructFunction($functionName)
	{

		$function = "";

		$function .= $this->buildCommentsForFunction
		($functionName,
		$this->getCodeIdent(),
		" put function description here ... "
		);


		$function .= $this->getCodeIdent().
		"function ".$functionName."()\n".
		$this->getCodeIdent()."{\n".
		$this->getCodeIdent().$this->getCodeIdent()."// Write Function Code Here\n\n\n".
		$this->getCodeIdent()."}\n\n";

		return $function;

	}


	function constructClone()
	{
		$code = "";
		$code .= $this->getCodeIdent()."// This function will take a similar object and populate itself with it\n";
		$code .= $this->getCodeIdent().
		"function cloneInfo(\$this".ucfirst($this-> getClassName()).")\n".
		$this->getCodeIdent()."{\n\n";


		$variables = $this->getClassVariables();

		for ($a=0;$a<count($variables);$a++)
		{
			$code .= $this->getCodeIdent().$this->getCodeIdent()."\$this->set".ucfirst($variables[$a])."(\$this".ucfirst($this->getClassName())."->get".ucfirst($variables[$a])."());\n";


		}



		$code .= $this->getCodeIdent()."}\n\n";

		return $code;
	}

	function constructEmpty()
	{
		$code = "";
		$code .= $this->getCodeIdent()."// This function will clear all the values of variables in this class\n";
		$code .= $this->getCodeIdent().
		"function emptyInfo()\n".
		$this->getCodeIdent()."{\n\n";


		$variables = $this->getClassVariables();

		for ($a=0;$a<count($variables);$a++)
		{
			$code .= $this->getCodeIdent().$this->getCodeIdent()."\$this->set".ucfirst($variables[$a])."(\"\");\n";


		}



		$code .= $this->getCodeIdent()."}\n\n";

		return $code;
	}



	function constructConstructor()
	{
		$code = "";
		$code .= $this->getCodeIdent()."// This is the constructor for this class\n";
		$code .= $this->getCodeIdent()."// Initialize all your default variables here\n";
		$code .= $this->getCodeIdent()."function ";

		if (GENERATE_FOR_PHP5)
		{
			$code .= "__construct()\n";
		}
		else
		{
			$code .= $this->getClassName()."()\n";
		}

		$code .=	$this->getCodeIdent()."{\n\n";


		$variables = $this->getClassVariables();

		for ($a=0;$a<count($variables);$a++)
		{
			$code .= $this->getCodeIdent().$this->getCodeIdent()."\$this->set".ucfirst($variables[$a])."(\"\");\n";
		}



		$code .= $this->getCodeIdent()."}\n\n";

		return $code;
	}

	function constructDestructor()
	{
		$code = "";
		$code .= $this->getCodeIdent()."// This is the destructor for this class\n";
		$code .= $this->getCodeIdent()."// Do whatever needs to be done when object no longer needs to be used\n";
		$code .= $this->getCodeIdent()."function ";

		if (GENERATE_FOR_PHP5)
		{
			$code .= "__destruct()\n";
		}
		else
		{
			$code .= "destruct".ucfirst($this->getClassName())."()\n";
		}

		$code .=	$this->getCodeIdent()."{\n\n";


		$code .= $this->getCodeIdent()."}\n\n";

		return $code;
	}	
	
	/**
	* @return a String containing a php Class
	* @desc This function will build a php Class with getters and setters based on the variables set in the phpObject.
	*/
	function constructPHPClass()
	{

		$phpObject = "class ".$this->getClassName()."\n".
		"{ \n\n";

		$phpObject .= $this->getCodeIdent()."// Variables \n";

		$variablesArray = $this->getClassVariables();
		$functionsArray = $this->getClassFunctions();

		for ($i=0;$i<count($variablesArray);$i++)
		{
			$phpObject .= $this->constructVariable($variablesArray[$i]);
		}

		$phpObject .= "\n\n";

		for ($i=0;$i<count($variablesArray);$i++)
		{
			$phpObject .= $this->constructGetter($variablesArray[$i]);
			$phpObject .= $this->constructSetter($variablesArray[$i]);
		}

		$phpObject .= $this->constructConstructor();

		if (GENERATE_FOR_PHP5)
		{
		$phpObject .= $this->constructDestructor();		   	
		}
		
		for ($i=0;$i<count($functionsArray);$i++)
		{
			$phpObject .= $this->constructFunction($functionsArray[$i]);

		}


		//$phpObject .= $this->constructClone();
		$phpObject .= $this->constructEmpty();

		$phpObject .= "} \n";

		return $phpObject;
	}

	function getPHPClass()
	{
		$code = $this->constructPHPClass();

		$thisPhpClass = "<?\n".$code."\n?>";


		return $thisPhpClass;
	}


}

?>