<?php
file_put_contents("data/" . $_POST['title'], $_POST['description']);
header('Location: /PHP/.idea/index.php?id='.$_POST['title']);
?>
