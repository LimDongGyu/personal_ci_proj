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
        <form action="/process/edit" method="POST" onsubmit=" return FormSubmit(this);">

            <?php
                $url = uri_string();
                $url_string = explode('/', $url);
                $url = $url_string[1];
                foreach ($data as $list)
                {
                    $id = $url;
                    $title = $list->title;
                    $desc = $list->description;
                    echo '
                    <p class="form-content">제목</p>
                    <input type="hidden" name="id" value="'.$id.'"> 
                    <input type="text" class="form-title" name="title" value="'.$title.'">
                    <p class="form-content">본문</p>
                    <textarea name="description" id="description" class="form-description" name="description" rows="5" cols="15">'.$desc.'</textarea>
                    <input type="submit" value="수정완료" class="submit">
                    ';
                }

            ?>
        </form>
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
        
        //전송x
        return false;
    }

    //  var data = CKEDITOR.instances.editor1.getData();
</script>
</html>