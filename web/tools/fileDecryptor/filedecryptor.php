
<form name="form1" method="post" action="decryptfile.php" enctype="multipart/form-data">
  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td height="30" width="136"> 
        <div align="right">File Name :</div>
      </td>
      <td height="30" width="364">
        <input type="file" name="filename">
      </td>
    </tr>
    <tr> 
      <td height="30" width="136"> 
        <div align="right">Record Delimeter :</div>
      </td>
      <td height="30" width="364">
        <input type="text" name="recorddelimeter" size="5">
      </td>
    </tr>
    <tr> 
      <td height="30" width="136"> 
        <div align="right">Field Delimeter :</div>
      </td>
      <td height="30" width="364">
        <input type="text" name="fielddelimeter" size="5">
      </td>
    </tr>
  </table>
  <p>
    <input type="submit" name="Submit" value="Process File">
  </p>
  </form>