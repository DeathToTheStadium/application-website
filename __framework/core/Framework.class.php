<?php
class Framework 
{
   // code goes here...
   public static function run()
   {
      //  echo "run";
      self :: init();
      self :: autoload();
      self :: dispatch();
   }
   //Initialize

   public static function init()
   {
      // Defining Main directory Constants
      define('DS',DIRECTORY_SEPARATOR);
      define('Dir',getcwd().DS);

      // Defining Known Folder Paths
      define("APP_PATH",Dir.'__application'.DS);
      define("FRAMEWORK_PATH",Dir.'__framework'.DS);
      define("PUBLIC_PATH",Dir.'__public'.DS);

      // __application paths

      define("CONFIG",APP_PATH.'config'.DS);
      define("CONTROLLER",APP_PATH.'controllers'.DS);
      define("MODEL",APP_PATH.'models'.DS);
      define("VIEW",APP_PATH.'views'.DS);

      // __framework paths
      define("COR",FRAMEWORK_PATH.'core'.DS);
      define("DB",FRAMEWORK_PATH.'database'.DS);
      define("HELP",FRAMEWORK_PATH.'helpers'.DS);
      define("LIB",FRAMEWORK_PATH.'libraries'.DS);

      //__public paths

      define("CSS".PUBLIC_PATH.'css'.DS);
      define("IMG".PUBLIC_PATH.'images'.DS);
      define("JS".PUBLIC_PATH.'js'.DS);
      define("UPLOAD".PUBLIC_PATH.'uploads'.DS);

      // Define platform, controller, action, for example:

    // index.php?p=admin&c=Goods&a=add

    define("PLATFORM", isset($_REQUEST['p']) ? $_REQUEST['p'] : 'home');

    define("CONTROLLER", isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Index');

    define("ACTION", isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index');


    define("CURR_CONTROLLER_PATH", CONTROLLER_PATH . PLATFORM . DS);

    define("CURR_VIEW_PATH", VIEW_PATH . PLATFORM . DS);


    // Load core classes

    require CORE_PATH . "Controller.class.php";

    require CORE_PATH . "Loader.class.php";

    require DB_PATH . "Mysql.class.php";

    require CORE_PATH . "Model.class.php";


    // Load configuration file

    $GLOBALS['config'] = include CONFIG_PATH . "config.php";


    // Start session

    session_start();

   }
    // Autoloading
   public static function autoload()
   {
      spl_autoload_register(array(__CLASS__,'load'));
   }

   function load()
   {
       // Here simply autoload app’s controller and model classes

    if (substr($classname, -11) == "Controller"){

      // Controller

      require_once CURR_CONTROLLER_PATH . "$classname.class.php";

  } elseif (substr($classname, -5) == "Model"){

      // Model

      require_once  MODEL_PATH . "$classname.class.php";

  }
   }
    
   public static function dispatch()
   {
       
   }

   // Define a custom load method

}