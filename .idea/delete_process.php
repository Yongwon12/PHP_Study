<?php
unlink('data/' . basename($_POST['id']));
header('Location:/PHP/.idea/index.php'.$_POST['title']);

?>
