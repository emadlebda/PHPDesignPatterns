<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
// put your code here
include_once 'Singleton.php';
$singleton1 = Singleton::getSingleton();
$singleton1->setData("Software Engineering 2");
$singleton2 = Singleton::getSingleton();
$singleton2->setData("Singleton Deisgn Pattern");
echo $singleton1->getData() . '<br>';
echo $singleton2->getData() . '<br>';

?>
</body>
</html>