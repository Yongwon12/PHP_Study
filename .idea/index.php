<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>맺음</h1>
    <ol>
        <li><a href="index.php?id=community">커뮤니티</a></li>
        <li><a href="index.php?id=sports">스포츠</a></li>
        <li><a href="index.php?id=used">중고</a></li>

    </ol>
    <h2>
        <?php
        echo $_GET["id"];
        ?>
        <?php
        echo file_get_contents("data/".$_GET['id']);
        ?>
    </h2>
    Lorem Ipsum is simply dummy text of the printing and
    typesetting industry. Lorem Ipsum has been the
    industry's standard dummy text ever since the 1500s,
    when an unknown printer took a galley of type and
    scrambled it to make a type specimen book. It has
    survived not only five centuries, but also the leap
    into electronic typesetting, remaining essentially
    unchanged. It was popularised in the 1960s with the
    release of Letraset sheets containing Lorem Ipsum
    passages, and more recently with desktop publishing
    software like Aldus PageMaker including versions of
    Lorem Ipsum.
</body>
</html>
