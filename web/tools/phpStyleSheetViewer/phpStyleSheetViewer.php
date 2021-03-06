<? 
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CONFIG_FILE);
include_once(INC_SUPERHEADER);
?>
<?

// phpStyleSheetViewer 1.0 by Nilesh Dosooye (opensource@weboot.com)
// Licensed under the GPL License
// http://nilesh.dosooye.com
//
// --- GNU General Public License Disclamer ---
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.


$sampletext="This is my sample Text for this Class ";
$version = "1.0";

function dealWithHtml($htmlTag)
{

	global $sampletext;

	$texttouse=$sampletext."(<b>$htmlTag</b>)";

	$htmlTag=strtoupper(rtrim(ltrim($htmlTag)));

	if ($htmlTag=="H1")
	{
		echo "<H1>$texttouse</H1>";
	}
	elseif ($htmlTag=="H2")
	{
		echo "<H2>$texttouse</H2>";
	}
	elseif ($htmlTag=="H3")
	{
		echo "<H3>$texttouse</H3>";
	}
	elseif ($htmlTag=="H4")
	{
		echo "<H4>$texttouse</H4>";
	}
	elseif ($htmlTag=="H5")
	{
		echo "<H5>$texttouse</H5>";
	}
	elseif ($htmlTag=="H6")
	{
		echo "<H6>$texttouse</H6>";
	}
	elseif ($htmlTag=="TR")
	{
		echo "<TABLE WIDTH=400><TR>$texttouse</TR></TABLE>";
	}
	elseif ($htmlTag=="TD")
	{
		echo "<TABLE><TR><TD>$texttouse</TD></TR></TABLE>";
	}
	elseif ($htmlTag=="P")
	{
		echo "<P>$texttouse </P>";
	}
	elseif ($htmlTag=="LI")
	{
		echo "<LI>$texttouse</LI>";
	}
	elseif ($htmlTag=="OL")
	{
		echo "<UL><OL>$texttouse</OL></UL>";
	}
	elseif ($htmlTag=="UL")
	{
		echo "<UL>$texttouse</UL>";
	}
	elseif ($htmlTag=="TEXTAREA")
	{
		echo "<FORM><TEXTAREA>$texttouse</TEXTAREA></FORM><br>";
	}
	elseif ($htmlTag=="INPUT")
	{
		echo "<FORM><INPUT TYPE=text NAME=inputbo VALUE=\"$texttouse\"></FORM><br>";
	}
	elseif ($htmlTag=="BODY")
	{
		echo "<BODY>$texttouse</BODY><br><br>";
	}
	elseif (substr($htmlTag,0,1)=="A")
	{
		echo "<A HREF=\"".$_SERVER['PHP_SELF']."\">$texttouse</A><br>";
	}
	else
	{
		echo "<b>$htmlTag --></b> No sample available for this tag yet.<br><br>";
	}



}



function parsesheet($sheet)
{

	global $sampletext;
	$html=array("P","HTML","BODY","TABLE","TD","TR","BR","INPUT","FORM","TEXTAREA","H1","H2","H3","H4","H5","H6","HR","A","IMG","LI","UL","OL","A:LINK","A:VISITED","A:HOVER");

	$tokens=explode("\n",$sheet);

	for ($a=0;$a<count($tokens);$a++)
	{
		if (preg_match_all( '/\w.*?{/', $tokens[$a], $tags))
		{
			foreach ($tags[0] as $styleElement)
			{

				$styleElement=str_replace("{", "", "$styleElement");
				$styleElement=str_replace(".", "", "$styleElement");

				if (in_array (strtoupper(rtrim(ltrim($styleElement))), $html))
				{
					dealWithHtml($styleElement);
				}
				else
				{
					echo "<span class=\"$styleElement\">$sampletext (<b>$styleElement</b>)</span><br><br>";
				}

			}
		}

	}
}



