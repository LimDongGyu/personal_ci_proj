<?php
    header('Content-Type: application/json');
    header("Content-Type:text/html;charset=utf-8");

?>

<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    //배열
    $arr_1 = array(
        'one' => 'two',
        'three' => 'four'
    );
    // echo "<pre>";
    // print_r($arr_1);
    // echo "</pre>";
    // foreach($arr_1 as $key => $value){
    //     echo $key.':'.$value.'<br />';
    // }


    //다중 배열
$arr_2 = (Object)array(
    'one' => array("one1", "one2", "one3"),
    'two' => array("two1", "two2", "two3"),
    'three' => array("three1", "three2", "three3")
);
// echo "<pre>";
// print_r($arr_2);
// echo "</pre>";

    // foreach($arr_2 as $key => $value){
    //     echo 'key:'.$key.'<br />';
    //     foreach($value as $row){
    //         echo 'value:'.$row.'<br />';
    //     }
    // }

    // $val = '2020-02-27 17:13:10';
    // $dt = \Carbon\Carbon::createFromFormat('Y-m-d h:i:s', $val);

    // echo $dt;

?>

</body>
</html>
