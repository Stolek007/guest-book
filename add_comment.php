<?php include 'db/connect.php'; // Connecting to DataBase ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление комментария</title>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="css/add_comment.css">
</head>
<body>
<div class="container">
    <form action="php/add_comment.php" method="post">
        <input type="text" name="user_name" id="name" placeholder="Name"><br>
        <input type="email" name="user_email" id="email" placeholder="Email"><br>
        <input type="url" name="user_homepage" id="homepage" placeholder="Home Page"><br>
        <textarea name="user_text" id="text" rows="5" placeholder="Write your text here..."></textarea><br>
        <button type="submit">Submit</button>
        <br>
    </form>
</div>

</body>
</html>
