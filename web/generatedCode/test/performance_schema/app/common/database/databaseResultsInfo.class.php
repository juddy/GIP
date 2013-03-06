<? 
class databaseResultsInfo
{ 

        var $resultsArray ;
        var $totalNumberOfRows ;
        var $currentNumberOfRows ;
        var $totalPages ;
        var $currentPage ;
        var $start ;
        var $limit;
        var $sortedBy;
        var $sortOrder;
        var $fieldsReturned;

        /**
        * @return returns value of variable $resultsArray 
        * @desc getResultsArray : Getting value for variable $resultsArray 
        */
        function getResultsArray ()
        {
                return $this->resultsArray ;
        }

        /**
        * @param param : value to be saved in variable $resultsArray 
        * @desc setResultsArray : Setting value for $resultsArray 
        */
        function setResultsArray ($value)
        {
                $this->resultsArray  = $value;
        }

        /**
        * @return returns value of variable $totalNumberOfRows 
        * @desc getTotalNumberOfRows : Getting value for variable $totalNumberOfRows 
        */
        function getTotalNumberOfRows ()
        {
                return $this->totalNumberOfRows ;
        }

        /**
        * @param param : value to be saved in variable $totalNumberOfRows 
        * @desc setTotalNumberOfRows : Setting value for $totalNumberOfRows 
        */
        function setTotalNumberOfRows ($value)
        {
                $this->totalNumberOfRows  = $value;
        }

        /**
        * @return returns value of variable $currentNumberOfRows 
        * @desc getCurrentNumberOfRows : Getting value for variable $currentNumberOfRows 
        */
        function getCurrentNumberOfRows ()
        {
                return $this->currentNumberOfRows ;
        }

        /**
        * @param param : value to be saved in variable $currentNumberOfRows 
        * @desc setCurrentNumberOfRows : Setting value for $currentNumberOfRows 
        */
        function setCurrentNumberOfRows ($value)
        {
                $this->currentNumberOfRows  = $value;
        }

        /**
        * @return returns value of variable $totalPages 
        * @desc getTotalPages : Getting value for variable $totalPages 
        */
        function getTotalPages ()
        {
                return $this->totalPages ;
        }

        /**
        * @param param : value to be saved in variable $totalPages 
        * @desc setTotalPages : Setting value for $totalPages 
        */
        function setTotalPages ($value)
        {
                $this->totalPages  = $value;
        }

        /**
        * @return returns value of variable $currentPage 
        * @desc getCurrentPage : Getting value for variable $currentPage 
        */
        function getCurrentPage ()
        {
                return $this->currentPage ;
        }

        /**
        * @param param : value to be saved in variable $currentPage 
        * @desc setCurrentPage : Setting value for $currentPage 
        */
        function setCurrentPage ($value)
        {
                $this->currentPage  = $value;
        }

        /**
        * @return returns value of variable $start 
        * @desc getStart : Getting value for variable $start 
        */
        function getStart ()
        {
                return $this->start ;
        }

        /**
        * @param param : value to be saved in variable $start 
        * @desc setStart : Setting value for $start 
        */
        function setStart ($value)
        {
                $this->start  = $value;
        }

        /**
        * @return returns value of variable $limit
        * @desc getLimit : Getting value for variable $limit
        */
        function getLimit()
        {
                return $this->limit;
        }

        /**
        * @param param : value to be saved in variable $limit
        * @desc setLimit : Setting value for $limit
        */
        function setLimit($value)
        {
                $this->limit = $value;
        }

        /**
        * @return returns value of variable $sortedBy
        * @desc getSortedBy : Getting value for variable $sortedBy
        */
        function getSortedBy()
        {
                return $this->sortedBy;
        }

        /**
        * @param param : value to be saved in variable $sortedBy
        * @desc setSortedBy : Setting value for $sortedBy
        */
        function setSortedBy($value)
        {
                $this->sortedBy = $value;
        }        

        /**
        * @return returns value of variable $sortOrder
        * @desc getSortOrder : Getting value for variable $sortOrder
        */
        function getSortOrder()
        {
                return $this->sortOrder;
        }

        /**
        * @param param : value to be saved in variable $sortOrder
        * @desc setSortOrder : Setting value for $sortOrder
        */
        function setSortOrder($value)
        {
                $this->sortOrder = $value;
        }



        /**
        * @return returns value of variable $fieldsReturned
        * @desc getFieldsReturned : Getting value for variable $fieldsReturned
        */
        function getFieldsReturned()
        {
                return $this->fieldsReturned;
        }

        /**
        * @param param : value to be saved in variable $fieldsReturned
        * @desc setFieldsReturned : Setting value for $fieldsReturned
        */
        function setFieldsReturned($value)
        {
                $this->fieldsReturned = $value;
        }
        
} 

?>