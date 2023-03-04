<!DOCTYPE html>
<?php 
require_once(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT'].'/src/config.php'));
use src\request\Request;
use src\classes\Test;
?>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" media="all and (orientation:portrait)" href="/css/portrait.css">
    <link rel="stylesheet" media="all and (orientation:landscape)" href="/css/landscape.css">
    <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
    <meta name="description" content="Описание"/>
    <meta name="keywords" content="ключслово, ключслово"/>
    <title></title>
</head>

<body>

    <h1 id='t1'></h1>
    <div id='t2'></div>
    <hr>
    <div id='t3'></div>
    <?php dd(Request::_root()); ?>
    <hr>
    <div id='t4'></div>
    <?php
    $test = new Test;
    echo $test->echo_test;
    ?>
    <?php
    $mem0=memory_get_usage();
    $tim0 = microtime(true);
    // code
    echo "<hr>Количество памяти выделенной PHP: ".$mem0." байт<br>байт: ".(memory_get_usage()-$mem0)."<br>екунд: ".(microtime(true) - $tim0)."<hr>";
    ?>

    <script src="/js/script.js"></script>
</body>

</html>
