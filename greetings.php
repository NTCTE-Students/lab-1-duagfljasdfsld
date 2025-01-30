<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kjkj</title>
</head>
<body>
    <h1>lkdfjldj</h1>
    <p>jkhkhjkh</p>
    <form method="post">
        <input type="text" placeholder="hhhhhh" name="name" />
        <input type="submit" value="heloooo" />
    </form>
    <?php
    if (isset($_POST['name'])) {
        $greetings = htmlspecialchars(string: $_POST['name']);
        print("<p>ПРИВЕТ, {$_POST['name']}</p>");
    }
    ?>
</body>
</html>