<? 
class serializer
{ 
      /**
      * @author Nilesh Dosooye      
       * @version 2.0         
      * @return serialized data
      * @param data to be Serialized
      * @desc Takes in raw Data, serializes it and sends it back to the calling program
      */
     function serializeData($data)
     {
     	 return serialize($data);
     }
     
     
     /**
      * @author Nilesh Dosooye      
      * @version 2.0        
      * @return unSerialized Data
      * @param data to be UnSerialized
      * @desc Takes in Serialized Data, UnSerializes it and sends back raw data to the calling program
      */
     function unSerializeData($data)
     {
     	   return unserialize($data);
     }       
        

} 
?>