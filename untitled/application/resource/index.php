<p>hello world!!</p>

<?php echo 'XHTML나 XML 문서와 호환시키려면 이렇게 쓰세요'; ?>

<script language="php">
    echo '어떤 에디터(프론트페이지같은)는
          처리 명령을 좋아하지 않습니다';
</script>

<? echo '이런 형태가 제일 간단한 SGML 처리명령입니다<br>';?>



<?php
echo 'this is a test'; //한줄짜리 주석
echo '<br>';
/* 여려줄
    주석*/
echo 'This is yet another test';
echo '<br>';

echo 'One Final test'; #한줄주석
echo '<br>';
/*
 * ====================================
 * **  그 밖에 빈값으로 간주하는 것들.
 * "" : 빈문자열
 * 0 : 정수 0
 * "0" : 문자열 0
 * null , false
 * array() : 빈배열
 * var $var; : 클레스안에서 값없이 선언된 변수
 * =====================================
 * ** 변수
 * $name  //유효한 변수선언
 * $nick_name  //유효한 변수선언
 * nick_name  //달러표시로 시작하지 않아 유효하지 않음
 * $nick-name  //특수문자사용으로 유효하지 않음
 * $nick_name more  //빈칸이 포함되어 유효하지 않음
 * $this //$this는 특수 변수로, 할당할 수 없어 유효하지 않음
 *
 * ** 슈퍼 전역변수
 *
 *
 *
 *
 *
 */

echo "<br>";
echo "<br>";
echo "<br>";

 $a = 1;
 function test(){
     global $a;
     echo $a;
 }
echo 'test = '; test();
function test2(){
    static $b = 0;
    echo $b;
    $b++;
}

echo "<br>";
echo "<br>";

echo 'test2 = '; test2();

echo '<br> 숫자++';
echo '<br>';
test2();
echo '<br>';
test2();
echo '<br>';
test2();
echo '<br>';


//include 'subIndex.php'; // $a는 b.php 파일에서도 유효하다.

//for if html 하고 섞어서 하기
//모델 2 해보기!
//view 에서 던져서 프리마커 쓰듯이 해봐라.
?>
