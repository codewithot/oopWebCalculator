<?php
declare(strict_types = 1);
include 'autoload.php';

$oper = $_POST['oper'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calc = new CalcClass($oper, (int)$num1, (int)$num2);

try {
    echo $calc->calculator();

}catch (TypeError $e) {
    echo "Error!: ". $e->getMessage();
}


?>