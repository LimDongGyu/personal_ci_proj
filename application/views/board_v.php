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
    <!-- <link rel="stylesheet" href="/css/board.css" type="text/css"> -->
    <link rel="stylesheet" href="/css/style.css" type="text/css">

</head>
<body>
<div class="container" style="height:1000px; margin:0px; padding: 0px;">
    <div class="nav-side"></div>
    <div class="section">
    <form action="/" method="GET">
        <div class="form-row align-items-center">
            <div class="col-sm-2">
                <h4>검색하기 :</h4>
            </div>
            <div class="col-sm-2">
                <select name="type" class="form-control form-control-sm">
                    <option value="title" id="sel_title">제목</option>
                    <option value="desc" id="sel_desc">본문</option>
                </select>
            </div>
            <div class="col-sm-6">
                <input class="form-control mb-2" type="text" id="question" name="q" value="" class="search">
            </div>
            <?php
                if (isset($_GET['q'])){
                    echo '
                        <a class="btn btn-primary"; href="/index.php";>초기화</a>
                        </div>
                        ';
                }else{    
                    echo '<div class="col-sm-2"></div></div>';        
                }
            ?>
        </form>
        
        <?php

        if (isset($_GET['q']))
        {
            $type = $this->db->escape_str($this->security->xss_clean($_GET['type']));
            $ques = $this->db->escape_str($this->security->xss_clean($_GET['q']));

            if ($type == 'title') {
                $sql = $this->db->query("SELECT * FROM posts WHERE `title` LIKE '%$ques%' ORDER BY id_key DESC");
                
                // echo print_r($sql, true);
                echo "
                <script>
                    document.getElementById('sel_title').setAttribute('selected', '');
                </script>
                ";
            } else if ($type == 'desc') {
                $sql = $this->db->query("SELECT * FROM posts WHERE `description` LIKE '%$ques%' ORDER BY id_key DESC");
                echo "
                <script>
                    document.getElementById('sel_desc').setAttribute('selected', '');
                </script>
                ";
            } else {
                $sql = $this->db->query("SELECT * FROM posts WHERE `title` LIKE '%$ques%' ORDER BY id_key DESC");
            }

            if($sql == false) {
                alert('인증과정에서 오류 발생.');
            }
            
            echo '
            <div style="margin-top:20px;"></div>
            <h3>검색결과 '.$sql->num_rows().'개</h3>
            ';


            echo '
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>글 제목</th>
                </tr>
                </thead>
                <tbody>
            ';

            foreach ($sql->result() as $list) {
            $title = $list->title;
            $id_key = $list->id_key;
            echo '
                <tr><td>
                <a href="/post/'.$id_key.'"><p>'.$title.'</p></a>
                </td></tr>
            ';
            }

            // 페이지 board->post->board 이동해도 값 남아있도록 하는 코드
            echo "
            <script>
                document.getElementById('question').setAttribute('value', '$ques');
            </script>
            ";
            
        }
        else
        {
            echo '<h3 style="margin-top:100px;">게시판 전체보기</h3>';
            echo '
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>글 제목</th>
                </tr>
                </thead>
                <tbody>
            ';

            foreach ($posts_all as $list) {
            $title = $list->title;
            $id_key = $list->id_key;
            echo '
            <tr><td>
            <a href="/post/'.$id_key.'"><p>'.$title.'</p></a>
            </td></tr>
            ';
            }
            
            echo '
                </tbody>
            </table>
            ';
        }
        ?>
    </div>
    <div class="aside"></div>
</div>
</body>
</html>