<?php
/***
* This class is designed to create somewhat random passwords
* to set up initial user accounts where
* you email out the initial login information. 
* 
Example Usage

require_once("PasswordGenerator.php");
$Password = new PasswordGenerator(10, 20);

$RandPassword = $Password->getHTMLPassword();
print($RandPassword);

<H4>Image Password</h4>
<img src="passwdgen_imgtest.php" />

<p>Please refresh your browser to see another password.</p>

// passwdgen_imgtest.php
require_once("PasswordGenerator.php");

$Password = new PasswordGenerator(8, 12);
$RandPassword = $Password->getImgPassword();

?>
***/
class PasswordGenerator
{
	var $passwdchars;
	var $passwd;
	var $length;
	var $minlength;
	var $maxlength;

	function PasswordGenerator($min=6, $max=8, $special=NULL, $chararray=NULL)
	{
		if($chararray == NULL) 	{
        	     $passwdstr = "abcdefghijklmnopqrstuvwxyz";
        	     $passwdstr .= strtoupper($passwdstr);
        	     $passwdstr .= "12345678901234567890"; // twice to up the likelyhood
		    // add special chars to start
             	    if ($special) {
			$passwdstr .= "!@#$%";
             	    }
		} else { 
			$passwdstr = $chararray; 
		}

        	for($i=0; $i<=strlen($passwdstr) - 1; $i++) {
    			$this->passwdchars[$i]=$passwdstr[$i];
        	}
             
        	// randomize the chars
        	srand ((float)microtime()*1000000);
        	shuffle($this->passwdchars);

		$this->minlength = $min;
		$this->maxlength = $max;
	}

	function setLength()	// private method
	{ $this->length = rand($this->minlength, $this->maxlength); }

	function setMin($min)
	{ $this->minlength = $min; }

	function setMax($max)
	{ $this->maxlength = $max; }

	function getPassword()
	{
		$this->passwd = NULL; 
		$this->setLength();

		for($i=0; $i<$this->length; $i++)
		{
			$charnum = rand(0, count($this->passwdchars) - 1);
			$this->passwd .= $this->passwdchars[$charnum];
		}

		return $this->passwd; 
	}

	// to show in browser
	function getHTMLPassword()
	{
		return (htmlentities($this->getPassword()));
	}

	// Allows password to be shown as an image
	// Also semi-tempest resistant, with random text position,
	// and nifty gray color which should difuse tempest emissions
	// Created By: Flinn Mueller (flinn AT activeintra DOT net)
	function getImgPassword()
	{
		$RandPassword = $this->getPassword();

		// create the image
		$png = ImageCreate(200,80);
		$bg = ImageColorAllocate($png,192,192,192);
		$tx = ImageColorAllocate($png,128,128,128);
		ImageFilledRectangle($png,0,0,200,80,$bg);
		srand ((float)microtime()*1000000);
		ImageString($png,5,rand(0,90),rand(0,50),$RandPassword,$tx);

		// send the image
		header("content-type: image/png");
		ImagePng($png);
		imagedestroy ($png);
	}
}

?>