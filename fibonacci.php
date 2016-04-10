<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<html lang="pt-br">

<head>

<title>Fibonacci Sequence</title>

<?php

$message = 'The fibonacci sequence is: <br />1<br />2<br />';
$powerof = 0;
$max = 10;
$temp = $max;
$powerof = 2;

$i = 1;

for ($i;$i<$powerof;$i++) {
    $max = $max * $temp;
}

echo $message;

$z = 0;
$x = 1;
$y = 2;

while($z < $max) {
    $z = $x + $y; 
    echo $z . "<br />"; 
    $x = $y;
    $y = $z;
}

?>
</head>

<body>

