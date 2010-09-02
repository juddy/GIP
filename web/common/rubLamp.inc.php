<?
include_once("/pcg/app/settings/genieConfiguration.inc.php");
include_once(CONFIG_FILE);
include_once(INC_SUPERHEADER);
?>
<DIV ALIGN=center>

<IMG SRC="<? echo URL_IMAGE_FOLDER."/pcg.gif"; ?>" BORDER="0">

<H1><? echo LANG_LOGIN_INVOKE_GENIE; ?></H1>

<FORM NAME="rubGenie" METHOD="post" ACTION="<? echo PAGE_INVOKE_GENIE; ?>">
    <TABLE WIDTH="600" BORDER="0" CELLSPACING="4" CELLPADDING="4">
  
        <TR>
            <TD ><DIV ALIGN="right"><? echo LANG_LOGIN_GENIE_FLAVOR; ?> : </DIV></TD>
            <TD ><SELECT NAME="databaseType">
                    <OPTION VALUE="mysql" SELECTED>MySQL</OPTION>
                    <OPTION VALUE="postgres">PostgreSQL</OPTION>
                    <OPTION VALUE="odbc">ODBC</OPTION>
		                 <OPTION VALUE="sqlite">SQL Lite</OPTION>
                     <OPTION VALUE="oci8po">Oracle 8 or above</OPTION>
                    <OPTION VALUE="oracle">Oracle (old versions)</OPTION>
                        <OPTION VALUE="db2">DB2</OPTION>

                    <OPTION VALUE="mssqlpo">MS SQL Server</OPTION>
                    <OPTION VALUE="maxsql">Max MySQL</OPTION>
                    <OPTION VALUE="vfp">Visual FoxPro</OPTION>

                    <OPTION VALUE="fbsql">FrontBase</OPTION>
                    <OPTION VALUE="ibase">Interbase 6</OPTION>
                    <OPTION VALUE="borland_ibase">Borland Interbase 6.5 or above</OPTION>
                    <OPTION VALUE="firebird">Firebird</OPTION>
                    <OPTION VALUE="informix">Informix</OPTION>
                    <OPTION VALUE="informix72">Informix 7.2</OPTION>
                    <OPTION VALUE="ldap">LDAP</OPTION>

                    <OPTION VALUE="netezza">Netezza</OPTION>
                    <OPTION VALUE="sapdb">Sap DB</OPTION>
                    <OPTION VALUE="sybase">Sybase</OPTION>
                    <OPTION VALUE="sqlanywhere">Sybase SQL Anywhere</OPTION>
                    <OPTION VALUE="db2">DB2</OPTION>
            </SELECT></TD>
        </TR>
        <TR>
            <TD><DIV ALIGN="right"><? echo LANG_LOGIN_DB_HOSTNAME; ?> : </DIV></TD>
            <TD><INPUT TYPE="text" NAME="dbHostName" VALUE="<? echo DEFAULT_HOSTNAME; ?>"></TD>
        </TR>
        <TR>
            <TD><DIV ALIGN="right"><? echo LANG_LOGIN_DB_USER_NAME; ?> : </DIV></TD>
            <TD><INPUT TYPE="text" NAME="dbUserName" VALUE="<? echo DEFAULT_USER_NAME; ?>"></TD>
        </TR>
        <TR>
            <TD><DIV ALIGN="right"><? echo LANG_LOGIN_DB_PASSWORD; ?> : </DIV></TD>
            <TD><INPUT TYPE="password" NAME="dbPassword"></TD>
        </TR>
        <TR>
            <TD COLSPAN="2">
                <DIV ALIGN="center">
                     <INPUT NAME="imageField" TYPE="image" SRC="<? echo URL_IMAGE_FOLDER; ?>/lamp.jpg"  BORDER="0" ALT="<? echo LANG_LOGIN_RUB_LAMP_DESC; ?>" onClick="form.submit()">
                     <BR><BR>
                         <H3><? echo LANG_LOGIN_RUB_LAMP; ?></H3>
                     
                  </DIV>
                  
           </TD>
        </TR>
    </TABLE>
    

    
</FORM>
<?
include_once(INC_SUPERFOOTER);
?>
</DIV>