<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter INNODB_BUFFER_PAGE</h2>
<form name="innodb_buffer_pageEnterForm" method="POST" action="insertNewInnodb_buffer_page.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> POOL_ID :  </b> </td>
		<td> <input type="text" name="thisPOOL_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> BLOCK_ID :  </b> </td>
		<td> <input type="text" name="thisBLOCK_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SPACE :  </b> </td>
		<td> <input type="text" name="thisSPACEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGE_NUMBER :  </b> </td>
		<td> <input type="text" name="thisPAGE_NUMBERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGE_TYPE :  </b> </td>
		<td> <input type="text" name="thisPAGE_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FLUSH_TYPE :  </b> </td>
		<td> <input type="text" name="thisFLUSH_TYPEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FIX_COUNT :  </b> </td>
		<td> <input type="text" name="thisFIX_COUNTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_HASHED :  </b> </td>
		<td> <input type="text" name="thisIS_HASHEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NEWEST_MODIFICATION :  </b> </td>
		<td> <input type="text" name="thisNEWEST_MODIFICATIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> OLDEST_MODIFICATION :  </b> </td>
		<td> <input type="text" name="thisOLDEST_MODIFICATIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> ACCESS_TIME :  </b> </td>
		<td> <input type="text" name="thisACCESS_TIMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> TABLE_NAME :  </b> </td>
		<td> <input type="text" name="thisTABLE_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> INDEX_NAME :  </b> </td>
		<td> <input type="text" name="thisINDEX_NAMEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_RECORDS :  </b> </td>
		<td> <input type="text" name="thisNUMBER_RECORDSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATA_SIZE :  </b> </td>
		<td> <input type="text" name="thisDATA_SIZEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> COMPRESSED_SIZE :  </b> </td>
		<td> <input type="text" name="thisCOMPRESSED_SIZEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGE_STATE :  </b> </td>
		<td> <input type="text" name="thisPAGE_STATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IO_FIX :  </b> </td>
		<td> <input type="text" name="thisIO_FIXField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> IS_OLD :  </b> </td>
		<td> <input type="text" name="thisIS_OLDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FREE_PAGE_CLOCK :  </b> </td>
		<td> <input type="text" name="thisFREE_PAGE_CLOCKField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterINNODB_BUFFER_PAGEForm" value="Enter INNODB_BUFFER_PAGE">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>