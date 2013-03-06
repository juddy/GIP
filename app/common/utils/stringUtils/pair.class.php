<?
class pair
{ 

        // Variables 
        var $value1 ;
        var $value2;


        /**
        * @return returns value of variable $value1 
        * @desc getValue1 : Getting value for variable $value1 
        */
        function getValue1 ()
        {
                return $this->value1 ;
        }

        /**
        * @param param : value to be saved in variable $value1 
        * @desc setValue1 : Setting value for $value1 
        */
        function setValue1 ($value)
        {
                $this->value1 = $value;
        }

        /**
        * @return returns value of variable $value2
        * @desc getValue2 : Getting value for variable $value2
        */
        function getValue2()
        {
                return $this->value2;
        }

        /**
        * @param param : value to be saved in variable $value2
        * @desc setValue2 : Setting value for $value2
        */
        function setValue2($value)
        {
                $this->value2 = $value;
        }

        // This is the constructor for this class
        // Initialize all your default variables here
        function pair($value1,$value2)
        {

                $this->setValue1 ($value1);
                $this->setValue2($value2);
        }


} 

?>