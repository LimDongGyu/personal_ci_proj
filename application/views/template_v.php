<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- bootstrap cdn -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>  
        <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

        <script src="/js/sample.js" type="text/javascript"></script>   
        <!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->
        <link rel="stylesheet" type="text/css" href="/css/board.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="header-section1">
                <img src="/images/logo.png" alt="LOGO SAMPLE" class="logo" style="height:50px;">
                <nav>
                    <ul class="nav_links">
                        <li><a href="/android">Android</a></li>
                        <li><a href="login">로그인</a></li>
                        <li><a href="/main/board">게시판</a></li>
                        <li><a href="/template">탬플릿</a></li>
                    </ul>
                </nav>
                <a href="#" class="cta"><button class="blue-btn">Contact</button></a>
            </div>
            <div class="header-section2"></div>
            <div class="nav-horizon">
                <ul>
                    <li><a href="/android" style="margin-left:5px;">안드로이드</a></li>
                    <li><a href="/login">로그인</a></li>
                    <li><a class="active" href="/main/board">게시판</a></li>
                    <li><a href="/template">탬플릿</a></li>
                    <li><a href="/Crud">샘플</a></li>
                </ul>
            </div>
            <div class="userinfo"></div>
        </header>
        <div class="container">
            <div class="nav-side">
                <div class="main"><img src="/images/creepy-1867707_1920.jpg" alt=""></div>
                <div class="main-context">
                    <p>사용자 정보</p>
                    <br><br>
                    <div class="main-info"><img src="https://developer.android.com/_static/android/images/logo-twitter.svg?hl=ko" alt="">
                        <p>Twitter.com/@limdg5335</p>
                    </div>
                    <div class="main-info"><img src="https://www.gstatic.com/images/icons/material/product/2x/youtube_48dp.png" alt="">
                        <p>youtube.com/limdg5335</p>
                    </div>
                    <div class="main-info"><img src="https://icons-for-free.com/iconfiles/png/512/twitch-1320194643260954752.png" alt="">
                        <p>twitch.com/#limdg5335</p>
                    </div>
                    <div class="main-info"><img src="https://icons-for-free.com/iconfiles/png/512/twitch-1320194643260954752.png" alt="">
                        <p>limdg5335@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <div>
                    <!-- <button type="button" class="btn btn-danger"  style="float:right; margin-top:5px; margin-right:10px;">삭제</button> -->
                    <button type="button" class="btn btn-primary" style="float:right; margin-top:5px; margin-right:10px;" data-toggle="modal" data-target="#testi_card_add">추가</button>
                </div>

                <!-- Modal -->
                <!-- add -->
                <div class="modal fade" id="testi_card_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="color:#000000">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="color:#000000">
                                <form action="<?php echo site_url('template/create')?>" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">testi_title</label>
                                        <input type="text" class="form-control" name="testi_title" aria-describedby="emailHelp" placeholder="Enter testi_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">testi_description</label>
                                        <input type="text" class="form-control" name="testi_description" aria-describedby="emailHelp" placeholder="Enter testi_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">testi_img</label>
                                        <input type="text" class="form-control" name="testi_img" aria-describedby="emailHelp" placeholder="Enter img link">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">testi_context</label>
                                        <textarea class="form-control" name="testi_context" aria-describedby="emailHelp" rows="5" placeholder="Enter testi_context"></textarea>
                                    </div>
                                    <div class="form-group" style="text-align:center;">
                                        <button type="submit" class="btn btn-primary" value="save">등록완료</button>
                                        <a href="<?php echo site_url('Template')?>"><button type="button" class="btn btn-danger">취소</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials">
                    <?php
                        $strHtml='';
                        foreach ($result as $row){
                            $testi_context = $row->testi_context;
                            $testi_title = $row->testi_title;
                            $testi_description = $row->testi_description;
                            $testi_id = $row->testi_id;
                            $testi_img = $row->testi_img;

                            $strHtml .= '<a href="/template/edit/'.$testi_id.'"><div class="testi_card"><div class="layer"></div>';
                            $strHtml .= '<div class="content"><input type="hidden" name="testi_id" value="'.$testi_id.'">';
                            $strHtml .= '<p>'.$testi_context.'</p>';
                            $strHtml .= '<div class="testi_img"><img src="'.$testi_img.'" alt=""></div>';
                            $strHtml .= '<div class="details"><h2>'.$testi_title.'<br><span>'.$testi_description.'</span></h2></div></div></div></a>';
                        }
                        echo $strHtml;
                    ?>
                </div>
            </div>
            <div class="aside"></div>
            </div>
        <!-- <footer></footer> -->
    </div>
</body>
</html>