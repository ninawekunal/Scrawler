<?php
/**
 * All the scrawler components extends this base class
 * 
 * @package = Scrawler
 * @author = Pranjal Pandey
 * 
 */
 namespace Scrawler\Common;
 class Component
 {
	 public $scrawler;
           function __construct()
            {

                $this->init();
                $this->registerEventHooks();
                $this->registerPages();
            }

			//All initialize task to be performed by this function
			function init()
            {
            }
			
			//Registering events
			function registerEventHooks()
            {
            }
			
			//registering pages
			function registerPages()
            {
            }
 }