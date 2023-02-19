<?php
declare(strict_types=1);
include 'include/auto.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Calculator</h1>
    <form action="include/clac.inc.php" method="post">
        <input type="number" name="num1" placeholder="Number One">
        <br>
        <br>
        <input type="number" name="num2" placeholder="Number Two">
        <br>
        <br>
        <select name="oper">
            <option value="ADD">Addition</option>
            <option value="SUB">Subtaction</option>
            <option value="MUL">Multiplication</option>
            <option value="DIV">Divition</option>
        </select>    
        <br>
        <br>
        <input type="submit" name="go" value="CALC">
</form>
</body>
</html>