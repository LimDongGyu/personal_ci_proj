<?php
    $var_php = "from php variable to javascript variable";
?>

<script>
    var var_js = "<? echo $var_php ?>";
    console.log(var_js);
</script>