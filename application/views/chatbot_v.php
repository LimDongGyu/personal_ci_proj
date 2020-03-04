<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    //http body의 raw data 읽기전용으로 가져오기
    $raw_post_data = file_get_contents('php://input');
    // $raw_post_array = explode('&', $raw_post_data);

    //string to json
    $json_post_data = json_decode($raw_post_data);
    
    //변수 형태 보기
    print_r($json_post_data);


    $simpleText = (Object)array(
        "version"=> "2.0",
        "template"=> (Object)array(
            "output"=>array(
                (Object)array(
                    "simpleText"=>(Object)array(
                        "text" => "심플텍스트"
                )
                )
            )
        )
    );

    $response = json_encode($simpleText);
    print_r($response);

    
    //꺼내는 방식
    // echo $json_post_data->title."<br />";
    // echo $json_post_data->body."<br />";
?>


</body>
</html>