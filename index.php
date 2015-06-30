<?php 
/**
 * This is the index file and it all starts here.
 * 
 * 
 * @package = Scrawler
 * @author = Pranjal Pandey
 * 
 */

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
require_once(__DIR__.'/Scrawler/start.php');

 // Temporary ugly error handling for our engine
        ToroHook::add("404",  function() {echo "Scrawler error : page you are trying to load not found" ;});
        ToroHook::add("403",  function() {echo "Scrawler error : page you are trying to load not found" ;});

