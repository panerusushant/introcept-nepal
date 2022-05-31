<?php



$datas = $app['database']->SelectAll('data');

$comments = $app['database'] ->SelectComment('data', 'comment');


  

require "views/home.php";