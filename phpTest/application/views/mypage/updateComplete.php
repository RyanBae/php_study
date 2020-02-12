<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complete</title>
</head>
<body>
<br>

<h2>비밀번호수정 완료</h2>
<br>
<div style="border: solid 1px #191919; width: 200px;">
    <br>
    ID :: <?= $result['userId'];?>
    <br>
    PASS :: <?= $result['password'];?>
    <br>
    NAME :: <?= $result['userName'];?>
    <br><br>
</div>
<a href="/member/login">login</a>
<a href="/main">홈으로</a>
</body>
</html>