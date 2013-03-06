<?php
include_once("../common/dbConnection.php");
include_once("../common/header.php");
?>
<h2>Contact Us</h2>
<h3>Please send ur your feedback</h3>
<form name="form1" method="post" action="<? echo PAGE_HTML_MAIL_CONTACT; ?>">
  <table width="600"  border="0" cellspacing="4" cellpadding="4">
    <tr>
      <td width="23%" valign="top" >
        <div align="right">Your Name : </div>
      </div></td>
      <td width="77%"><input name="name" type="text" id="name" size="35"></td>
    </tr>
    <tr>
      <td valign="top" >
        <div align="right">Email Address : </div>
      </div></td>
      <td><input name="emailAddress" type="text" id="emailAddress" size="35"></td>
    </tr>
    <tr>
      <td valign="top" > <div align="right">Job : </div></td>
      <td><input name="job" type="text" id="job"></td>
    </tr>
    <tr>
      <td valign="top" >
        <div align="right">City : </div>
      </div></td>
      <td><input name="city" type="text" id="city"></td>
    </tr>
    <tr>
      <td valign="top" >
        <div align="right">Country : </div>
      </div></td>
      <td><input name="country" type="text" id="country"></td>
    </tr>
    <tr>
      <td valign="top" >
        <div align="right">FeedBack / Suggestions/ Criticism :</div>
      </div></td>
      <td><textarea name="comments" cols="50" rows="15" wrap="VIRTUAL" id="comments"></textarea></td>
    </tr>
    <tr>
      <td valign="top" ><div align="right"></div></td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  </form>

<?php
include_once("../common/footer.php");
?>