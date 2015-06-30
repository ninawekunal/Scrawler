<?php
/**
 * This files starts our engine all files are included and autoloaded here
 * 
 * @package = Scrawler
 * @author = Pranjal Pandey
 * 
 */


//we depend on Symfony ClassLoader for loading our classes
require_once(__DIR__.'/../external/Symfony/Component/ClassLoader/UniversalClassLoader.php');
use Symfony\Component\ClassLoader\UniversalClassLoader;
$loader = new UniversalClassLoader();
$loader->register();


//loading our classes using PSR-0 rules
$loader->registerNamespace('Scrawler', __DIR__.'/../');
$loader->registerNamespace('League', __DIR__.'/../external/');

require(__DIR__.'/../external/Toro.php');

//initialize our main class
$scrawler = new \Scrawler\Core\Scrawler();

