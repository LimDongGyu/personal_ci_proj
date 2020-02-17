<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="/css/board.css" type="text/css">
    <!-- <title>Document</title> -->
</head>
<body>
    <div class="container" style="background-color:#444444; height:100vh;">
        <div class="transparent_box">
            <h2>Sign Up</h2>
            <form action="/process/register" method="POST">
                <div class="transparent_inputBox">
                    <input type="text" name="nickname" required="">
                    <label>Name</label>
                </div>           
                <div class="transparent_inputBox">
                    <input type="text" name="id" required="">
                    <label>ID</label>
                </div>
                <div class="transparent_inputBox">
                    <input type="password" name="pw" required="">
                    <label>Password</label>
                </div>            
                <div class="transparent_inputBox">
                    <input type="password" name="pwc" required="">
                    <label>Password Confirm</label>
                </div>
                <div style="text-align:center;">
                    <button type="submit" class="btn btn-primary" style="text-align:center;"> OK</button>
                    <button type="button" class="btn btn-primary" onclick="location.href='/index.php'">처음으로</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>