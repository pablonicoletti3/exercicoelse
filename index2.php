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

/*PROBLEMA: exiba os números de 0 à 20*/// for($i = 0 ; $i <= 20; $i++){
    //     echo "$i<br>";// }#### ARRAY// $lanches01 = '🥐';
// $lanches02 = '🍕';
// $lanches03 = '🥪';
// $lanches = array();
// $lanches[0] = "🌭";
// $lanches[1] = "🍱";
// $lanches[2] = "🥟";
$lanches = ["🥐", "🍕","🥪""🌭", "🍱","🥟"];
$lanches[3] = "🥟";
array_push($$lanches, "🥐");
// echo gettype($lanches);echo count($lanches);
echo "<h1>lanches </h1>";
$qtd = count($$lanches);
$contador = 0;while($contador < $qtd)
{
       // echo "$contador <br>"; echo $frutas[$contador];
     $contador++;
}
?>


</body>
</html>