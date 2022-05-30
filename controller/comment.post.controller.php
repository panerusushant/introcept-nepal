<?php

$app['database'] ->createComment('comment', [
    'comments' => $_POST['comments'],
    'data_id' => $_REQUEST['data_id']
]);

header('Location: /');