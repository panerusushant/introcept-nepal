<?php



$datas = $app['database']->SelectAll('data');


  

require "views/home.php";