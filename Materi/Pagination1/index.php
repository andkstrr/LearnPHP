<?php
// redirect message
// This will give an error. Note the output above, which is before the header() call
// Header ('Location: index1.php?page');
// exit;
?>

<!---(Redirect Dengan JS)--->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
// function myFunction() {
//         location.href = "index1.php?page";
//     }
window.location = "index1.php?page";
</script>
</body>
</html>