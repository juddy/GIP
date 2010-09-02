<?


      echo "File <b><font color=red>$filename_name</font></b> has been uploaded for processing.<br> File Size = <font color=red>$filename_size</font> bytes, File Type=<font color=red>$filename_type</font><br><br>";
      if ($filename != "")
      {
           copy("$filename", "./$filename_name") or die("Couldn't copy the file!");
      }

      $filenametouse = "./$filename_name";


//$recorddelimeter=ltrim(rtrim(stripslashes($recorddelimeter)));
//$fielddelimeter=ltrim(rtrim(stripslashes($fielddelimeter)));


     echo("File name : <b>$filenametouse</b> <br>");
     echo("Record Delimeter : <b>$recorddelimeter </b><br>");
     echo("Field Delimeter : <b>$fielddelimeter </b><br>");

$fd = fopen ($filenametouse, "r");

// Read entire file into an array
$wholefile = fread ($fd, filesize ($filenametouse));

fclose ($fd);


    // Explode buffer by record Delimeter - each token is one record
    $recordtokens = explode($recorddelimeter,$wholefile);
    //$recordtokens = explode("\n",$wholefile);

    // Getting FieldNames  
	$fieldnames =  explode($fielddelimeter,$recordtokens[0]);

	for($a=0; $a<count($fieldnames); $a++) {

		echo("$fieldnames[$a] <br>");
		
	}

    echo("<hr>");


   // Go through each record
	for($i=1; $i<count($recordtokens); $i++) 
	{
		 // break into fields
         $fieldtokens= explode($fielddelimeter,$recordtokens[$i]);

         for($j=0; $j<count($fieldtokens); $j++) 
		{
        		 echo(" $fieldtokens[$j] ,");         	
        }

		 echo("<hr>");

    }

?>
