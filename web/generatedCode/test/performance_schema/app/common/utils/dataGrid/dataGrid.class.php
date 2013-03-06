<?
class dataGrid
{

	function displayHorizontalHTMLDataGrid($tableName,$dataArray,$fieldsToShow,$checkers="")
	{

		echo "\n\n<TABLE WIDTH=\"100%\" CELLSPACING=\"0\" CELLPADDING=\"2\" BORDER=\"1\" bordercolor=\"#9999CC\">\n";
		echo $this->getTRStartCode();
		echo $this->getTDStartCode();
		echo "<b>No</b>";
		echo $this->getTDStopCode();

		for ($x=0;$x<count($fieldsToShow);$x++)
		{
			$fieldLabel = "LABEL_".strtoupper($tableName)."_".strtoupper($fieldsToShow[$x]);

			echo $this->getTDStartCode();
			echo "<b>";
			eval("echo $fieldLabel;");
			echo "</b>";
			echo $this->getTDStopCode();

		}
		echo $this->getTRStopCode();

		for ($a=0;$a<count($dataArray);$a++)
		{

			$thisDataInfo = $dataArray[$a];

			$b = $a + 1;

			if (($a%2)==0) { $bgColor = ROW_COLOR1; } else { $bgColor = ROW_COLOR2; }

			echo $this->getTRStartCode();

			echo $this->getTDStartCode();
			echo $b.".";
			echo $this->getTDStopCode();

			for ($x=0;$x<count($fieldsToShow);$x++)
			{
				if ($checkers==TRUE_PARM)
				{
					if ((($x+$a)%2)==0) { $bgColor = ROW_COLOR1; } else { $bgColor = ROW_COLOR2; }
				}

				$getStatement = "\$thisDataInfo->get".ucfirst($fieldsToShow[$x])."()";

				echo $this->getTDStartCode("",$bgColor);
				eval("echo $getStatement;");
				echo $this->getTDStopCode();

			} // end for x

			echo $this->getTRStopCode();

		} // end for a

		echo "</TABLE>\n\n";
	}


	function displayVerticalHTMLDataGrid($tableName,$dataArray,$fieldsToShow)
	{
		
		echo "<TABLE CELLPADDING=\"0\" CELLSPACING=\"4\">";
		
		for ($a=0;$a<count($dataArray);$a++)
		{
			if (($a%2)==0) { $bgColor = ROW_COLOR1; } else { $bgColor = ROW_COLOR2; }
						
				echo $this->getTRStartCode($bgColor);
				echo $this->getTDStartCode("Left");
							
			$thisDataInfo = $dataArray[$a];

			$b = $a + 1;



			$numberOfFields = count($fieldsToShow);

			echo "\n<TABLE CELLSPACING=\"0\" CELLPADDING=\"2\" BORDER=\"0\"  bordercolor=\"#9999CC\">\n";

			echo "<tr><td colspan=\"".$numberOfFields."\" height=\"10\"><b>".strtoupper($tableName)." ".$b."</b></td></tr>\n";

			for ($x=0;$x<count($fieldsToShow);$x++)
			{
				$fieldLabel = "LABEL_".strtoupper($tableName)."_".strtoupper($fieldsToShow[$x]);

				$getStatement = "\$thisDataInfo->get".ucfirst($fieldsToShow[$x])."()";

				echo $this->getTRStartCode();
				echo $this->getTDStartCode("Right");
				echo "<b>";
				eval("echo $fieldLabel;");
				echo " : </b>";
				echo $this->getTDStopCode();

				echo $this->getTDStartCode();
				eval("echo $getStatement;");
				echo $this->getTDStopCode();

				echo $this->getTRStopCode();
			} // end for x

			echo "</TABLE>\n";

				echo "</td>";

				echo $this->getTRStopCode();			
			
		} // end for a
		echo "</TABLE>\n";
		
	}

	function getTRStartCode($bgColor="",$minHeight="")
	{
		$code = "";
		$code .= "\t<TR VALIGN=\"TOP\"";


		if ($bgColor!="")
		{
			$code .= " BGCOLOR = \"".$bgColor."\"";
		}

		if ($minHeight!="")
		{
			$code .= " HEIGHT = \"".$minHeight."\"";
		}

		$code .= ">\n";

		return $code;
	}

	function getTRStopCode()
	{
		$code = "";
		$code .= "\t</TR>\n";

		return $code;
	}

	function getTDStartCode($align="",$bgColor="")
	{
		$code = "";
		$code .= "\t\t<TD ";
		if ($align!="")
		{
			$code .= " ALIGN = \"".$align."\"";
		}

		if ($bgColor!="")
		{
			$code .= " BGCOLOR = \"".$bgColor."\"";
		}



		$code .= ">";

		return $code;
	}

	function getTDStopCode()
	{
		$code = "";
		$code .= "&nbsp;</TD>\n";

		return $code;
	}

}

?>