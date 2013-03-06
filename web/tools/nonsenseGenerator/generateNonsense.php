<?
include_once("//var/www/gip/app/settings/gipConfiguration.inc.php");
include_once(CONFIG_FILE);
include_once(INC_SUPERHEADER);

# Nonsense Generator 2.0.3
# http://www.jholman.com/scripts/nonsense/
# Copyright © 2002-2004 Jeff Holman
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# See license.txt for the terms of the GNU GPL.
# 
# See help.html for installation and usage instructions.

function nonsense($numSentences = 1) {
	$lists = array("interjections", "determiners", "adjectives", "nouns", "adverbs", "verbs", "prepositions", "conjunctions", "comparatives");
	$vowels = array('a','e','i','o','u');
	$type = rand(0,1);
	
	foreach ($lists as $part) ${$part} = file(".".FILE_SEPARATOR."db".FILE_SEPARATOR.$part.".txt");
	
	for ($i=0; $i<2; $i++) {
		foreach ($lists as $part) ${$part}[$i]	= trim(${$part}[rand(0,count(${$part}) - 1)]);
	
		if ($determiners[$i] == "a")
			foreach ($vowels as $vowel)
				if (($type && ($adjectives[$i][0] == $vowel)) || (!$type && ($nouns[$i][0] == $vowel))) $determiners[$i] = "an";
		
	}
	
	$sentence = ($type ?
	"$interjections[0], $determiners[0] $adjectives[0] $nouns[0] $adverbs[0] $verbs[0] $prepositions[0] $determiners[1] $adjectives[1] $nouns[1]." :
	"$interjections[0], $determiners[0] $nouns[0] is $comparatives[0] $adjectives[0] than $determiners[1] $adjectives[1] $nouns[1].");
	
	if ($numSentences > 1) return $sentence." ".nonsense($numSentences-1);
	return $sentence;
}


$paragraphs = 3;
$numberOfWordsInParagraph = 10;

for ($a=0;$a<$paragraphs;$a++)
{

	echo nonsense($numberOfWordsInParagraph);
	echo "<br><br>";

}

?>
<a href="<? echo $_SERVER['PHP_SELF']; ?>"><? echo LANG_UTILITIES_NONSENSE_GENERATOR_GENERATE_MORE_NONSENSE; ?></a>