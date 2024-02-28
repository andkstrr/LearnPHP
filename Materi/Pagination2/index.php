<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Redirect dengan PHP
// This will give an error, Note the output above, whitch is before the header() call
    header('Location: index.php');
    exit;
?>
</body>
</html> 