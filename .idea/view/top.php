<?php
require_once('lib/print.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        print_title();
        ?>
    </title>
</head>
<body>
<h1><a href="index.php">맺음</a></h1>
<ol>
    <?php
    print_list();
    ?>
</ol>