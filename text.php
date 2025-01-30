<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>рас два три рас два три</title>
</head>
<body>
    <h1>лавры</h1>
    <?php
        if (isset($_GET['message'])) {
            print('<p>ОООО СООБЩЕНИЕ:</p>');
            print("<p><i>{$_GET['message']}</i></p>");
        } else {
            print('<p>ойййй ничегооо</p>');
        }
    ?>
</body>
</html>