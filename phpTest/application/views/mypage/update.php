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

<h2>MY PAGE</h2>
<h3>정보수정</h3>
<br>
<div style="border: solid 1px #191919; width: 300px;">
    <br>
    <form action="/application/router/router.php/member/user_insert" method="post">
        ID :: <?= $result['userId']?><br>
        PASS :: <input type="text" name="password"><br>
        NEW PASS :: <input type="text" name="newPassword"><br>
        NAME :: <?= $result['userName']?><br><br>
        <button type="submit">정보수정</button>
    </form>
</div>
<a href="/application/router/router.php/main">홈으로</a>
<a href="">탈퇴하기</a>
</body>
</html>
