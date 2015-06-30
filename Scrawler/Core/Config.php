<?php
/**
 * Scrawler configurations
 * 
 * @package = Scrawler
 * @author = Pranjal Pandey
 * 
 */
 namespace Scrawler\Core;
 class Config extends \Scrawler\Common\Component
 {
	 public $config = array();
	 
	 function init()
	 {
		
		 $data = \Scrawler\Core\site()->db()->get_site();
		 $this->config = array(
		 'site' =>  $data[0],
	     'name' =>  $data[1],
	     'description' => $data[2],
	      );
	 }
	 
	 function &__get($name)
     {
        return $this->config[$name];
     }
	 
 }