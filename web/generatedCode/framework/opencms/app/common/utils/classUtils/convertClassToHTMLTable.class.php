<? 
class convertClassToHTMLTable
{
	
	// Variables
	// classObject field from table
	var $classObject;
	
	
	/**
	* @return returns value of variable $classObject
	* @desc getClassObject : Getting value for variable $classObject
	*/
	function getClassObject()
	{
		return $this->classObject;
	}
	
	/**
	* @param param : value to be saved in variable $classObject
	* @desc setClassObject : Setting value for $classObject
	*/
	function setClassObject($value)
	{
		$this->classObject = $value;
	}
	
	
	/**
	* @return put return description here..
	* @param param :  parameter passed to function
	* @desc generateHTML :  put function description here ...
	*/
	function generateHTML()
	{
		$thisObject = $this->getClassObject();
		
		
		// if object is not an array
		if (!is_array($thisObject))
		{
			
			
			$this->generateHTMLTableFromObject($thisObject);
			
		} // end of isArray
		else
		{
			
			
			for ($x=0;$x<count($thisObject);$x++)
			{
				$thisArrayObject = $thisObject[$x];
				
				
				$thisClassConverter = new convertClassToHTMLTable();
				$thisClassConverter->setClassObject($thisArrayObject);
				$thisClassConverter->generateHTML();
			}
			
		}
	}
	
	function generateHTMLTableFromObject($thisObject)
	{
		$className = get_class($thisObject);
		
		if ($className==false)
		{
			echo "<br><br><font color=red><b>ERROR : Object pass to Class Converter is not an object. Therefore converter is halting. ! </b></font><br><br>";
		}
		else
		{
			
			
			$classVariables = get_class_vars($className);
			$tableLabels = array_keys($classVariables);
			
			echo "<font color=#993300><b> ".ucfirst($className)." Object</b></font>\n\n";
			
			echo "<table>\n\n";
			
			for ($a=0;$a<count($tableLabels);$a++)
			{
				$functionToCall = "get".ucfirst($tableLabels[$a]);
				$data = $thisObject->$functionToCall();
				
				echo "\t<tr>\n";
				echo "\t\t<td align=right valign=top bgcolor=#CCFFCC>\n";
				echo "\t\t\t<font color=#003399> ";
				echo ucfirst($tableLabels[$a]);
				echo " &nbsp; :&nbsp;</font>\n";
				echo "\t\t</td>\n";
				echo "\t\t<td bgcolor=#CCCCCC>\n";
				
				
				
				if ((get_class($data)!=false) || (is_array($data)))
				{
					
					
					$thisNewObjectConverter = new convertClassToHTMLTable();
					$thisNewObjectConverter->setClassObject($data);
					$thisNewObjectConverter->generateHTML();
				}
				else
				{
					
					
					if ($data=="") { $data = "_"; }
					
					
					echo "\t\t\t<font color=#000000> &nbsp;&nbsp;";
					echo $data;
					echo "</font>\n";
					
					
					
				}
				echo "\t\t</td>\n";
				echo "\t</tr>\n";
				
			}
			
			echo "</table>\n\n";
			
			
		} // end of else variable passed is not object
		
	}
	
}


?> 