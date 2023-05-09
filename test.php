<!DOCTYPE html>
<html>
    <body>
        <h1>Primul exercitiu</h1>

<?php
$x=10;
$y=5;
$suma=$x+$y;
$diferenta=$x-$y;
$produs=$x*$y;
$impartire=$x/$y;

echo "$x+$y=$suma <br>";
echo "$x-$y=$diferenta <br>";
echo "$x*$y=$produs <br>";
echo "$x/$y=$impartire <br>";
?>

<h1>Al doilea exercitiu</h2>
<?php
$output="1";

for ($i=2; $i<=10; $i++) {
    $output.="-".$i;

}
 echo $output;
 ?>

<h1> Al treilea exercitiu </h2>

<?php
$numere=array(6,4,15,12,36,89,45);
foreach ($numere as $numar) {
    if ($numar % 6==0) {
        echo $numar. " ";
    }
}
?>

<h1> Al patrulea exercitiu</h1>
<?php

$suma=0;

for ($i=0; $i<=30; $i++) {
    $suma+=$i;

    echo$i;

    if($i<30) {
         
        echo"+";
    }
}

echo"=$suma";
?>

<h1> Al cincilea exercitiu</h1>
<?php
$suma_initiala=500;
$procent_dobanda=0.1;
$ani=5;

$sold=$suma_initiala;
echo"Anul 0: ".$sold."euro <br>";

for($i=1; $i<=$ani; $i++) {
$dobanda=$sold*$procent_dobanda;
$sold+=$dobanda;

echo "Anul ".$i.":".$sold."euro <br>";

}
?>
 
</body>
</html>