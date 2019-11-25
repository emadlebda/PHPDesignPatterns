<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Factory Design pattern</title>
</head>
<body>
<?php
spl_autoload_register(function ($className) {
    include_once $className . '.php';
});


$maker = StudentMaker::getMaker();

$maker->viewArt();
$maker->viewEdu();
$maker->viewEng();
$maker->viewIt();
?>
</body>
</html>