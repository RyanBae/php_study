<?php
$docu = $_SERVER["DOCUMENT_ROOT"];
//Location: \application\controllers\Controller::class;
//use application\controllers\Form as form;

$page = $_GET['page'];
if($page=='form'){
    if(isset($_GET['id'])){
        require_once $docu.'/application/controllers/FormController.php';
        new application\controllers\Form\FormController();
    }

}elseif ($page=='update'){
    $data = array('id' => $_GET['id'], 'password'=>$_GET['password'], 'postion'=>$_GET['postion']);
    require_once $docu . '/application/controllers/Member.php';
    $new = new application\controllers\Member($page,$data);
    //$new -> update($data);

    //데이터 처리 하고, 리턴 해서 화면 이동시키기.

}


//use, require, include 공부.
//에러 레벨

# 1. require 이해하기.
# 2. include 이해하기.
# 3. use, namespace 이해하기.

# include, require : 현재 실행 시키는 php 파일에 다른 php 파일을 포함시키려 할때 사용.






#PHP는 외부의 php 파일을 로드하는 방법으로 4가지 형식을 제공한다. 형식의 종류는 아래와 같다.
#include
#include_once
#require
#require_once
#include와 require의 차이점은 존재하지 않는 파일의 로드를 시도했을 때 include가 warning를 일으킨다면
#require는 fatal error를 일으킨다는 점이다. fatal error는 warning 보다 심각한 에러이기 때문에
#require가 include 보다 엄격한 로드 방법이라고 할 수 있다.
#
#_once라는 접미사가 붙은 것은 파일을 로드 할 때 단 한번만 로드하면 된다는

#외부 파일을 포함시키는 함수는 네가지가 있습니다.

#include
#같은 파일 여러 번 포함 가능 / 포함할 파일이 없어도 다음 코드 실행
#- 같은 파일 여러번 안됨!
#include_once
#같은 파일 한 번만 포함 / 포함할 파일이 없어도 다음 코드 실행
#require
#같은 파일 여러 번 포함 가능 / 포함할 파일이 없으면 다음 코드 실행하지 않음
# 같은파일 됨!
#require_once
#같은 파일 한 번만 포함 / 포함할 파일이 없으면 다음 코드 실행하지 않음


?>


