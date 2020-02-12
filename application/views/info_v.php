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
    
<?php
    /* session_start();
    $name = $this->session->user_nickname;
    echo $_SESSION['user_nickname']; */

    echo '<strong>'.$_SESSION['user_nickname'].'</strong>님이 작성한 글';

    foreach($posts_user as $list){
        $title = $list->title;
            $id_key = $list->id_key;
            echo '
            <a href="/post/'.$id_key.'"><p>'.$title.'</p></a>
            ';
    }

?>
    </div>
    <div class="paging">
        <p><a href="#">1(차후 페이징 처리)</p>
    </div>
</body>
</html>