<?
class htmlFormElementBuilder
{
	
	
	function printFormElemenTypeList()
	{
		
		echo "<option value=text>TextField</option>";
		echo "<option value=password>Password</option>";
		echo "<option value=textarea>TextArea</option>";
		echo "<option value=check>CheckBox</option>";
		echo "<option value=radio>RadioButton</option>";
		echo "<option value=list>ListMenu</option>";
		echo "<option value=multiple>MultipleList</option>";
		echo "<option value=file>FileUpload</option>";
		echo "<option value=none>None</option>";
	}
	
	function buildAndPrintFormElement($elementType,$fieldName,$defaultValue="",$fieldSize="")
	{
		global $stringToAppendToField;
		
		if ($fieldSize=="") { $fieldSize = "20"; }
		
		$output = "";
		
		switch ($elementType) {
			case "text":
			$output=$output."\n\t<input type=\"text\" name=\"".$fieldName.$stringToAppendToField."\" size=\"".$fieldSize."\" value=\"".$defaultValue."\">\n";
			break;
			case "password":
			$output=$output."\n\t<input type=\"password\" name=\"".$fieldName.$stringToAppendToField."\" size=\"".$fieldSize."\" value=\"".$defaultValue."\">\n";
			break;
			case "textarea":
			$output=$output."\n\t<textarea name=\"".$fieldName.$stringToAppendToField."\" wrap=\"VIRTUAL\" cols=\"".$fieldSize."\" rows=\"4\">".$defaultValue."</textarea>\n";
			break;
			case "check":
			$output=$output."\n\t<input type=\"checkbox\" name=\"".$fieldName.$stringToAppendToField."\" value=\"\" checked>\n";
			$output=$output."\t<input type=\"checkbox\" name=\"".$fieldName.$stringToAppendToField."\" value=\"\">\n";
			break;
			case "radio":
			$output=$output."\n\t<input type=\"radio\" name=\"".$fieldName.$stringToAppendToField."\" value=\"\" checked>\n";
			$output=$output."\t<input type=\"radio\" name=\"".$fieldName.$stringToAppendToField."\" value=\"\">\n";
			break;
			case "list":
			$output=$output."\n\t<select name=\"".$fieldName.$stringToAppendToField."\">\n";
			$output=$output."\t\t<option value=\"1\" selected>option1</option>\n";
			$output=$output."\t\t<option value=\"2\">option2</option>\n";
			$output=$output."\t</select>\n";
			break;
			case "multiple":
			$output=$output."\n\t<select name=\"".$fieldName.$stringToAppendToField."\" size=\"3\" multiple>\n";
			$output=$output."\t\t<option value=\"1\" selected>option1</option>\n";
			$output=$output."\t\t<option value=\"2\">option2</option>\n";
			$output=$output."\t</select>\n";
			break;
			case "file":
			$output=$output."\n\t<input type=\"file\" name=\"".$fieldName.$stringToAppendToField."\">\n";
			break;
		}
		
		
		return $output;
		
	}
	
	
}

?> 