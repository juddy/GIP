/*
*  The Validator
*   The class that handles all validation related issues
*
*   pass the name of the form while constructing.
*   methods:
*    addValidation(input_item_name,validation_descriptor,error_string)
*       call this method for each input item. Single input item can have
*       many validations
*
*    setAddnlValidationFunction(function_name)
*             call this function to set a custom validat function, which will
*						 be called after other validations are over.
*			       The function should return 'true' or 'false'
*/
function Validator(frmname)
{
  this.formobj=document.forms[frmname];
	if(!this.formobj)
	{
	  alert("BUG: couldnot get Form object "+frmname);
		return;
	}
	if(this.formobj.onsubmit)
	{
	 this.formobj.old_onsubmit = this.formobj.onsubmit;
	 this.formobj.onsubmit=null;
	}
	else
	{
	 this.formobj.old_onsubmit = null;
	}
	this.formobj.onsubmit=form_submit_handler;
	this.addValidation = add_validation;
	this.setAddnlValidationFunction=set_addnl_vfunction;
	this.clearAllValidations = clear_all_validations;
}

function set_addnl_vfunction(functionname)
{
  this.formobj.addnlvalidation = functionname;
}
function clear_all_validations()
{
	for(var itr=0;itr < this.formobj.elements.length;itr++)
	{
		this.formobj.elements[itr].validationset = null;
	}
}
function form_submit_handler()
{
	for(var itr=0;itr < this.elements.length;itr++)
	{
		if(this.elements[itr].validationset &&
	   !this.elements[itr].validationset.validate())
		{
		  return false;
		}
	}
	if(this.addnlvalidation)
	{
	  str =" var ret = "+this.addnlvalidation+"()";
	  eval(str);
    if(!ret) return ret;
	}
	return true;
}

function add_validation(itemname,descriptor,errstr)
{
  if(!this.formobj)
	{
	  alert("BUG: the form object is not set properly");
		return;
	}//if
	var itemobj = this.formobj[itemname];
  if(!itemobj)
	{
	  alert("BUG: Couldnot get the input object named: "+itemname);
		return;
	}

	if(!itemobj.validationset)
	{
	  itemobj.validationset = new ValidationSet(itemobj);
	}
  itemobj.validationset.add(descriptor,errstr);
}
function ValidationDesc(inputitem,desc,error)
{
  this.desc=desc;
	this.error=error;
	this.itemobj = inputitem;
	this.validate=vdesc_validate;
}
function vdesc_validate()
{
 if(!V2validateData(this.desc,this.itemobj,this.error))
 {
    this.itemobj.focus();
		return false;
 }
 return true;
}


function ValidationSet(inputitem)
{
  this.vSet=new Array();
	this.add= add_validationdesc;
	this.validate= vset_validate;
	this.itemobj = inputitem;
}
function add_validationdesc(desc,error)
{
  this.vSet[this.vSet.length]=
	  new ValidationDesc(this.itemobj,desc,error);
}
function vset_validate()
{
   for(var itr=0;itr<this.vSet.length;itr++)
	 {
	   if(!this.vSet[itr].validate())
		 {
		   return false;
		 }
	 }
	 return true;
}

//---------------------------------EMail Check ------------------------------------

/*  checks the validity of an email address entered
*   returns true or false
*
*/

function validateEmailv2(email)
{
// a very simple email validation checking.
// you can add more complex email checking if it helps
    var splitted = email.match("^(.+)@(.+)$");
    if(splitted == null) return false;
    if(splitted[1] != null )
    {
      var regexp_user=/^\"?[\w-_\.]*\"?$/;
      if(splitted[1].match(regexp_user) == null) return false;
    }
    if(splitted[2] != null)
    {
      var regexp_domain=/^[\w-\.]*\.[A-Za-z]{2,4}$/;
      if(splitted[2].match(regexp_domain) == null)
      {
	    var regexp_ip =/^\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\]$/;
	    if(splitted[2].match(regexp_ip) == null) return false;
      }// if
      return true;
    }
return false;
}

