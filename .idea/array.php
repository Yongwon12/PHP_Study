<doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h1>Array</h1>
    <?php
    $coworkers = array('jesus1','jesus2','jesus3','jesus4');
    echo $coworkers[1].'<br>';
    echo $coworkers[3].'<br>';
    var_dump(count($coworkers));
    array_push($coworkers,'jesus5');
    var_dump($coworkers);
    ?>
    </body>
    </html>