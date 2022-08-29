<?php
    declare(strict_types = 1);
    include 'includes/autoload.php';
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <form action="includes/calc.php" method="post">
        <p>My own Calculator!</p>
        <input type="number" name="num1" placeholder="first number">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>

</body>
</html>
