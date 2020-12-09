<!DOCTYPE html>
<html lang="en">

<?php include 'auto_version.php'; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
    echo '<link rel="stylesheet" href="' . auto_version('/auto-vers/css/main.css') . '" type="text/css">';
    echo '<link rel="stylesheet" href="' . auto_version('/auto-vers/css/initiative.css') . '" type="text/css">';
  ?>

  <title>Document</title>
</head>

<body>
  <h1>Hello World</h1>
  <?php
    echo '<script src="' . auto_version('/auto-vers/js/app.js') . '" type="text/javascript"></script>';
    echo '<script src="' . auto_version('/auto-vers/js/component.js') . '" type="text/javascript"></script>';
  ?>
</body>

</html>