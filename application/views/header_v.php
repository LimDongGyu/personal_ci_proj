<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <title>Test Board</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- <link type="text/css" rel='stylesheet' href="/todo/include/css/bootstrap.css" /> -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">

        <!-- bootstrap cdn -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="/public/js/ckeditor2/ckeditor.js"></script>
        <script src="/js/sample.js" type="text/javascript"></script>    


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

                // echo ("<script language=javascript>header_print($url, $user_print, $auth_print);</script>");

               /*  if($url == ''){
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
                } */
            ?>

        </div>
        <nav class="clearfix" id="nav_print">
            <!-- <ul class="clearfix">
                <li><a href="#">Home</a></li>
                <li><a href="#">How-to</a></li>
                <li><a href="#">Icons</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Web 2.0</a></li>
                <li><a href="#">Tools</a></li>  
            </ul>
            <a href="#" id="pull">Menu</a> -->
        </nav>

        <?php
            echo ("<script language=javascript>nav_print();</script>");
        ?>

        <div id="sub_div2"></div>
        <button onclick="nav_print();">nav</button>

    </body>
</html>