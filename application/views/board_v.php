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
    <script src="/js/sample.js" type="text/javascript"></script>
    <script src="/js/jquery.3.4.1.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/css/board.css" type="text/css">
</head>

<body>
<div class="container" style="height:750px; margin:0px; padding: 0px;">
    <div class="nav-side">
        <div class="main"></div>
                    <div class="main-context">
                        <p>사용자 정보</p>
                        <p>sample</p>
                        <p>sample</p>
                        <p>sample</p>
                        <p>sample</p>
                        <p>sample</p>
                        <p>sample</p>
                        <p>sample</p>
                    </div>
        </div>
    <div class="section">
        <form action="/" method="GET">
        <div class="search-nav" style="height:50px; text-align:center; margin:40px 40px 0px 40px;">
            <div class="search-context" style="width:200px; float:right;"><input type="text" class="form-control mb-2" id="question" name="q" value=""></div>
            <div class="search-select" style="width:100px; float:right; margin-right:20px;">
                <select name="type" id="" class="form-control from-control-sm">    
                    <option value="title" id="sel_title" style="color:#000000">제목</option>
                    <option value="desc" id="sel_desc" style="color:#000000">본문</option>
                </select>
            </div>
            <div class="search-title" style="width:100px; float:right;"><h6 style="color:#000">검색조건</h6></div>    
            <?php
                if (isset($_GET['q'])){
                    echo '<a class="btn btn-primary"; href="/index.php";>초기화</a>';
                }else{    
                    echo '<div class="col-sm-2"></div>';        
                }
            ?>
            </div>
        </form>

        <?php
            $strHtml = '';
            if (isset($_GET['q'])){
                $type = $this->db->escape_str($this->security->xss_clean($_GET['type']));
                $ques = $this->db->escape_str($this->security->xss_clean($_GET['q']));

                if ($type == 'title') {
                    $sql = $this->db->query("SELECT * FROM posts WHERE `title` LIKE '%$ques%' ORDER BY id_key DESC");
                    $strHtml .="<script>document.getElementById('sel_title').setAttribute('selected', '');</script>";
                } else if ($type == 'desc') {
                    $sql = $this->db->query("SELECT * FROM posts WHERE `description` LIKE '%$ques%' ORDER BY id_key DESC");
                    $strHtml .="<script>document.getElementById('sel_desc').setAttribute('selected', '');</script>";
                } else {
                    $sql = $this->db->query("SELECT * FROM posts WHERE `title` LIKE '%$ques%' ORDER BY id_key DESC");
                }

                if($sql == false) {
                    alert('인증과정에서 오류 발생.');
                }
                $strHtml .='<div style="margin-top:20px;"></div><h3>검색결과 '.$sql->num_rows().'개</h3>';
                $strHtml .='<table class="table table-striped" style="width:80%; margin:auto"><thead><tr><th scope="col">글 제목</th><th scope="col">작성자</th><th scope="col">닉네임</th><th scope="col">작성시간</th></tr></thead><tbody>';
            
                foreach ($sql->result() as $list) {
                    $title = $list->title;
                    $id_key = $list->id_key;
                    $uploader_id = $list->uploader_id;
                    $uploader_nickname = $list->uploader_nickname;
                    $time = $list->time;
                    $strHtml .='<tr><td scope="row"><a href="/post/'.$id_key.'"><p>'.$title.'</p></a></td><td scope="row">'.$uploader_id;
                    $strHtml .='</td><td scope="row">'.$uploader_nickname.'</td><td scope="row">'.$time;
                    $strHtml .='</td></tr>';
                }

                // 페이지 board->post->board 이동해도 값 남아있도록 하는 코드
                $strHtml .="<script>document.getElementById('question').setAttribute('value', '$ques');</script>";
            }
            else{
                $strHtml .='<div style="width:100%; padding-left:40px; padding-right:40px;"><table class="table table-striped table-border"><thead><tr><th scope="col">글 제목</th><th scope="col">작성자</th><th scope="col">닉네임</th><th scope="col">작성시간</th></tr></thead><tbody>';
                
                foreach ($posts_all as $list) {
                    $title = $list->title;
                    $id_key = $list->id_key;
                    $uploader_id = $list->uploader_id;
                    $uploader_nickname = $list->uploader_nickname;
                    $time = $list->time;
                    $strHtml .='<tr><td scope="row"><a href="/post/'.$id_key.'"><p>'.$title.'</p></a></td><td scope="row">'.$uploader_id;
                    $strHtml .='</td><td scope="row">'.$uploader_nickname.'</td><td scope="row">'.$time;
                    $strHtml .='</td></tr>';
                }
                $strHtml .='</tbody></table>';
                $strHtml .='</div>';
                echo $strHtml;
            }
        ?>
    </div>
    <div class="aside"></div>
</div>
<footer></footer>
</body>
</html>
