<?php
/**
 * All the scrawler Pages extends this base class
 * 
 * @package = Scrawler
 * @author = Pranjal Pandey
 * 
 */
 namespace Scrawler\Common;
 class Page extends \Scrawler\Common\Component
 {
	 public $t;
	 function init()
	 {
		$this->t = \Scrawler\Core\site()->template();
        $site = \Scrawler\Core\site()->config()->site;		
		$this->t->addData(array('site' => $site));
		\Scrawler\Core\site()->session()->start_session('_s', false);
	 }
 }