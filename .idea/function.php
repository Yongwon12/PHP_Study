<!
<html>
<head>
    <meta charset="UTF-8">
    <title>function</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = "It is a long established fact that a 
    reader will be distracted by the readable content 
    of a page when looking at its layout.";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
    echo nl2br($str);
    ?>
</body>
</html>