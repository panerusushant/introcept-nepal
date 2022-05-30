<?php

 //Router object

// $router->define([
//     '' => 'controller/home.controller.php',
    
//     'create' =>'controller/post.controller.php'

// ]);



$router -> get('', 'controller/home.controller.php');

$router -> post('create', 'controller/data.post.controller.php');

 $router -> post('edit', 'controller/data.update.controller.php');

 $router -> post('delete', 'controller/data.delete.controller.php');

 $router -> post('comments', 'controller/comment.post.controller.php');



// var_dump($router->routes);