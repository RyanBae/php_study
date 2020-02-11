<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SingUp</title>
</head>
<body>
<br>

<h2>회원가입</h2>
<br>
<div style="border: solid 1px #191919; width: 200px;">
<br>
<form action="/application/router/router.php/member/user_insert" method="post">
    ID :: <input type="text" name="userId"><br>
    PASS :: <input type="text" name="password"><br>
    NAME :: <input type="text" name="userName"><br><br>
    <button type="submit">가입하기</button>
</form>
</div>
<a href="/application/router/router.php/main">홈으로</a>
</body>
</html>