<?

      define("PLUGIN_JAVA_GENERATOR_COMPONENT",PLUGIN_GENERATORS_COMPONENT.FILE_SEPARATOR."java");      
      define("PLUGIN_JAVA_PLUGIN_COMPONENT",PLUGIN_JAVA_GENERATOR_COMPONENT.FILE_SEPARATOR."plugins");      

       define("PLUGIN_JAVA_COMMON_GENERATOR",PLUGIN_JAVA_PLUGIN_COMPONENT.FILE_SEPARATOR."commonJavaGenerator.class.php");  
             
      
      // EJB GENERATOR PLUGINS  
      define("PLUGIN_JAVA_EJB_COMPONENT",PLUGIN_JAVA_PLUGIN_COMPONENT.FILE_SEPARATOR."ejb");      

       define("PLUGIN_JAVA_COMMON_EJB_GENERATOR",PLUGIN_JAVA_EJB_COMPONENT.FILE_SEPARATOR."commonEjbGenerator.class.php");  
            
      define("PLUGIN_JAVA_EJB_BEAN_GENERATOR_CLASS",PLUGIN_JAVA_EJB_COMPONENT.FILE_SEPARATOR."ejbBeanGenerator.plugin.class.php");  
      define("PLUGIN_JAVA_EJB_BEAN_GENERATOR_NAME","ejbBeanGenerator");        
      
      define("PLUGIN_JAVA_EJB_GENERATOR_CLASS",PLUGIN_JAVA_EJB_COMPONENT.FILE_SEPARATOR."ejbGenerator.plugin.class.php");  
      define("PLUGIN_JAVA_EJB_GENERATOR_NAME","ejbGenerator");  
      
      define("PLUGIN_JAVA_EJB_LOCAL_GENERATOR_CLASS",PLUGIN_JAVA_EJB_COMPONENT.FILE_SEPARATOR."ejbLocalGenerator.plugin.class.php");  
      define("PLUGIN_JAVA_EJB_LOCAL_GENERATOR_NAME","ejbLocalGenerator");  
            
      define("PLUGIN_JAVA_EJB_LOCAL_HOME_GENERATOR_CLASS",PLUGIN_JAVA_EJB_COMPONENT.FILE_SEPARATOR."ejbLocalHomeGenerator.plugin.class.php");  
      define("PLUGIN_JAVA_EJB_LOCAL_HOME_GENERATOR_NAME","ejbLocalHomeGenerator");  
      
      define("PLUGIN_JAVA_EJB_CRUD_GENERATOR_CLASS",PLUGIN_JAVA_EJB_COMPONENT.FILE_SEPARATOR."ejbCrudGenerator.plugin.class.php");  
      define("PLUGIN_JAVA_EJB_CRUD_GENERATOR_NAME","ejbCrudGenerator");        
      
      // TEST GENERATOR PLUGINS
      define("PLUGIN_JAVA_TEST_COMPONENT",PLUGIN_JAVA_PLUGIN_COMPONENT.FILE_SEPARATOR."test");      

       define("PLUGIN_JAVA_COMMON_TEST_GENERATOR",PLUGIN_JAVA_TEST_COMPONENT.FILE_SEPARATOR."commonTestGenerator.class.php");  
      
      
       define("PLUGIN_JAVA_TEST_MOCK_TABLE_LOCAL_HOME_GENERATOR_CLASS",PLUGIN_JAVA_TEST_COMPONENT.FILE_SEPARATOR."mockTableLocalHomeGenerator.plugin.class.php");  
      define("PLUGIN_JAVA_TEST_MOCK_TABLE_LOCAL_HOME_GENERATOR_NAME","mockTableLocalHomeGenerator");  
      
      define("PLUGIN_JAVA_TEST_MOCK_TABLE_LOCAL_GENERATOR_CLASS",PLUGIN_JAVA_TEST_COMPONENT.FILE_SEPARATOR."mockTableLocalGenerator.plugin.class.php");  
      define("PLUGIN_JAVA_TEST_MOCK_TABLE_LOCAL_GENERATOR_NAME","mockTableLocalGenerator");  
      
      define("PLUGIN_JAVA_TEST_TABLE_CRUD_GENERATOR_CLASS",PLUGIN_JAVA_TEST_COMPONENT.FILE_SEPARATOR."testTableCrudGenerator.plugin.class.php");  
      define("PLUGIN_JAVA_TEST_TABLE_CRUD_NAME","testTableCrudGenerator");  
            
      
      
?>