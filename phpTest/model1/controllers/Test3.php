<?php

$operator = $_GET['operator'];
echo 'Operator :: ';
echo $operator;
$one = $_POST['one'];
$two = $_POST['two'];
echo '<br>';
echo 'Test3 Controller';

if($operator =='plus'){
    $result = $one + $two;
    $data=array('result'=>$result, 'one'=>$one, 'two'=>$two);
    require_once $_SERVER['DOCUMENT_ROOT'].'/model1/moTest2.php';

}else if($operator == 'minus'){
    $result = $one - $two;
    $data=array('result'=>$result, 'one'=>$one, 'two'=>$two);
    require_once $_SERVER['DOCUMENT_ROOT'].'/model1/moTest3.php';

}else if($operator == 'multiply'){
    $result = $one * $two;
    $data=array('result'=>$result, 'one'=>$one, 'two'=>$two);
    require_once $_SERVER['DOCUMENT_ROOT'].'/model1/moTest4.php';

}else if($operator == 'division'){
    $result = $one / $two;
    $data=array('result'=>$result, 'one'=>$one, 'two'=>$two);
    require_once $_SERVER['DOCUMENT_ROOT'].'/model1/moTest5.php';
}


