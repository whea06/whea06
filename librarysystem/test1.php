<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Example</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="textbox">Enter Text:</label>
        <input type="text" id="textbox" name="textbox">
        <button type="submit">Submit</button>
    </form>
</body>
</html>