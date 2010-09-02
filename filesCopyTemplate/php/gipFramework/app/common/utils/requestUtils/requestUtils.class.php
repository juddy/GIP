<?
class requestUtils
{

	/**
	* @return data gotten from request object
	* @param elementName :  form Element Name
	* @param requestType :  REQUEST, COOKIE, POST OR GET
	* @desc getRequestObjects :  this function gets elements from forms, check if magic quotes are on and add slashes if necessary
	* @version 1.0
	* @license GNU GPL License
	* @author Nilesh Dosooye <opensource@weboot.com>
	* @copyright Copyright &copy; 2004, Nilesh Dosooye
	*/
	function getRequestObject($elementName,$requestType="")
	{

		if (strtolower($requestType)=="get")
		{
			$data = $_GET[$elementName];
		}
		else if (strtolower($requestType)=="post")
		{
			$data = $_POST[$elementName];
		}
		else if (strtolower($requestType)=="cookie")
		{
			$data = $_COOKIE[$elementName];
		}
		else
		{
			$data = $_REQUEST[$elementName];
		}


		// If results is array.. as in check boxes etc.. return the array as is
		if (is_array($data))
		{

			return $data;
		}
		else
		{

			// DO SANITY CHECK HERE
			// Allow HTML from user input or not (flag set in application Constants)
			// do whatever else sanity checking here to prevent XSS and similar user injections
			if (ALLOW_HTML_TAGS_IN_POST_GET_REQUESTS)
			{
				// Remove all HTML Tags from user input
				// including SCRIPT, APPLET, EMBED etc..
				$data = strip_tags($data);
			}

			// if magic quotes == on, return data as is
			if (get_magic_quotes_gpc()==1)
			{
				return $data;
			}
			// if magic quotes == off, then return data with slashes
			else
			{

				return addslashes($data);
			}
		}

	}

}
?>