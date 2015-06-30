<?php 
/**
 * This serves our admin panel
 * 
 * @package = Scrawler
 * @author = Pranjal Pandey
 * 
 */


namespace Scrawler\Pages;
class Admin extends \Scrawler\Common\Page
{
       
	    function get() 
		{
			if(isset($_SESSION['admin']) && $_SESSION['admin'] == '1')
			{	
			 echo "success";
			}
			else
			{
			 echo $this->t->render('login');	
			}
        }
		
		function post()
		{
			if(isset($_POST['email']) && isset($_POST['password'])){
			$email=$_POST['email'];
			$password=$_POST['password'];
			$login= \Scrawler\Core\site()->db()->login($email,$password);
			if($login)
			{
				header('Location: http://'.$_SERVER['SERVER_NAME'].'/admin');
			}
			
			}
			
		}
						
}

