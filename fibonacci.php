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

$z = 0;
$x = 1;
$y = 2;

$_html = "";
$_html .= "<table>";
$_html .= "<tr><td>Message:</td></tr>";
$_html .= "<tr><td>" . $message . "</td></tr>"; 
$_html .= "<tr><td>Sequence:</td></tr>";
while($z < $max) {
    $z = $x + $y; 
    $_html .= "<tr><td>" . $z . "</td></tr>"; 
    $x = $y;
    $y = $z;
}
$_html .= "</table>";

echo $_html;

?>
</head>

<body>

