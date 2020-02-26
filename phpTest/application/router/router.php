<?php

//echo '==> Router';
//echo '<br>';
$dir = $_SERVER['DOCUMENT_ROOT'];
(isset($_SERVER['PATH_INFO']))?
    $request = explode("/", substr(@$_SERVER['PATH_INFO'], 1)):
    $request[0]='main';
(isset($request[1])) ? $url = $request[1] : $url = 'main';
$controller = ucwords($request[0]).'Controller';

//컨트롤러 파일 체크
$requireCheck = false;
if(file_exists($dir.'/application/controllers/'.$controller.'.php')){
    require_once $dir.'/application/controllers/'.$controller.'.php';
    //메서드 체크
    if(!method_exists(new $controller,$url)){
  //      echo '*** Not Found Method ****';
        $requireCheck = true;
    }
}else{
 //   echo '**** Not Found Controller ****';
    $requireCheck = true;
}

//200으로 정상 처리 됨. -> 404로 에러로 바꿔서 에러 떨구기
if(isset($request[2])){
 //   echo '**** Invalid url  ****';
    $requireCheck = true;
}

if($requireCheck==true){
    header("HTTP/1.0 404 Not Found");
    exit();
//    $controller = 'MainController';
//    $url = 'error';
//    require_once $dir.'/application/controllers/'.$controller.'.php';
}
$con = new $controller;
$con->$url();


//메서드 파일 체크
//echo '<br>';
//require_once $dir.'/application/controllers/'.$controller.'.php';
//$con = new $controller;
//var_dump(get_class_methods($con));
//
//var_dump(method_exists($con,$url));
//if(!method_exists($con,$url)){
//    $controller = 'MainController';
//    $url = 'error';
//}



//
//var_dump($con);
//var_dump(get_class_methods($con));
//$functionArray = get_class_methods($con);
//$functionArrayCount = count($functionArray);
//echo $functionArray;
//echo $functionArrayCount;

//
//foreach ($functionArray as $value){
//    echo "<br>";
//    if($value==$url){
//        echo 'found url!';
//        break;
//    }else{
//        echo 'not found url';
//    }
//}
//$con->$url();
//echo '<br>';
//print_r($_GET);
//print_r($_POST);
////$getCount = ;
////$postCount = ;
//echo '<br>';
//echo 'GET 의 카운터 : '.count($_GET);
//echo '<br>';
//echo 'POST 의 카운터 : '.count($_POST);
//
//$method = '';
//(count($_POST) > 0) ?
//    $method = 'post': $method = 'get';
//
//echo '<br>';
//echo 'method :: '.$method;
//
//echo '<br>';


//$met = new $controller();
//print_r($met->$url());
//if(function_exists($met->$url())){
//    echo "있다";
//}else{
//    echo "없다";
//}
//


//$met->$url();
//echo '======!!!!!!';
//(count($_POST) != 0) ? $met->$url($_POST):$met->$url();
//($method == 'post') ? $met->$url($_POST):$met->$url();


//echo '======================== log';
//echo '<br>';
////echo $method;
//echo $cate;
//echo $url;
//echo '<br>';
//echo '========================';
//echo '<br>';
//echo '$_SERVER[\'PATH_INFO\'] :: ';
////echo $_SERVER['PATH_INFO'];
//echo '<br>';
////echo 'Method :: ';
////echo $method;
//echo '<br>';
//echo 'Request :: ';
//print_r($request);
//echo '<br>';
//echo '* 앞글자 대문자로 변환 --> ';
//echo $cate;
//echo '<br>';
//echo '* Controller 으로 문자변환 --> ';
//echo $controller;
//echo '<br>';
//echo '* 컨트롤러 내에 메서드 --> ';
//echo $url;
//echo '<br>';
////echo 'Parse :: ';
////print_r($parse);
//echo '<br>';
//echo '========================';
//echo '<br>';
//echo '======================== log end';



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

