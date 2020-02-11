
<!--url /?method`-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3>더하기</h3>
<form action="./controllers/Test3.php?operator=plus" method="post">
    <input type="text" name="one"> + <input type="text" name="two"> = ?
    <br><br><button type="submit" >결과보기</button>
</form>

<br>
<br>
<h3>빼기</h3>
<form action="./controllers/Test3.php?operator=minus" method="post">
    <input type="text" name="one"> - <input type="text" name="two"> = ?
    <br><br><button type="submit" >결과보기</button>
</form>


<br>
<br>
<h3>곱하기</h3>
<form action="./controllers/Test3.php?operator=multiply" method="post">
    <input type="text" name="one"> X <input type="text" name="two"> = ?
    <br><br><button type="submit" >결과보기</button>
</form>

<br>
<br>
<h3>나누기</h3>
<form action="./controllers/Test4.php?operator=division" method="post">
    <input type="text" name="one"> / <input type="text" name="two"> = ?
    <br><br><button type="submit" >결과보기</button>
</form>
</body>
</html>
