<?php include ('/db/connect.php'); ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="add_comment.php">Добавить комментарий</a>
<?php

$result = $mysql->prepare("SELECT * FROM `comments`");
$result->execute();
$allComments = $result->fetchAll();

$data = '';

foreach ($allComments as $comment) {
    $data .= '<div class="comment-block">';
    $data .= '<p class="comment-name">' . $comment['name'] . '</p>';
    $data .= '<p class="comment-email">' . $comment['email'] . '</p>';
    $data .= '<a href="' . $comment['homepage'] . '">' . 'Ссылка' . '</a>';
    $data .= '<p class="comment-text">' . $comment['text'] . '</p>';
    $data .= '</div>';

    echo $data;
}

?>
</body>
</html>
