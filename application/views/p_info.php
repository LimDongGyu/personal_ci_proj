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


    //timezone 설정
    //1. php 소스 내에서 timezone 설정
    // echo date_default_timezone_get();
    // date_default_timezone_set('Asia/Seoul');
    // echo date_default_timezone_get();

    //2. php.ini 파일에서 timezone 설정
    //[Date] 부분에서 date.timezone = Asia/Seoul로 변경

    //날짜 함수
    //1. string date(string 날짜포맷, [,int timestamp => default: time()]);
    // $timestamp = date('Y-m-d h:m:i', time());
    // echo $timestamp."<br />";
    // echo var_dump($timestamp)."<br />";


    //2. string strtotime(string 날짜포맷, [,int $now=time()])
    //주어진 날짜포맷의 문자열을 unix timestamp로 변환함, 두 번째 인자는 주어진 timestamp를 기준으로 계산되어 나옴
    //날짜 포맷이 없으면, 로컬 타임 적용됨
    // $timestamp = strtotime("+1 week");  //현 로컬 시간 기준으로 1주일 뒤
    // echo date('Y-m-d h:m:i', $timestamp)."<br />";

    // $timestamp = strtotime("2020-02-28 -1 day");
    // echo date('Y-m-d', $timestamp)."<br />";
    // echo var_dump($timestamp)."<br />";


    //3. int mktime(시,분,초, 월, 일, 년);
    // $timestamp = mktime(11, 19, 0, 02, 28, 2020);
    // echo date('Y-m-d', $timestamp)."<br />";
    // echo var_dump($timestamp);


    //날짜함수 예제

    //1. 특정 월의 마지막 날짜 구하기
    // $monthLastDay = date('t', strtotime("2020-02-28"));
    // echo $monthLastDay;

    // //2. 특정 날짜 요일 구하기
    // $weekString = array("일", "월", "화", "수", "목", "금", "토");
    // echo($weekString[date('w', strtotime("2020-02-28"))]);

    // //3. 하루 전 날짜 구하기
    // $beforeDay = date('Y-m-d', strtotime("2020-02-28". "-1 day"));
    // echo $beforeDay;

    $date = date('Y-m-d');
    $week = date('w', strtotime($date));
    $yoil = array("일","월","화","수","목","금","토");
    $weekDay = $yoil[$week];

    echo $weekDay;
?>

</body>
</html>
