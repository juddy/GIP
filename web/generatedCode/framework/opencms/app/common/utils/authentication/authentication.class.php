<?
    include_once("bged.conf.inc.php");
    include_once(CONFIG_FILE);
?>
<?
include_once(CLASS_USERS_MANAGER);
include_once(CLASS_SERIALIZER);
?>
<? 
class Authentication
{ 

        // Variables 
        // login field from table 
        var $login ;
        // password field from table 
        var $password;


        /**
        * @return returns value of variable $login 
        * @desc getLogin : Getting value for variable $login 
        */
        function getLogin ()
        {
                return $this->login ;
        }

        /**
        * @param param : value to be saved in variable $login 
        * @desc setLogin : Setting value for $login 
        */
        function setLogin ($value)
        {
                $this->login = $value;
        }

        /**
        * @return returns value of variable $password
        * @desc getPassword : Getting value for variable $password
        */
        function getPassword()
        {
                return $this->password;
        }

        /**
        * @param param : value to be saved in variable $password
        * @desc setPassword : Setting value for $password
        */
        function setPassword($value)
        {
                $this->password = $value;
        }

        
        function Authentication($login="",$password="")
        {
             	     $this->setLogin($login);
             	     $this->setPassword($password);
        }
        
        /**
        * @return put return description here..
        * @param param :  parameter passed to function
        * @desc authenticate :  put function description here ... 
        */
        function authenticate ()
        {
                $thisUsersManager = new usersManager();

               
                
               $searchItems[] = new searchItem(FIELD_USERS_LOGIN, $this->getLogin()); 		
               $searchItems[] = new searchItem(FIELD_USERS_PASSWORD,$this->getPassword()); 	               
                

                
                $dbResultsInfo = $thisUsersManager->searchUsersByFieldValue($searchItems);
                $result  = $dbResultsInfo->getResultsArray();
       
                if (($result=="") || (count($result)==0))
                {

                        $_SESSION['auth'] = false; 	
                         $_SESSION['firstName'] =  "";
                         $_SESSION['lastName'] =  "";
                         $_SESSION['userId'] =  "";
                         
                       return false;	
                }
                else
                {
                         $thisUserInfo = $result[0];
                         $_SESSION['auth'] = true;
                         $_SESSION['firstName'] =  $thisUserInfo->getFirstName();
                         $_SESSION['lastName'] =  $thisUserInfo->getLastName();
                         $_SESSION['userId'] =  $thisUserInfo->getId();
                                                                                        	
                	
                         return true;
                }
                
        }


       function logout()
       {

                        unset($_SESSION['auth']); 	
                         unset($_SESSION['firstName']);
                        unset( $_SESSION['lastName']);
                        unset($_SESSION['userId']);
                         unset($_SESSION['userInfo']);
       } 
        
        /**
        * @return put return description here..
        * @param param :  parameter passed to function
        * @desc isAuth :  put function description here ... 
        */
        function isAuth()
        {
               if ($_SESSION['auth']) { return true; } else { return false; }


        }

} 
?>