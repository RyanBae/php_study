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
    <form action="/mypage/passwordUpdate" method="post">
        <input type="hidden" name="userId" value="<?= $result['userId']?>">
        <input type="hidden" name="userName" value="<?= $result['userName']?>">
        ID :: <?= $result['userId']?><br>
        PASS :: <input type="text" name="password"><br>
        NEW PASS :: <input type="text" name="newPassword"><br>
        NAME :: <?= $result['userName']?><br><br>
        <button type="submit">정보수정</button>
    </form>
</div>
<a href="/main">홈으로</a>
<a href="">탈퇴하기</a>
</body>
</html>
