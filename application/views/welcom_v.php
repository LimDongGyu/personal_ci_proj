<?php
    date_default_timezone_set('Asia/Seoul');
    echo date_default_timezone_get();

    echo strtotime("now")."<br />";
    echo date('Y-m-d h:i:s a', strtotime("now"));
?>