<?php



$datas = $app['database']->SelectAll('posts');

$comments = $app['database'] ->SelectComment( 'comment');


  

require "views/home.php";