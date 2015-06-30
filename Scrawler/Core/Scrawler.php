<?php
/**
 * Base Scrawler class
 * 
 * @package = Scrawler
 * @author = Pranjal Pandey
 * 
 */
 namespace Scrawler\Core;
 class Scrawler extends \Scrawler\Common\Component
 {
	 public static $site;
	 public $emitter;
	 public $filesystem;
	 public $template;
	 public $config;
	 public $session;
	 public $routes;
	 public $db;
	 public $rand;
	 public $post;
	 
	 function init()
	 {
	   self::$site = $this; 
	   $this->emitter = new \League\Event\Emitter();
	   $this->filesystem = new \League\Flysystem\Filesystem(new \League\Flysystem\Adapter\Local(__DIR__.'/../../'));
	   $this->template= new \League\Plates\Engine(__DIR__.'/../../templates','sct');
	   $this->db = new Database();	
       $this->post = new Post();	   
	   $this->session= new Session();  
	   $this->config= new Config();
	   $this->routes = new Routes();
	  
	 }
    
	 
	
	 function &post()
	 {
		 return $this->post;
	 }
	 
	 function &emitter()
	 {
		 return $this->emitter;
	 }
	 
	 function &filesystem()
	 {
		 return $this->filesystem;
	 }
	 
	 function &template()
	 {
		 return $this->template;
	 }
	 
	 function &config()
	 {
		 return $this->config;
	 }
	 
	 function &session()
	 {
		 return $this->session;
	 }
	 
	 function &routes()
	 {
		 return $this->routes;
	 }
	 
	 function &db()
	 {
		 return $this->db;
	 }
	 
	
}	 
	 function &site()
     {
         return \Scrawler\Core\Scrawler::$site;
     }
	  
 