<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/board.css" type="text/css">
    <!-- <title>Document</title> -->
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
        <div class="section" style="position:relative;">
            <br />
            <div style="height:34px; width:100%"><a class="btn btn-primary" style="color:#ffffff; float:right; margin-left:5px;" href="/main/board">목록보기</a>
                <button type="button" onclick="prev_page();" class="btn btn-primary" style="color:#ffffff; float:right;">돌아가기</button>
            </div>
            <br />
            <div style="width:100%; padding:0 40px 0 40px">
                <form action="/process/write" method="POST" onsubmit="return FormSubmit(this);">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">제목</label>
                        <input type="text" class="form-control" name="title" placeholder="제목을 입력하세요.">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">본문</label>
                        <textarea class="form-control" id="description" name="description" rows="20"></textarea>
                    </div>
                    <div style="text-align:center;"><input type="submit" class="btn btn-primary" value="작성완료" class="submit"></div>';
                </form>
            </div>
        </div>
    </body>
    <script>

        // [참조] https://offbyone.tistory.com/207
        CKEDITOR.replace( 'description',
        {
            toolbar : 'Basic', /* this does the magic */
            uiColor : '#ffffff',
            width: 820,
            height: 300
        });

        function FormSubmit(f) {
            CKEDITOR.instances.descriptions.updateElement();
            if(f.descriptions.value == "") {
                alert("내용을 입력해 주세요.");
                return false;
            }
            alert(f.descriptions.value);
            
            // 전송x
            return false;
        }

        function prev_page(){
            history.back();
        }

        //  var data = CKEDITOR.instances.editor1.getData();
    </script>
</html>