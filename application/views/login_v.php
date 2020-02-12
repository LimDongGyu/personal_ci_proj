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
</head>
<body>

<div class="container">
    <div class="row justify-content-center" style="padding-top:50px">
        <form action="/process/login" method="POST">
        <!--    <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholer="Please your id">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholer="Please your password">
                </div>
            </div> -->
            


            <div class="form-group">
            <h4>Login</h4>
            </div>
            <p>ID</p><input type="text" class="form-control" name ="id"><br />
            </div>
            <div class="form-group row">
            <p>PASSWORD</p><input type="text"  class="form-control"name="pw"><br />
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary"> Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>