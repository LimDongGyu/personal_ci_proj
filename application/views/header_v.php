<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <title>Test Board</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- <link type="text/css" rel='stylesheet' href="/todo/include/css/bootstrap.css" /> -->

        <!-- bootstrap cdn -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <!-- <script src="/public/js/ckeditor2/ckeditor.js"></script> -->
        <script src="/js/sample.js" type="text/javascript"></script>   
        <!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->
        <link rel="stylesheet" href="/css/board.css" type="text/css">

        <script>
            $(function() {
                var pull    = $('#pull');
                    menu    = $('nav ul');
                    menuHeight  = menu.height();
                    $(pull).on('click', function(e) {
                        e.preventDefault();
                        menu.slideToggle();
                    });
            });

            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            }); 
        </script>
    </head>
<body>
    <div class="wrapper">
        <header>
            <div class="header-section1">
                <img src="/img/logo.png" alt="LOGO SAMPLE" class="logo">
                <nav>
                    <ul class="nav_links">
                        <li><a href="/android">Android</a></li>
                        <li><a href="login">로그인</a></li>
                        <li><a href="/main/board">게시판</a></li>
                        <li><a href="/template">탬플릿</a></li>
                    </ul>
                </nav>
                <a href="#" class="cta"><button>Contact</button></a>
            </div>
            <div class="header-section2"></div>
            <div class="nav-horizon">
                <ul>
                    <li><a href="/android" style="margin-left:5px;">안드로이드</a></li>
                    <li><a href="/login">로그인</a></li>
                    <li><a class="active" href="/main/board">게시판</a></li>
                    <li><a href="/template">탬플릿</a></li>
                    <li><a href="#">샘플</a></li>
                </ul>
            </div>
            <?php                
                    $url = uri_string();
                    $url_string = explode('/', $url);
                    $url = $url_string[0];
                ?>
                
                <form action="">
                    <input type="hidden" id="user_status_isset" name="user_status_isset" value="<?=isset($_SESSION['user_status'])?>">
                    <input type="hidden" id="user_status" name="user_status" value="<?=$_SESSION['user_status']?>">
                    <input type="hidden" id="user_nickname" name="user_nickname" value="<?=$_SESSION['user_nickname']?>">
                    <input type="hidden" id="url_pattern" name="url_pattern" value="<?=$url;?>">
                </form>

                <p id="context"></p>

            <?php
                $url = uri_string();
                $url_string = explode('/', $url);
                $url = $url_string[0];

                // session_start();
                //사용자 세션 정보가 있을 때,
                if(isset($_SESSION['user_status'])){
                    if($_SESSION['user_status']){
                        $user_print = '
                        <div class="userinfo">
                            <div class="col-row align-items-center">
                                <div class="col-sm-2 btn btn-light discable" style="color:#000">
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

                // $user_print = "<script>document.write(strHtml);</script>";
                // $auth_print = "<script>document.write(auth_print);</script>";

                //button
                if($url == ''){
                    echo $user_print;
                    if($auth_print){
                        echo '
                        <a href="/login"    class="btn btn-primary header-btn">로그인</a>
                        <a href="/register" class="btn btn-primary header-btn">회원가입</a>
                        </div>
                        ';
                    }else{
                    }
                }
                else if($url == 'main'){        
                    echo $user_print;
                    echo '
                        <a href="/login"    class="btn btn-primary header-btn">로그인</a>
                        <a href="/register" class="btn btn-primary header-btn">회원가입</a>
                        ';
                }
                else if($url == 'login'){        
                    echo $user_print;
                    if($auth_print){
                        
                        echo '
                        <a href="/register"  class="btn btn-primary header-btn">회원가입</a>
                        <a href="/index.php" class="btn btn-primary header-btn">목록보기</a>
                        ';
                    }else{
                        echo '
                        <a href="/index.php" class="btn btn-primary header-btn">목록보기</a>
                        ';
                    }
                }
                else if($url == 'register'){
                    echo $user_print;
                    echo '
                    <a href="/main/board" class="btn btn-primary header-btn">목록보기</a>
                    ';
                }
                else if($url == 'info'){
                    echo $user_print;
                    echo '
                    <a href="/index.php" class="btn btn-primary header-btn">목록보기</a> 
                    <a href="/process/logout" class="btn btn-primary header-btn">로그아웃</a> 
                    <a href="/process/withdrawal" class="btn btn-primary header-btn">회원탈퇴</a>
                    ';
                }else if ($url == 'post'){
                    echo $user_print;
                    echo '
                    <a href="/index.php" class="btn btn-primary header-btn">목록보기</a>
                    ';
                }
                else if ($url == 'write'){
                    echo $user_print;
                    echo '
                    <a href="/index.php" class="btn btn-primary" style="float:right;">목록보기</a>
                    ';
                }
                else if ($url == 'edit'){
                    echo $user_print;
                    echo '
                    <a href="/index.php class="btn btn-primary"  style="float:right;">목록보기</a>
                    ';
                }
            ?>
        </header>
    </div>
</body>
                
    <script>var type = "<?php echo $url?>"; console.log(type);</script>
</html>