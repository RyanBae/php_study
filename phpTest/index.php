<?php

echo 'index?';
echo '<br>';
echo $_SERVER['PATH_INFO'];
echo '<br>';
require_once $_SERVER['DOCUMENT_ROOT'] . '/application/router/router.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/application/controllers/MainController.php';
//new MainController();
//라우터 url 겟 if else 말고 바로 메서드 호출 시키게.