if (isset($_REQUEST['Submit']))
{

	$type = $_REQUEST['type'];
	$userFile = $_REQUEST['userfile'];
	$url = $_REQUEST['url'];

	if ($type=="file")
	{

		$fp = @fopen($userfile,"r");
		if ($fp)
		{
			while(!feof($fp))
			{
				$stylesheet = $stylesheet.fread($fp, 1024);
			}

			fclose ($fp);

		}
		else
		{
			echo "<H3>The uploaded file could not be read !</H3>";
		}

	}
	else if ($type=="url")
	{

		$fp = @fopen($url,"r");
		if ($fp)
		{
			while(!feof($fp))
			{
				$stylesheet = $stylesheet.fread($fp, 1024);
			}

			fclose ($fp);

		}
		else
		{
			echo "<H3>The url $url is wrong or does not exist !</H3>";
		}


	}
	else
	{
		$stylesheet = $_REQUEST['stylesheet'];
	}


	echo"<table><tr valign=baseline><td><h3>phpStyleSheetViewer $version </h3></td><td><a href=\"http://nilesh.dosooye.com\">by Nilesh Dosooye</a></td></tr></table>";
	echo"<a href=\"index.php\">Back to Index</a><hr>";
	echo"<style type=\"text/css\"> $stylesheet </style>";


	parsesheet($stylesheet);

	$today=date("Y-m-d");


	echo "<br><br><font size=\"-1\" color=#003399><b>This style sheet preview has been generated by phpStyleSheetViewer on $today.</b></font><br>";
}
else
{

?> 


<html>
<head>
<title>phpStyleSheetViewer <? echo $version; ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">

<table><tr valign=baseline><td><h2>phpStyleSheetViewer <? echo $version; ?> </h2></td><td><a href="http://nilesh.dosooye.com">by Nilesh Dosooye</a></td></tr></table>
<hr>

<table width="720" border="0" cellspacing="0" cellpadding="0">
<tr>
<td colspan=3>
 phpStyleSheetViewer will allow you to preview your Style Sheet and have a sample of what every element in your style sheet will look like on your site. Having the sample class elements visually, will help you to build your web front end faster and more efficiently. Just put the style sheet that you have in the text box below or Upload it from your local system or just point it to a valid url and click on the Preview Button.</p>
 <br>

</td>
</tr>
  <tr valign=top>
    <td width=350> 
	<h3>Copy and Paste your Style Sheet</h3>
      <form name="form1" method="post" action="<? echo $PHP_SELF ?>">
        <p>
          <textarea name="stylesheet" wrap="VIRTUAL" cols="50" rows="20"></textarea>
        </p>
        <p>
          <input type="submit" name="Submit" value="Preview Style Sheet">
        </p>
        </form>
  
    </td>
    <td width=20>&nbsp;</td>
    <td width=350> 
	<table>
	<tr height=200>
	<td valign=top>
	<h3>Upload your Style Sheet</h3>

           <form enctype="multipart/form-data" action="<? echo $PHP_SELF ?>" method="post">

                   <input type="hidden" name="MAX_FILE_SIZE" value="500000">
                   Style Sheet File: <input name="userfile" type="file"><br><br>
		            <input type=hidden name=type value=file>
                   <input type="submit" name="Submit" value="Upload and Preview Sheet">
           </form>

	</td>
	</tr>
	<tr height=200>
	<td valign=top>
	<h3>Enter the URL of your Sheet (.css)</h3>
	<i>e.g http://www.domain.com/style.css</i><br>
       <form name="form1" method="post" action="<? echo $PHP_SELF ?>">
        <p>
          <INPUT TYPE="text" NAME="url" size=30 value="http://">
        </p>
        <p>
		  <input type=hidden name=type value=url>
          <input type="submit" name="Submit" value="Preview Style Sheet">
        </p>
        </form>


	</td>
	</tr>
	</table>


  
    </td>


  </tr>
</table>
<?
}
?>

<font size="-2">Created 12/10/2002. This applicaton is licensed under the <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License (GNU GPL).</a>, built in <a href="http://www.weboot.com/">Weboot.com Software Labs</a>
</body>
</html>

<?
include_once(INC_SUPERFOOTER);
?>
