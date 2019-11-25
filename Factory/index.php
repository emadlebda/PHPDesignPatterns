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


    $student = Factory::getStudent('IT');
    echo $student->showData() . '<br>';
    $student = Factory::getStudent('Eng');
    echo $student->showData() . '<br>';
?>
</body>
</html>