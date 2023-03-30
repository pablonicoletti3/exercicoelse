<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$produtos = ['👟','👠','🎮','🌭','🧨']; # Array
//adicionar lanche

echo $produtos[0];

echo $produtos[3];

echo count($produtos);

echo "<br>";

$i = 0;

while( $i < 5){

 echo $produtos[$i];

 $i++; // $i = $i + 1

}

?>

</body>
</html>