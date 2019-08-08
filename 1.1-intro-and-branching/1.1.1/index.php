<?php
$variable = 3.14;
//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other
if (is_bool($variable)) {
    $text = bool;
} elseif (is_float($variable)) {
    $text = float;
} elseif (is_int($variable)) {
    $text = int;
} elseif (is_string($variable)) {
    $text = string;
} elseif (is_null($variable)) {
    $text = null;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$variable?> is <?=$text?></p>
</body>
</html>