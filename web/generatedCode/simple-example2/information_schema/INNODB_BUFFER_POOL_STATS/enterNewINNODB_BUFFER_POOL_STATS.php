<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter INNODB_BUFFER_POOL_STATS</h2>
<form name="innodb_buffer_pool_statsEnterForm" method="POST" action="insertNewInnodb_buffer_pool_stats.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> POOL_ID :  </b> </td>
		<td> <input type="text" name="thisPOOL_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> POOL_SIZE :  </b> </td>
		<td> <input type="text" name="thisPOOL_SIZEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> FREE_BUFFERS :  </b> </td>
		<td> <input type="text" name="thisFREE_BUFFERSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DATABASE_PAGES :  </b> </td>
		<td> <input type="text" name="thisDATABASE_PAGESField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> OLD_DATABASE_PAGES :  </b> </td>
		<td> <input type="text" name="thisOLD_DATABASE_PAGESField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MODIFIED_DATABASE_PAGES :  </b> </td>
		<td> <input type="text" name="thisMODIFIED_DATABASE_PAGESField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PENDING_DECOMPRESS :  </b> </td>
		<td> <input type="text" name="thisPENDING_DECOMPRESSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PENDING_READS :  </b> </td>
		<td> <input type="text" name="thisPENDING_READSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PENDING_FLUSH_LRU :  </b> </td>
		<td> <input type="text" name="thisPENDING_FLUSH_LRUField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PENDING_FLUSH_LIST :  </b> </td>
		<td> <input type="text" name="thisPENDING_FLUSH_LISTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_MADE_YOUNG :  </b> </td>
		<td> <input type="text" name="thisPAGES_MADE_YOUNGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_NOT_MADE_YOUNG :  </b> </td>
		<td> <input type="text" name="thisPAGES_NOT_MADE_YOUNGField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_MADE_YOUNG_RATE :  </b> </td>
		<td> <input type="text" name="thisPAGES_MADE_YOUNG_RATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_MADE_NOT_YOUNG_RATE :  </b> </td>
		<td> <input type="text" name="thisPAGES_MADE_NOT_YOUNG_RATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_PAGES_READ :  </b> </td>
		<td> <input type="text" name="thisNUMBER_PAGES_READField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_PAGES_CREATED :  </b> </td>
		<td> <input type="text" name="thisNUMBER_PAGES_CREATEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_PAGES_WRITTEN :  </b> </td>
		<td> <input type="text" name="thisNUMBER_PAGES_WRITTENField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_READ_RATE :  </b> </td>
		<td> <input type="text" name="thisPAGES_READ_RATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_CREATE_RATE :  </b> </td>
		<td> <input type="text" name="thisPAGES_CREATE_RATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGES_WRITTEN_RATE :  </b> </td>
		<td> <input type="text" name="thisPAGES_WRITTEN_RATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_PAGES_GET :  </b> </td>
		<td> <input type="text" name="thisNUMBER_PAGES_GETField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> HIT_RATE :  </b> </td>
		<td> <input type="text" name="thisHIT_RATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> YOUNG_MAKE_PER_THOUSAND_GETS :  </b> </td>
		<td> <input type="text" name="thisYOUNG_MAKE_PER_THOUSAND_GETSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NOT_YOUNG_MAKE_PER_THOUSAND_GETS :  </b> </td>
		<td> <input type="text" name="thisNOT_YOUNG_MAKE_PER_THOUSAND_GETSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_PAGES_READ_AHEAD :  </b> </td>
		<td> <input type="text" name="thisNUMBER_PAGES_READ_AHEADField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> NUMBER_READ_AHEAD_EVICTED :  </b> </td>
		<td> <input type="text" name="thisNUMBER_READ_AHEAD_EVICTEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> READ_AHEAD_RATE :  </b> </td>
		<td> <input type="text" name="thisREAD_AHEAD_RATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> READ_AHEAD_EVICTED_RATE :  </b> </td>
		<td> <input type="text" name="thisREAD_AHEAD_EVICTED_RATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LRU_IO_TOTAL :  </b> </td>
		<td> <input type="text" name="thisLRU_IO_TOTALField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> LRU_IO_CURRENT :  </b> </td>
		<td> <input type="text" name="thisLRU_IO_CURRENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UNCOMPRESS_TOTAL :  </b> </td>
		<td> <input type="text" name="thisUNCOMPRESS_TOTALField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> UNCOMPRESS_CURRENT :  </b> </td>
		<td> <input type="text" name="thisUNCOMPRESS_CURRENTField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterINNODB_BUFFER_POOL_STATSForm" value="Enter INNODB_BUFFER_POOL_STATS">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>