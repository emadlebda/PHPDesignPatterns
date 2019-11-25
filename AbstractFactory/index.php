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

$course1 = Course::getCourse();
$course1->setDegree(new DipDegree());
$course1->view("Software Engineering 2", "includes design patterns", "Dr. Abdelkareem Alashqar");

$course2 = Course::getCourse();
$course2->setDegree(new BscDegree());
$course2->view("Algorithms", "time and space efficiency", "Dr. Ashraf Mogari");

$course3 = Course::getCourse();
$course3->setDegree(new MscDegree());
$course3->view("Cuber security", "includes sql injection", "Dr. Tawfiq Barhoom");


$course4 = Course::getCourse();
$course4->setDegree(new PhdDegree());
$course4->view("Database Management systems 2", "includes DDL and DML", "Dr. Iyad Alshami");


?>


</body>
</html>