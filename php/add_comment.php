<?php

// Connecting to DataBase
require '../db/connect.php';

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Доб</title>

    <link rel="stylesheet" href="../css/add_comment.css">
</head>
<body>
<?php

// Get the data (POST METHOD)
$name = filter_var(trim($_POST['user_name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['user_email']), FILTER_SANITIZE_EMAIL);
$homepage_url = trim($_POST['user_homepage']);
$text = $_POST['user_text'];

// Array of errors
$errors = array();

// Validation
if (mb_strlen($name) == 0) {
    array_push($errors, 'You did not fill in the "Name" field' . "<br />");
}

if (mb_strlen($email) == 0) {
    array_push($errors, 'You did not fill in the "E-mail" field' . "<br />");
}

if (mb_strlen($text) == 0) {
    array_push($errors, 'You did not fill in the "Message" field' . "<br />");
}

if (!empty($errors)) {
    for ($i = 0; $i < count($errors); $i++) {
        $v = '';
        $v .= '<p class="warning">' . $errors[$i] . '</p>';
        echo $v;
    }
    $mysql->close();
    exit();
} else if (empty($errors)) {
    // Insert into `comments` all data
    $mysql->query("INSERT INTO `comments` (`name`, `email`, `homepage`, `text`) VALUES ('$name', '$email', '$homepage_url', '$text')");
    $mysql->close();
    header('Location: ../index.php');
    exit();
}

// If something went wrong -> close mysql connection and exit the code
$mysql->close();
exit();
?>
</body>
</html>
