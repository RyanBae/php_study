<?php

//require_once 'application/libs/Application.php';
require_once 'application/controllers/Controller.php';
use \application\controllers\Controller;
new Controller();

//require_once 'application/controllers/Controller.php';


//use, require, include 공부.
//에러 레벨

# 1. require 이해하기.
# 2. include 이해하기.
# 3. use, namespace 이해하기.

# include, require : 현재 실행 시키는 php 파일에 다른 php 파일을 포함시키려 할때 사용.
#
# * include -> 페이지 전체를 삽입, 문서의 구좌와 상관없이 include 한 시점에 해당 문서를 그대로 출력함.
#               만약 include 한 문서가 오류가 있으면 오류가 생긴 문서 내용을 확인 가능함.
#               -> 포함된 파일이 없어도 다음코드가 실행됨.
#               -> 해당 코드에 도달해야만 읽어 오며, 조건문 등에 필요한 경우 파일을 포함할수록 할수 있다.
#
#   error lever :: warning
#
# * require -> 문서 전체를 포함시켜 버리기 때문에 로드한 페이지에 오류가 있어도 로드된 페이지에서 오류가 검출.
#               -> require 한 파일이 없을 경우 에러 발생 하며 다음 코드를 실행 안함.
#               -> 무조건 하나의 파일처럼 require 한 파일을 포함한다. 조건문에서 참,거짓 상관없이 무조건 포함함.
#   error lever :: fatal error
#
#   * _once() -> 한번만 해당 파일을 포함한다. 중복 방지.
#
#  * namespace -> 동일한 이름의 클래스가 있어도 다른 이름의 공간을 통해 격리 시켜 타인이 작성한 코드와의 중복을 덜기 위함.
#  => use 네임스페이스를 기술하기 번거로울 경우  use 키워드 사용.
#
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



# 1. include 실습
# 2. require 실습
# 3. _onee() 실습
# 4. 차이 비교 -> 같은 경로, 다른경로, 각각 다른경로, 에러 발생으로 인한 차이 확인.
# 5. namespace 실습 -> 같은 클래스 이름, 같은 메서드
# 6. use 실습
#
#
#
# info  ->          debug            ->      trace
# warn  ->           error           ->      fatal
#               try/catch 잡을수 있음.         그냥 죽음
#