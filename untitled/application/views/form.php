<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Title</title>
        </head>
        <body>
        <b>이름과 나이를 입력하세요.</b>
        <form action="/application/gate/gate.php" method="get" >
    ID : <input type="text" name="id" value="<?php echo $id?>"><br>
    비밀번호 : <input type="text" name="password"><br>
    포지션 : <input type="text" name="postion"><br>
    <input type="hidden" name="page" value="update"><br>
        <input type = "submit" value = "submit"/>
        </form>
        </body>
    </html>