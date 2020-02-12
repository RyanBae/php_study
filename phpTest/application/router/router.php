<?php

echo '<br>';
echo '====router > Router 진입';
echo '<br>';
$dir = $_SERVER['DOCUMENT_ROOT'];

//2번째 방법
//$method = $_SERVER['REQUEST_METHOD'];
$request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));
$parse = parse_url($_SERVER['HTTP_REFERER']);
$cate = ucwords($request[0]);
(isset($request[1])) ? $url = $request[1] : $url = 'main';
$controller = $cate.'Controller';

echo '<br>';
//echo $method;
echo $cate;
echo $url;
echo '<br>';
echo '========================';
echo '<br>';
echo '$_SERVER[\'PATH_INFO\'] :: ';
echo $_SERVER['PATH_INFO'];
echo '<br>';
//echo 'Method :: ';
//echo $method;
echo '<br>';
echo 'Request :: ';
print_r($request);
echo '<br>';
echo '* 앞글자 대문자로 변환 --> ';
echo $cate;
echo '<br>';
echo '* Controller 으로 문자변환 --> ';
echo $controller;
echo '<br>';
echo '* 컨트롤러 내에 메서드 --> ';
echo $url;
echo '<br>';
echo 'Parse :: ';
print_r($parse);
echo '<br>';
echo '========================';
echo '<br>';

require_once $dir.'/application/controllers/'.$controller.'.php';
$met = new $controller();
(isset($_POST)) ? $met->$url($_POST):$met->$url();

//1번째 방법
//$url = $_GET['url'];
//(isset($_GET['cate'])) ? $cate = $_GET['cate'] : $cate = 'main';
//$cate = ucwords($cate);
//$controller = $cate.'Controller';

//
//echo '<br>';
//echo '========================';
//echo '<br>';
//echo '[Router_1]';
//echo '<br>';
//echo 'cate ::'; echo $cate;
//echo '<br>';
////echo 'url ::'; echo $url;
//echo '<br>';
//echo 'controller :: '; echo $controller;
//echo '<br>';
//echo '========================';
//echo '<br>';
//echo '[Router_2]';
//


//switch ($cate){
//    case 'member':
//        require_once $dir.'/application/controllers/Controller.php';
//        $met = new Controller($met);
//        //(isset($_POST)) ? $met->$url($_POST):$met->$url();
//        break;
//
//    case 'mypage':
//        require_once $dir.'/application/controllers/MypageController.php';
//        $met = new MypageController();
//        (isset($_POST)) ? $met->$url($_POST):$met->$url();
//        break;
//
//    default :
//        require_once $dir.'/application/controllers/MainController.php';
//        new MainController();
//        break;
//
//}

