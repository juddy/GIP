<? 
class searchItem
{ 

        // Variables 
        // searchField  field from table 
        var $searchField;
        // searchCondition  field from table 
        var $searchCondition;
        // searchTerms  field from table 
        var $searchValues;
        // this is field is to separate the different searchValues e.g
        // e.g ((searchField1 == value1) or (searchField1 == value2)) or is the inneroperand
        var $innerOperand;
        // outerOperand  field from table 
        var $outerOperand;
        
        // Usually extra Brackets
        var $prefix ;
        var $suffix;

        /**
        * @return returns value of variable $searchField 
        * @desc getSearchField : Getting value for variable $searchField 
        */
        function getSearchField ()
        {
                return $this->searchField ;
        }

        /**
        * @param param : value to be saved in variable $searchField 
        * @desc setSearchField : Setting value for $searchField 
        */
        function setSearchField ($value)
        {
                $this->searchField  = $value;
        }

        /**
        * @return returns value of variable $searchCondition 
        * @desc getSearchCondition : Getting value for variable $searchCondition 
        */
        function getSearchCondition ()
        {
                return $this->searchCondition ;
        }

        /**
        * @param param : value to be saved in variable $searchCondition 
        * @desc setSearchCondition : Setting value for $searchCondition 
        */
        function setSearchCondition ($value)
        {
                $this->searchCondition  = $value;
        }

        /**
        * @return returns value of variable $searchTerms 
        * @desc getSearchTerms : Getting value for variable $searchTerms 
        */
        function getSearchValues ()
        {
                return $this->searchValues ;
        }

        /**
        * @param param : value to be saved in variable $searchTerms 
        * @desc setSearchTerms : Setting value for $searchTerms 
        */
        function setSearchValues ($value)
        {
                $this->searchValues  = $value;
        }
        
        
        /**
        * @return returns value of variable $innerOperand 
        * @desc getInnerOperand : Getting value for variable $innerOperand 
        */
        function getInnerOperand ()
        {
                return $this->innerOperand ;
        }

        /**
        * @param param : value to be saved in variable $innerOperand 
        * @desc setInnerOperand : Setting value for $innerOperand 
        */
        function setInnerOperand ($value)
        {
                $this->innerOperand  = $value;
        }

        /**
        * @return returns value of variable $outerOperand 
        * @desc getOuterOperand : Getting value for variable $outerOperand 
        */
        function getOuterOperand ()
        {
                return $this->outerOperand ;
        }

        /**
        * @param param : value to be saved in variable $outerOperand 
        * @desc setOuterOperand : Setting value for $outerOperand 
        */
        function setOuterOperand ($value)
        {
                $this->outerOperand  = $value;
        }


        /**
        * @return returns value of variable $prefix 
        * @desc getPrefix : Getting value for variable $prefix 
        */
        function getPrefix ()
        {
                return $this->prefix ;
        }

        /**
        * @param param : value to be saved in variable $prefix 
        * @desc setPrefix : Setting value for $prefix 
        */
        function setPrefix ($value)
        {
                $this->prefix  = $value;
        }

        /**
        * @return returns value of variable $suffix
        * @desc getSuffix : Getting value for variable $suffix
        */
        function getSuffix()
        {
                return $this->suffix;
        }

        /**
        * @param param : value to be saved in variable $suffix
        * @desc setSuffix : Setting value for $suffix
        */
        function setSuffix($value)
        {
                $this->suffix = $value;
        }

        
        function searchItem($searchField="",$searchValues="",$searchCondition="",$outerOperand="",$innerOperand="",$prefix="",$suffix="")
        {
        	
            if ($searchCondition=="")
            {
            	  $searchCondition = " = ";
            }
            
            if ($outerOperand=="")
            {
                 $outerOperand = " and ";	
            }

            if ($innerOperand=="")
            {
                 $innerOperand = " or ";	
            }            
            
            if (!is_array($searchValues))
            {
                $searchValuesArray[] = $searchValues;	
            }
            else
            {
               $searchValuesArray = $searchValues;	
            }
            
           $this->setSearchValues($searchValuesArray);
           $this->setSearchField($searchField);
           $this->setSearchCondition($searchCondition);
           $this->setInnerOperand($innerOperand);
           $this->setOuterOperand($outerOperand);
           $this->setPrefix($prefix);
           $this->setSuffix($suffix);
             
        }

} 

?> 