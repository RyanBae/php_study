<?php
#include ('in_2.php');

#$_SERVER["DOCUMENT_ROOT"] -> 프로젝트 까지의 최상위 루트 폴더.
#include ($_SERVER["DOCUMENT_ROOT"].'/inRe2/in_1.php');
//echo $_SERVER["DOCUMENT_ROOT"];
#include (dirname(__DIR__) . '/include/in_1.php');

#require 'inRe/views/in_2.php';

#echo $_SERVER['DOCUMENT_ROOT']; :: 최상단 부터 프로젝트 까지의 절대경로 출력.
#echo dirname(__DIR__); #최 상단 부터 현재 파일의 속한 상위 폴더까지'만' 경로 출력.
#$dir = dirname(__DIR__);
#namespace includes\in_3;
#namespace views\in_2;
#use includes\in_3 as in2;
#$dir1 = (realpath(__DIR__.'/../..'.'/inRe2/in_1.php' ));
#$dir2 = 'in_2.php';
#
#
#
#echo $dir;
#echo '<br>';
#echo $dir2;
//echo '<br>';
#중복이 가능함. 중간에 include 한 파일이 문제가 있어도 다음 코드 진행됨.
#include $dir2;
#include_once $dir1; #같은 파일을 include 하는 경우 이미 있으면 include하지 않음.
                    # _once 이후 include할 경우엔 중복되어도 include 함.(순서는 require, require_once도 같음.)

#echo in2/test();

#include_once $dir2;
#echo test();
#echo test();
#include $dir2;
#nclude $dir2;
#include 'in_3.php'; #없는 파일.
#include 'in_2.php';

#require $dir2;
#require_once 'in_2.php';
#require 'in_2.php';

//require_once realpath(__DIR__.'/../..'.'/inRe2/in_1.php');
//절대
//require_once '';
//상대경로
require_once '../../inRe2/in_1.php';

# / : 루트
# ./ : 현재위치
# ../ : 현재위치의 상단 폴더
# ../../ : 현재위치 상단의 상단

//require_once './inRe/include/in_2.php';
//require 'in_4.php';
//require_once realpath(__DIR__.'/..'.'/include/in_3.php');
//상대경로
require_once '../include/in_3.php';
require_once '../../application/resource/en_us.php';

use inRe2\in_1 as i1;
use includes\in_2 as i2;
use view\in_2 as i3;
//use lan\en as en;


echo '<br>';
echo i1\test();
echo '<br>';
echo i2\test();
echo '<br>';
echo lan\en\welcome();
//echo i3\test();
use lan\ko as ko;

echo '<br>';
include_once '../../application/views/ko_us.php';
echo '<br>';
//echo lan\ko\welcome();
echo '<br>';
$ko = ko\welcome();
echo $ko;

echo '<br>';
#echo dirname(__FILE__); #최 상단 부터 현재 파일의 속한 폴더 까지의 현재 경로 출력.
echo '======<br>';
echo 'body';
echo '<br>======';
?>