/* function V2validateData
*  Checks each field in a form

*/
function V2validateData(strValidateStr,objValue,strError)
{
    var epos = strValidateStr.search("=");
    var  command  = "";
    var  cmdvalue = "";
    if(epos >= 0)
    {
     command  = strValidateStr.substring(0,epos);
     cmdvalue = strValidateStr.substr(epos+1);
    }
    else
    {
     command = strValidateStr;
    }

    switch(command)
    {
        case "req":
        case "required":
         {
           if(eval(objValue.value.length) == 0)
           {
              if(!strError || strError.length ==0)
              {
                strError = objValue.name + " : Required Field";
              }//if
              alert(strError);
              return false;
           }//if
           break;
         }//case required
        case "maxlength":
        case "maxlen":
          {
             if(eval(objValue.value.length) >  eval(cmdvalue))
             {
               if(!strError || strError.length ==0)
               {
                 strError = objValue.name + " : "+cmdvalue+" characters maximum ";
               }//if
               alert(strError + "\n[Current length = " + objValue.value.length + " ]");
               return false;
             }//if
             break;
          }//case maxlen
        case "minlength":
        case "minlen":
           {
             if(eval(objValue.value.length) <  eval(cmdvalue))
             {
               if(!strError || strError.length ==0)
               {
                 strError = objValue.name + " : " + cmdvalue + " characters minimum  ";
               }//if
               alert(strError + "\n[Current length = " + objValue.value.length + " ]");
               return false;
             }//if
             break;
            }//case minlen
        case "alnum":
        case "alphanumeric":
           {
              var charpos = objValue.value.search("[^A-Za-z0-9]");
              if(objValue.value.length > 0 &&  charpos >= 0)
              {
               if(!strError || strError.length ==0)
                {
                  strError = objValue.name+": Only alpha-numeric characters allowed ";
                }//if
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]");
                return false;
              }//if
              break;
           }//case alphanumeric
        case "num":
        case "numeric":
           {
              var charpos = objValue.value.search("[^0-9.]");
              if(objValue.value.length > 0 &&  charpos >= 0)
              {
                if(!strError || strError.length ==0)
                {
                  strError = objValue.name+": Only digits allowed ";
                }//if
                //alert(strError + "\n [Error character position " + eval(charpos+1)+"]");
               alert(strError);
                return false;
              }//if
              break;
           }//numeric
		case "int":
        case "integer":
           {
              var charpos = objValue.value.search("[^0-9]");
              if(objValue.value.length > 0 &&  charpos >= 0)
              {
                if(!strError || strError.length ==0)
                {
                  strError = objValue.name+": Only digits allowed ";
                }//if
                //alert(strError + "\n [Error character position " + eval(charpos+1)+"]");
               alert(strError);
                return false;
              }//if
              break;
           }//integer
        case "alphabetic":
        case "alpha":
           {
              var charpos = objValue.value.search("[^A-Za-z]");
              if(objValue.value.length > 0 &&  charpos >= 0)
              {
                  if(!strError || strError.length ==0)
                {
                  strError = objValue.name+": Only alphabetic characters allowed ";
                }//if
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]");
                return false;
              }//if
              break;
           }//alpha
		case "alnumhyphen":
			{
              var charpos = objValue.value.search("[^A-Za-z0-9\-_]");
              if(objValue.value.length > 0 &&  charpos >= 0)
              {
                  if(!strError || strError.length ==0)
                {
                  strError = objValue.name+": characters allowed are A-Z,a-z,0-9,- and _";
                }//if
                alert(strError + "\n [Error character position " + eval(charpos+1)+"]");
                return false;
              }//if
			break;
			}
        // added by Nilesh Dosooye on 09/17/2003
        case "fungenSampleName":
          {

                var firstSet =  objValue.value.substr(0,3);
                var secondSet = objValue.value.substr(3,3);

                var validFirst = firstSet.search("[^A-Za-z]");
                var validSecond = secondSet.search("[^0-9]");


              if(objValue.value.length !=6 ||  validFirst >= 0 || validSecond >= 0)
              {
                  if(!strError || strError.length ==0)
                {
                  strError = objValue.name+": Sample Name should be only 6 characters and in the format XXX999 ";
                }//if
                alert(strError + "\n\n Your Current Entry is  " + objValue.value +" and its invalid");
                return false;
              }//if


           break;
          }//case email
        case "email":
          {
               if(!validateEmailv2(objValue.value))
               {
                 if(!strError || strError.length ==0)
                 {
                    strError = objValue.name+": Enter a valid Email address ";
                 }//if
                 alert(strError);
                 return false;
               }//if
           break;
          }//case email
        case "lt":
        case "lessthan":
         {
            if(isNaN(objValue.value))
            {
              alert(objValue.name+": Should be a number ");
              return false;
            }//if
            if(eval(objValue.value) >=  eval(cmdvalue))
            {
              if(!strError || strError.length ==0)
              {
                strError = objValue.name + " : value should be less than "+ cmdvalue;
              }//if
              alert(strError);
              return false;
             }//if
            break;
         }//case lessthan
        case "gt":
        case "greaterthan":
         {
            if(isNaN(objValue.value))
            {
              alert(objValue.name+": Should be a number ");
              return false;
            }//if
             if(eval(objValue.value) <=  eval(cmdvalue))
             {
               if(!strError || strError.length ==0)
               {
                 strError = objValue.name + " : value should be greater than "+ cmdvalue;
               }//if
               alert(strError);
               return false;
             }//if
            break;
         }//case greaterthan
        // added by Nilesh Dosooye on 09/17/2003
        case "validDate":
         {
            // regex for date in yyyy/mm/dd format
            var thisRegEx = "([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})";
             //var thisRegEx = "[^0-9]";
            if (objValue.value.length>0)
            {
            if(!objValue.value.match(thisRegEx))
            {
              if(!strError || strError.length ==0)
              {
                strError = objValue.name+": Not a valid date in the yyyy-mm-dd ";
              }//if
              alert(strError);
              return false;
            }//if
            }
           break;
         }//case regexp
        // added by Nilesh Dosooye on 09/17/2003
        case "validTime":
         {
            // regex for date in yyyy/mm/dd format
            var thisRegEx = "([0-9]{1,2}):([0-9]{2})";
             //var thisRegEx = "[^0-9]";
            if (objValue.value.length>0)
            {
            if(!objValue.value.match(thisRegEx))
            {
              if(!strError || strError.length ==0)
              {
                strError = objValue.name+": Not a valid date in the yyyy-mm-dd ";
              }//if
              alert(strError);
              return false;
            }//if
            }
           break;
         }//case regexp

        case "regexp":
         {
            if(!objValue.value.match(cmdvalue))
            {
              if(!strError || strError.length ==0)
              {
                strError = objValue.name+": Invalid characters found ";
              }//if
              alert(strError);
              return false;
            }//if
           break;
         }//case regexp
        case "dontselect":
         {
            if(objValue.selectedIndex == null)
            {
              alert("BUG: dontselect command for non-select Item");
              return false;
            }
            if(objValue.selectedIndex == eval(cmdvalue))
            {
             if(!strError || strError.length ==0)
              {
              strError = objValue.name+": Please Select one option ";
              }//if
              alert(strError);
              return false;
             }
             break;
         }//case dontselect
    }//switch
    return true;
}
