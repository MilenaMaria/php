<?php
require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;
// config
$config = array(
    // "tpl_dir"       => "templates/simple/",
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
    // "debug"         => false, // set to false to improve the speed
);
Tpl::configure( $config );
// Add PathReplace plugin (necessary to load the CSS with path replace)
// Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );
// crianco obj tpl
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Pessoa" );
$tpl->assign( "version", PHP_VERSION );
// assign an array
// $tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
// draw the template
$tpl->draw( "index" );
// padrão é .html


?>
