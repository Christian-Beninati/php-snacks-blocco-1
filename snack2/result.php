<?php

$name = trim($_GET['name'] ?? '');
$mail = trim($_GET['mail'] ?? '');
$age = $_GET['age'] ?? '';

$result_message = "Login Failed";
$text_color = "red";

if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)) {
    $result_message = "Login Successful";
    $text_color = "green";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access result</title>
</head>

<body>
    <h1 style="color: <?= $text_color ?>"> <?= $result_message; ?></h1>

</body>

</html>