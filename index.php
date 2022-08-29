<?php
//    declare(strict_types = 1);
//    include 'includes/autoload.php';
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

<!---->
<?php

//$datatoencrpty = 'B@dS1nc#Ipp7Bx*';
//
//
//
//// $output = false;
//
//$encrypt_method = "AES-256-CBC";
//$secret_key = 'trustvasSec';
//$secret_iv = 'trustvasSecIV';
//
//// // hash
//$key = hash('sha256', $secret_key);
//
//// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
//$iv = substr(hash('sha256', $secret_iv), 0, 16);
//$output = openssl_encrypt($datatoencrpty, $encrypt_method, $key, 0, $iv);
//$output = base64_encode($output);
//
//var_dump($output);