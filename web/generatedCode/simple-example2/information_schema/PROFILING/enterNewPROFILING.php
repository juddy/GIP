<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Enter PROFILING</h2>
<form name="profilingEnterForm" method="POST" action="insertNewProfiling.php">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
	<tr valign="top" height="20">
		<td align="right"> <b> QUERY_ID :  </b> </td>
		<td> <input type="text" name="thisQUERY_IDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SEQ :  </b> </td>
		<td> <input type="text" name="thisSEQField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> STATE :  </b> </td>
		<td> <input type="text" name="thisSTATEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> DURATION :  </b> </td>
		<td> <input type="text" name="thisDURATIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CPU_USER :  </b> </td>
		<td> <input type="text" name="thisCPU_USERField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CPU_SYSTEM :  </b> </td>
		<td> <input type="text" name="thisCPU_SYSTEMField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CONTEXT_VOLUNTARY :  </b> </td>
		<td> <input type="text" name="thisCONTEXT_VOLUNTARYField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> CONTEXT_INVOLUNTARY :  </b> </td>
		<td> <input type="text" name="thisCONTEXT_INVOLUNTARYField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> BLOCK_OPS_IN :  </b> </td>
		<td> <input type="text" name="thisBLOCK_OPS_INField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> BLOCK_OPS_OUT :  </b> </td>
		<td> <input type="text" name="thisBLOCK_OPS_OUTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MESSAGES_SENT :  </b> </td>
		<td> <input type="text" name="thisMESSAGES_SENTField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> MESSAGES_RECEIVED :  </b> </td>
		<td> <input type="text" name="thisMESSAGES_RECEIVEDField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGE_FAULTS_MAJOR :  </b> </td>
		<td> <input type="text" name="thisPAGE_FAULTS_MAJORField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> PAGE_FAULTS_MINOR :  </b> </td>
		<td> <input type="text" name="thisPAGE_FAULTS_MINORField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SWAPS :  </b> </td>
		<td> <input type="text" name="thisSWAPSField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SOURCE_FUNCTION :  </b> </td>
		<td> <input type="text" name="thisSOURCE_FUNCTIONField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SOURCE_FILE :  </b> </td>
		<td> <input type="text" name="thisSOURCE_FILEField" size="20" value="">  </td> 
	</tr>
	<tr valign="top" height="20">
		<td align="right"> <b> SOURCE_LINE :  </b> </td>
		<td> <input type="text" name="thisSOURCE_LINEField" size="20" value="">  </td> 
	</tr>
</table>

<input type="submit" name="submitEnterPROFILINGForm" value="Enter PROFILING">
<input type="reset" name="resetForm" value="Clear Form">

</form>

<?php
include_once("../common/footer.php");
?>