<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Document</title> -->
    <script src="/js/sample.js" type="text/javascript"></script>
    <script src="/js/jquery.3.4.1.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/css/board.css" type="text/css">
</head>
<body>
    <div class="container" style="height:750px; margin:0px; padding: 0px;">
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
                <div class="main-info"><img src="https://lh3.googleusercontent.com/proxy/bXwWbcjeOfO8xpAWehgKyGelV2xGNXcVMluxY0N17-GFAKec_6ZKcdjzCwMO0UONMpORLRn9Mp3pQOI9Z8EnorJI4iB93Cr8gE20eGrGOA" alt="">
                    <p>limdg5335@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="section" style="position:relative">
            <?php
                $strHtml = '';

                foreach ($post as $list)
                {
                    $id = $list->id_key;
                    $uploader = $list->uploader_nickname;
                    $time = $list->time;
                    $title = $list->title;
                    $desc = $list->description;
                }

                $sql = $this->db->query("SELECT * FROM posts WHERE `id_key` = $id");
                
                if($sql == false) {
                    alert('인증과정에서 오류 발생.');   
                }

                foreach ($sql->result() as $list){
                    $id = $list->id_key;
                    $uploader_id = $list->uploader_id;
                    $uploader_nick = $list->uploader_nickname;
                }

                $strHtml ='';

                if (isset($_SESSION['user_id']))
                {
                    if($_SESSION['user_id'] == $uploader_id){
                        //update, delete btn if session
                        $strHtml .= '<br /><div style="height:34px; width:100%"><a class="btn btn-primary" style="color:#ffffff; float:right; margin-left:5px;" href="/process/delete/'.$id.'">삭제하기</a>';
                        $strHtml .= '<a class="btn btn-primary" style="color:#ffffff; float:right; margin-left:5px;" href="/edit/'.$id.'">수정하기</a>';
                        $strHtml .= '<a class="btn btn-primary" style="color:#ffffff; float:right;" href="/main/board">목록보기</a></div>';
                    }
                    //post table if same user, session
                    $strHtml .= '<br /><div style="width:100%; padding:0 40px 0 40px">';
                    $strHtml .= '<table class="table table-striped table-custom"><thead><tr><th scope="col" style="width:100px;">글 제목</th><th scope="col">글 내용</th><th scope="col" style="width:150px;">작성시간</th></tr></thead>';
                    $strHtml .= '<tbody><tr><td scope="row">'.$title.'</td><td scope="row"><div style="max-height:300px; color:#000">'.$desc.'</div></td><td scope="row">'.$time.'</td></tr></tbody></table></div>';
                    echo $strHtml;
                }else{
                    //post table if no session
                    $strHtml .= '<br /><div style="height:34px"></div>';
                    $strHtml .= '<div style="width:100%; padding:0 40px 0 40px">';
                    $strHtml .= '<table class="table table-striped table-custom" "><thead><tr><th scope="col">글 제목</th><th scope="col">글 내용</th><th scope="col">작성시간</th></tr></thead>';
                    $strHtml .= '<tbody><tr><td scope="row">'.$title.'</td><td scope="row">'.$desc.'</td><td scope="row">'.$time.'</td></tr></tbody></table></div>';
                    echo $strHtml;
                }
            ?>

            

            <div class="line" style="width: 100%; position:absolute; bottom:0px; left:0px; height:200px;">
                <form action="/process/comment_write" method="post">
                    <input type="hidden" name="post_id_join" value="<?php echo $id; ?>">
                    <br /><br />
                    <div style="width:100%; padding:0 40px 0 40px; height:auto;">
                        <span><strong>댓글 작성 : </strong></span><input type="text" name="description" style="width: 100%; height:100px; color:#000000">
                    </div>
                </form>
                <br /><br />
            </div>

            <div class="comment-lists">
                <?php
                foreach ($comment as $list){
                    $nick = $list->uploader_nickname;
                    $id = $list->uploader_id;
                    $desc = $list->description;
                    $id_key = $list->id_key;

                    $strHtml = '';
                    $strHtml ='<div class="comment"><span class="comment-uploader"><strong>'.$nick.' : </strong></span><span>'.$desc.'</span>';

                    if(isset($_SESSION['user_id'])) {
                        if ($id == $_SESSION['user_id']) {
                            $strHtml .='<span style="float:right;"><a href="" class="btn btn-primary btn-comment">수정</a><a href="/process/comment_delete/'.$id_key.'" class="btn btn-danger btn-comment">삭제</a></span>';
                        }
                    }
                    $strHtml .='</div>';
                    echo $strHtml;
                }
                ?>
            </div>
        </div>
    <div class="aside"></div>
    </div>
<footer></footer>
</body>
</html>