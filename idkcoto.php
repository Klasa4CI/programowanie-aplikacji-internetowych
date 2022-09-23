<?php

//21
function yes(n){
    if(
        n%5 === 0 &&
        n%7 === 0
    ) return true;
    else return false;
}

//20
function checkNumber(a){
    if(a<0) return true;
    else return false;
}

//19
function showName(n){ echo n; }

//18
$wartosci = [20, 17, 22, 20, 16, 31, 22, 15, 13, -12, 16, 7, 1, 0, -7, -10];
$srednia = 0;
foreach($wartosci as $n){ $srednia += $n };
$srednia = $srednia / count($srednia);

//17
$wartosci = [1, 15, 12, 51, 08, -11]
$lacznie = 0;
for($i=0; $i<count($wartosci); $i++;){ $lacznie += $wartosci[$i] };

//16
$lista = [ "Fioletowy", "Niebieskie", "Różowy", "Zielony" ];
echo "<ul>";
foreach($lista as e){ echo '<li>', e, '</li>' }
echo "</ul>"

//8
$z = 404;
if($z>99 && $z<1000){ echo $z." jest liczbą trzycyfrową" };

//7
$x = 20;
if($x > 20){ echo $x. " jest większa od 20"; }

//6
$x = 20;
$y = 100;
$powierzchnia = $x * $y;
$obwod = ($x * 2) + ($y * 2)

//5
$zmiennax1 = 10;
$zmiennax2 = 12;
$temp = $zmiennax1;
$zmiennax1 = $zmiennax2;
$zmiennax2 = $temp;

//4
$a = 4;
$b = 8;
echo $a + $b;
echo $a - $b;
echo $a / $b;
echo $a * $b;
echo $a % $b;
echo $a ^ $b;

//3
$x = 29;
$pi = 3.14;
$tekst = "ćwiczenia PHP";

echo $x-2." to liczba pierwsza";
echo "Liczba PI to: ".$pi;
echo $tekst."są super"

//2
$php = “$$ PHP ćwiczymy string $$”;
?>
<html>
    <head>
        <title><?php echo htmlspecialchars($php);?></title>
    </head>
    <body>
        <h2><?php echo htmlspecialchars($php);?></h2>
    </body>
<?php


//1
echo "PHP to super język programowania";

?>