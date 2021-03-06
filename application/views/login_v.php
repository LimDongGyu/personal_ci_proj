<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Document</title> -->

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/board.css" type="text/css">
</head>
<body>

<div class="container" style="background-color:#444444; height:100vh;">


    <?php
        if(isset($_SESSION['user_status'])){
            //로그인 중인데 로그인 페이지로 접근했을 때, user info 페이지로 이동
            echo "<script>location.href='/info';</script>";
        }
    ?>


    <div class="transparent_box">
        <h2>Login</h2>
        <form action="/process/login" method="POST">
            <div class="transparent_inputBox">
                <input type="text" name="id" required="">
                <label>ID</label>
            </div>
            <div class="transparent_inputBox">
                <input type="password" name="pw" required="">
                <label>Password</label>
            </div>
            <div style="text-align:center;">
                <button type="submit" class="btn btn-primary" style="text-align:center;"> OK</button>
                <button type="button" class="btn btn-primary" onclick="location.href='/index.php'">처음으로</button>
            </div>

            <div style="text-align:right;">
                <a href="/register" style="color:#337ab7">회원가입</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>