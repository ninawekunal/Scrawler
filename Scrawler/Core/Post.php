<?php
/**
 * Scrawler configurations
 * 
 * @package = Scrawler
 * @author = Pranjal Pandey
 * 
 */
 namespace Scrawler\Core;
 class Post extends \Scrawler\Common\Entity
 {
    
	function __construct()
	{
	
	}
	
    function add($title,$post)
    {
			$title = $_POST['title'];
			$body = $_POST['body'];
			$add = site()->db()->add_article($title,$body);
			if($add)
			{
				$artile= array();
				$article[0]= $title;
				$article[1]= $post;
				site()->emitter()->emit('article.add', $article);
			}
	} 

    function view()
    {
		$post= site()->db()->get_articles();
		return $post;
	}	
	 
	
 }