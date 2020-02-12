<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Document</title> -->
</head>
<body>
    <div class="container">
        <form action="/process/register" method="POST">
            <h4>Sign up</h4>
            <p>Name</p><input type="text" name="nickname"><br />
            <p>Id</p><input type="text" name="id"><br />
            <p>Password</p><input type="text" name="pw"><br />
            <p>Password Confirm</p><input type="text" name="pwc"><br />
            <input type="submit" value="Sign up" class="submit">
        </form>
    </div>
</body>
</html>