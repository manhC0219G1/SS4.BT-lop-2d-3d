<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once "Class2d.php";
include_once "Class3d.php";
$calss2d = new Class2d(2,3);
echo $calss2d->ToString();
$calss3d = new Class3d(2,3,4);
echo $calss3d->ToString();
?>
</body>
</html>
