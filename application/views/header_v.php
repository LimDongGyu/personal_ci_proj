<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <title>Test Board</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link type="text/css" rel='stylesheet' href="/todo/include/css/bootstrap.css" />

        <!-- bootstrap cdn -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="/public/js/ckeditor2/ckeditor.js"></script>

    </head>

    <body>
        <div id="main">
            <header id="header" data-role="header" data-position="fixed">
                <blockquote>
                    <p>
                        Create Board Using CodeIgniter
                    </p>
                    <small>Execute example</small>
                </blockquote>
            </header>

<?php
    $url = uri_string();
    $url_string = explode('/', $url);
    $url = $url_string[0];

    // session_start();

    /**
     * ! Login
     */
    //사용자 세션 정보가 있을 때,
    if(isset($_SESSION['user_status'])){
        if($_SESSION['user_status']){
            $user_print = '
            <div class="container">
                <div class="col-row align-items-center">
                    <div class="col-sm-2 btn btn-light discable">
                        사용자
                    </div>
                    <div class="col-sm-2 btn btn-light">
                        <a href="/info">'.$_SESSION['user_nickname'].'</a>
                    </div>
                    <div class="col-sm-2">
                        <a class="btn btn-primary btn-block"; href="/write">글쓰기</a>
                    </div>
                </div>
            </div>
            <div style="margin-bottom:20px;"></div>
            ';
            $auth_print = 0;
        }else{
            $user_print = '';
            $auth_print = 1;
        }
    }else{
        $user_print = '';
        $auth_print = 1;
    }
    if($url == ''){
        echo $user_print;
        if($auth_print){
            echo '
            <a href="/login"    class="btn btn-primary">로그인</a>
            <a href="/register" class="btn btn-primary">회원가입</a>
            </div>
            ';
        }else{
        }
    }
    else if($url == 'main'){        
        echo $user_print;
        //main page
        echo '
            <a href="/login"    class="btn btn-primary">로그인</a>
            <a href="/register" class="btn btn-primary">회원가입</a>
            ';
    }
    else if($url == 'login'){        
        echo $user_print;
        if($auth_print){
            
            echo '
            <a href="/register"  class="btn btn-primary">회원가입</a>
            <a href="/index.php" class="btn btn-primary">목록보기</a>
            ';
        }else{
            //login 상태
            echo '
            <a href="/index.php" class="btn btn-primary">목록보기</a>
            ';
        }
    }
    else if($url == 'register'){
        echo $user_print;
        echo '
        <a href="/main/board" class="btn btn-primary">목록보기</a>
        ';
    }
    else if($url == 'info'){
        echo $user_print;
        echo '
        <a href="/index.php" class="btn btn-primary">목록보기</a> 
        <a href="/process/logout" class="btn btn-primary">로그아웃</a> 
        <a href="/process/withdrawal" class="btn btn-primary">회원탈퇴</a>
        ';
    }else if ($url == 'post'){
        echo $user_print;
        echo '
        <a href="/index.php" class="btn btn-primary">목록보기</a>
        ';
    }
    else if ($url == 'write'){
        echo $user_print;
        echo '
        <a href="/index.php" class="btn btn-primary">목록보기</a>
        ';
    }
    else if ($url == 'edit'){
        echo $user_print;
        echo '
        <a href="/index.php class="btn btn-primary"">목록보기</a>
        ';
    }
?>
        </div>
            <!-- <nav id="gnb">
                <ul>
                    <li>
                        <a rel="external" href="<?php echo $this -> uri -> segment(1); ?>/lists/<?php echo $this -> uri -> segment(3); ?>"> 게시판 프로젝트 </a>
                    </li>
                </ul>
            </nav> -->
    </body>
</html>