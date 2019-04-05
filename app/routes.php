<?php

$app->get('/', 'HomeController:index')->setName('index');
$app->get('/ajax/wotd', 'AjaxController:wotd')->setName('wotd');
$app->get('/ajax/word', 'AjaxController:word')->setName('word');