<?php 
/**
 * all routing is done here.
 * 
 * @package = Scrawler
 * @author = Pranjal Pandey
 * 
 */

namespace Scrawler\Core;
use Toro;
class Routes 
{
	function __construct()
	{
		      
        $p = "Scrawler\Pages";

        Toro::serve(array(
        "/" => "$p\Home",
        "/admin" => "$p\Admin",
        "/logout" => "$p\Logout",
	    "/delete/:number" => "$p\Delete",
	    "/setup" => "Blogo\Setup\Start",
	    "/setup/user" => "Blogo\Setup\User",
	    "/upload" => "Blogo\Setup\Upload",
	    "/setup/end" => "Blogo\Setup\End"
   
    ));
	}
}