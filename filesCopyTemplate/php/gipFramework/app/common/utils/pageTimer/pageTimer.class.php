<? 
class pageTimer
{

        // Variables 
        var $timeTaken ;
        var $startTime ;
        var $endTime;


        /**
        * @return returns value of variable $timeTaken 
        * @desc getTimeTaken : Getting value for variable $timeTaken 
        */
        function getTimeTaken ()
        {
                return $this->timeTaken ;
        }

        /**
        * @param param : value to be saved in variable $timeTaken 
        * @desc setTimeTaken : Setting value for $timeTaken 
        */
        function setTimeTaken ($value)
        {
                $this->timeTaken = $value;
        }

        /**
        * @return returns value of variable $startTime 
        * @desc getStartTime : Getting value for variable $startTime 
        */
        function getStartTime ()
        {
                return $this->startTime ;
        }

        /**
        * @param param : value to be saved in variable $startTime 
        * @desc setStartTime : Setting value for $startTime 
        */
        function setStartTime ($value)
        {
                $this->startTime = $value;
        }

        /**
        * @return returns value of variable $endTime
        * @desc getEndTime : Getting value for variable $endTime
        */
        function getEndTime()
        {
                return $this->endTime;
        }

        /**
        * @param param : value to be saved in variable $endTime
        * @desc setEndTime : Setting value for $endTime
        */
        function setEndTime($value)
        {
                $this->endTime = $value;
        }

        
        	    
        
        function startTimer()
        {
        	   $mtime = microtime();
                  $mtime = explode(" ",$mtime);
                  $mtime = $mtime[1] + $mtime[0];
                  $this->setStartTime($mtime);
        }
        
        function endTimer()
        {
        	   $mtime = microtime();
                  $mtime = explode(" ",$mtime);
                  $mtime = $mtime[1] + $mtime[0];
                  $this->setEndTime($mtime);
        }
        
        function findTimeTaken()
        {
             $timeTaken = $this->getEndTime() - $this->getStartTime();
             $this->setTimeTaken($timeTaken);	
        }
        
        function displayTimeTaken()
        {
               $this->findTimeTaken();
               
               echo "Page Execution Time : ".$this->getTimeTaken()." seconds";	
        }
}

?>