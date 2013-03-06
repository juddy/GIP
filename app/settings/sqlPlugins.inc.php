<?

      define("PLUGIN_SQL_GENERATOR_COMPONENT",PLUGIN_GENERATORS_COMPONENT.FILE_SEPARATOR."sql");      
      define("PLUGIN_SQL_PLUGIN_COMPONENT",PLUGIN_SQL_GENERATOR_COMPONENT.FILE_SEPARATOR."plugins");      

       define("PLUGIN_SQL_COMMON_GENERATOR",PLUGIN_SQL_PLUGIN_COMPONENT.FILE_SEPARATOR."commonSqlGenerator.class.php");  

      define("PLUGIN_SQL_INSERT_GENERATOR_CLASS",PLUGIN_SQL_PLUGIN_COMPONENT.FILE_SEPARATOR."SQLInsertGenerator.plugin.class.php");  
      define("PLUGIN_SQL_INSERT_GENERATOR_NAME","SQLInsertGenerator");              

      define("PLUGIN_SQL_UPDATE_GENERATOR_CLASS",PLUGIN_SQL_PLUGIN_COMPONENT.FILE_SEPARATOR."SQLUpdateGenerator.plugin.class.php");  
      define("PLUGIN_SQL_UPDATE_GENERATOR_NAME","SQLUpdateGenerator");        

      
      define("PLUGIN_SQL_DELETE_GENERATOR_CLASS",PLUGIN_SQL_PLUGIN_COMPONENT.FILE_SEPARATOR."SQLDeleteGenerator.plugin.class.php");  
      define("PLUGIN_SQL_DELETE_GENERATOR_NAME","SQLDeleteGenerator");        
      
      define("PLUGIN_SQL_SELECT_GENERATOR_CLASS",PLUGIN_SQL_PLUGIN_COMPONENT.FILE_SEPARATOR."SQLSelectGenerator.plugin.class.php");  
      define("PLUGIN_SQL_SELECT_GENERATOR_NAME","SQLSelectGenerator");       

      define("PLUGIN_SQL_CREATE_GENERATOR_CLASS",PLUGIN_SQL_PLUGIN_COMPONENT.FILE_SEPARATOR."SQLCreateGenerator.plugin.class.php");  
      define("PLUGIN_SQL_CREATE_GENERATOR_NAME","SQLCreateGenerator");       

      define("PLUGIN_SQL_POPULATED_INSERT_GENERATOR_CLASS",PLUGIN_SQL_PLUGIN_COMPONENT.FILE_SEPARATOR."populatedInsertGenerator.plugin.class.php");  
      define("PLUGIN_SQL_POPULATED_INSERT_GENERATOR_NAME","populatedInsertGenerator");       

?>