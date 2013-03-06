<?php
/**
* Class for parsing CSV (Comma Seperated Values) data.
*
* Authors : Christian Reiniger <creinig@mayn.de>
* License : GNU GPL V2 or later (http://www.fsf.org/copyleft/gpl.html)
*
* Last change by $Author: nileshd $
* on             $Date: 2004/07/08 22:24:58 $
* to             $Revision: 1.1 $
*/


/**
* Class for parsing CSV (Comma Seperated Values) data.
*
* Quote some variations in the actual format are supported. Parameters are:
* Delimiter   : Single char for separating values
* Quote       : Single char with which values are eventually quoted
* QuoteEscape : String used as "literal quote" in a value
*/
class CSVParser
{
function pbCSVParser ($Delimiter   = ',',
                      $Quote       = '"',
                      $QuoteEscape = '""')
{
        assert (strlen ($Delimiter)   == 1);
        assert (strlen ($Quote)       == 1);
        assert (strlen ($QuoteEscape) >= 1);

        $this->delimiter    = $Delimiter;
        $this->quote        = $Quote;
        $this->quote_escape = $QuoteEscape;
}


/**
* Parse one csv line
*
* @returns an array with the fields in correct order
*/
function ParseLine ($Line)
{
        $Results = array ();

        $this->line_remaining = $Line;
        $this->delim_read     = true;

        /*
         * $this->line_remaining is automatically shortened by the
         * sub-functions
         */
        while ((strlen ($this->line_remaining) != 0) ||
               ($this->delim_read == true))
        {
//                echo "LineR = '" . $this->line_remaining . "'<br>\n";
                if ((strlen ($this->line_remaining) == 0) &&
                    ($this->delim_read == true))
                {
                        $this->delim_read = false;
                        $Results [] = '';
                        break;
                }

                $Char1 = substr ($this->line_remaining, 0, 1);

                if ($Char1 == $this->quote) {
                        $Res = $this->GetQuoted ();
                }
                elseif ($Char1 == $this->delimiter) {
                        $Res = '';
                        $this->line_remaining = substr ($this->line_remaining,
                                                        1);
                }
                else {
                        $Res = $this->GetUnquoted ();
                }

                if ($Res === false)    // format error
                        return false;
                else
                        $Results [] = $Res;

        }

        return $Results;
}




// private





function GetQuoted ()
{
//        echo "GetQuoted for '" . $this->line_remaining . "'<br>";
        $Q  = $this->quote;
        $QQ = $this->quote_escape;
        $D  = $this->delimiter;

        $Q_  = preg_quote ($Q);
        $QQ_ = preg_quote ($QQ);
        $D_  = preg_quote ($D);

        $Pattern  = '/';
        $Pattern .= '^' . $Q_;         // skip opening quote
        $Pattern .= '([^' . $Q_ . ']'; // match non-quotes ...
        $Pattern .= '|' . $QQ_ . ')';  // ... or quoted quotes
        $Pattern .= '*';               // none or more of both
        $Pattern .= $Q_;               // closing quote
        $Pattern .= '(' . $D_ . '|$)'; // end-of-field [*]
        $Pattern .= '/';

        // [*] : Either the field ends with a delimiter or with end-of-string

        $Matches = array ();

        if (! preg_match ($Pattern, $this->line_remaining, $Matches))
        {
//                sgError ('pbCSVParser.GetQuoted: Invalid Data', E_NOTICE);
                return false;
        }
        else
        {
                $Match = $Matches [0];

                // shorten input line accordingly
                $this->line_remaining = substr ($this->line_remaining,
                                                strlen ($Match));

                // remove quotes, eventually delimiter from match
                if (substr ($Match, strlen ($Match) - 1) == $D) {
                        $Match = substr ($Match, 1, strlen ($Match) - 3);
                        $this->delim_read = true;
                }
                else {
                        $Match = substr ($Match, 1, strlen ($Match) - 2);
                        $this->delim_read = false;
                }

                // unquote contained quotes
                $Match = preg_replace ('/' . $QQ_ . '/', $Q, $Match);

                return $Match;
        }
}



function GetUnquoted ()
{
//        echo "GetUnquoted for '" . $this->line_remaining . "'<br>";
        $Q  = $this->quote;
        $QQ = $this->quote_escape;
        $D  = $this->delimiter;

        $Q_  = preg_quote ($Q);
        $QQ_ = preg_quote ($QQ);
        $D_  = preg_quote ($D);

        $Pattern  = '/';
        $Pattern .= '([^' . $D_ . ']'; // match non-delimiters ...
        $Pattern .= '|' . $QQ_ . ')';  // ... or quoted quotes
        $Pattern .= '*';              // none or more of both
        $Pattern .= '(' . $D_ . '|$)'; // end-of-field [*]
        $Pattern .= '/';

        // [*] : Either the field ends with a delimiter or with end-of-string

        $Matches = array ();

        if (! preg_match ($Pattern, $this->line_remaining, $Matches))
        {
//                sgError ('pbCSVParser.GetUnquoted: Invalid Data', E_NOTICE);
                return false;
        }
        else
        {
                $Match = $Matches [0];

                // shorten input line accordingly
                $this->line_remaining = substr ($this->line_remaining,
                                                strlen ($Match));

                // eventually remove delimiter from match
                if (substr ($Match, strlen ($Match) - 1) == $D) {
                        $Match = substr ($Match, 0, strlen ($Match) - 1);
                        $this->delim_read = true;
                }
                else {
                        $this->delim_read = false;
                }

                // unquote contained quotes
                $Match = preg_replace ('/' . $QQ_ . '/', $Q, $Match);

                return $Match;
        }
}




var $line_remaining;
var $delim_read = true;   // true if a delimiter was found at the end of the previous value


var $delimiter    = ',';  // Character seperating the values
var $quote        = '"';  // Character for quoting entire values
var $quote_escape = '""'; // How a quote is quoted
};


?> 