<!
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
        function basic(){
    print("here are many variations1 <br>");
    print("here are many variations2 <br>");
    }
    basic();

    ?>
    <h2>parameter &amp; argument</h2>
    <?php
    function sum($left, $right)
    {
        print($left + $right);
        print("<br>");
    }
    sum(2,4);
    sum(4,6);
    ?>
    <h2>return</h2>
    <?php
    function sum2($left, $right)
    {
        return $left + $right;
    }
    print(sum2(2, 4));
    file_put_contents('result.txt', sum2(2, 4));
    ?>
</body>
</html>