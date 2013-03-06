<?   
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");

 ?>
<? 
class plugInLoader
{

	function gen($arguments="")
	{


	}


	function loadPlugIn($plugInName,$plugInFullFilePath,$arguments)
	{
		if ($plugInName=="")
		{
			echo "<br><br><font color=red><b>Plugin Loader Error !</b><br><br> Plug-In Name needs to be non-null. Plug In Class Name was blank in this case.</font>";
			exit;
		}
		else if ($plugInFullFilePath=="")
		{
			echo "<br><br><font color=red><b>Plugin Loader Error !</b><br><br> Plug-In path needs to be non-null. Plug In Path was blank in this case.</font>";
			exit;
		}
		else
		{


			include_once($plugInFullFilePath);
			$thisNew{$plugInName} = new $plugInName($arguments);
			$code = rtrim(ltrim($thisNew{$plugInName}->generate()));

			return $code;

		}
	}

}

?> 	
