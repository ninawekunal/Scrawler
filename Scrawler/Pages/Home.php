<?php 
/**
 * This serves our homepage
 * 
 * @package = Scrawler
 * @author = Pranjal Pandey
 * 
 */


namespace Scrawler\Pages;
class Home extends \Scrawler\Common\Page
{
       
	    function get() 
		{
			
			 echo $this->t->render('home', array('posts'       => \Scrawler\Core\site()->post()->view(),
			                                'name'        => \Scrawler\Core\site()->config()->name,
										    'description' => \Scrawler\Core\site()->config()->description,));
			
        }
		
		
		
}
