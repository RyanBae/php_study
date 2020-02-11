
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>Hello World!</b>
<p>ID : <?php echo $id;?></p>
<p>비밀번호 : <?php echo $password;?></p>
<p>포지션 :<?php echo $postion;?></p>
<br>

<a href="/application/gate/gate.php?page=form&id=<?php echo $id?>">정보수정</a>

<?php
//
//#상수의 정의
//echo '<h3>상수의 정의</h3>';
//define('title', 'Define ?!');
//echo title;
//echo '<br>';
//
//#변수의 담긴 데이터 형을 검사하고 변경하기.
//echo '<h3>데이터 형 검사, 변환</h3>';
//$a =100;
//echo '$a 의 타입은? = ';
//echo gettype($a);
//settype($a, 'double');
//echo '<br>';
//echo '$a 의 타입을 double 로 바꿈 = ';
//echo gettype($a);
//
//#변수의 데이터 타입
//echo '<h3>변수의 데이터 타입</h3>';
//echo '<br>';
//$b = 100;
//$b = "test";
//$b = array(1,2,3);
//echo $b[0];
//
//#가변 변수
//echo '<h3>가변 변수</h3>';
//echo '<br>';
//$title = 'subject';
//$$title = 'PHP tutorial';
//echo $subject;
//
//#비교 연산자
//echo '<br>';
//echo '<h3>비교 연산자</h3>';
//echo "1==2 : ";
//var_dump(1==2);           #false
//echo '<br />';
//echo "1==1 : ";
//var_dump(1==1);           #true
//echo '<br />';
//echo '"one"=="two" : ';
//var_dump("one"=="two");   #false
//echo '<br />';
//echo '"one"=="one" : ';
//var_dump("one"=="one");   #true
//echo '<br />';
//
//#비교 연산자
//echo '<br>';
//echo '<h3>비교 연산자</h3>';
//
//
//?>
<!---->



</body>
</html>
