<?php


// $datas = $app['database']->ById('data');
// var_dump($datas);
   
$app['database'] ->create('data', [
    'title' => $_POST['title'],
    'content' => $_POST['content']
]);

 header('Location: /');









