<?php
//pierw temat

$a = 7; // przypisujemy wartosc zmiennej $a
if ($a%2 > 0) // reszta z dzielenia przez 2
{
  echo "Liczba nieparzysta";
}
if ($a%2 == 0) // brak reszty z dzielenia przez 2
{
  echo "Liczba parzysta";
}
$a = 7; 
if ($a%2 > 0) // reszta z dzielenia przez 2
  echo "Liczba nieparzysta";
if ($a%2 == 0) // brak reszty z dzielenia przez 2
  echo "Liczba parzysta";
$a = 7; 
if ($a > 0 && $a < 10)
  echo "Liczba między 0 a 10";

if ($a < 0 || $a > 10) 
  echo "Liczba mniejsza od 0 lub wieksza niz 10";
echo "<br>";
//drugi temat
$a = 7; // przypisujemy wartość zmiennej $a
if ($a%2 > 0) // reszta z dzielenia przez 2
{
  echo "Liczba nieparzysta";
}
else // brak reszty z dzielenia przez 2
{
  echo "Liczba parzysta";
}
echo "<br>";

//temat tri
$a = 34; // przypisujemy wartość zmiennej $a

if ($a%8 == 0) // liczba podzielna przez osiem
  echo "Liczba podzielna przez osiem";

elseif ($a%4 == 0) // liczba podzielna przez cztery
  echo "Liczba podzielna przez 4, ale nie przez 8";

elseif ($a%2 == 0) // liczba podzielna przez dwa
  echo "Liczba podzielna przez 2, ale nie przez 4";

else // żadna z powyższych
  echo "Liczba nieparzysta";
  echo "<br>";
//temat four
$a = 72; // przypisujemy wartość zmiennej $a

switch ($a) // sprawdzamy zmienną $a
{
case 1:
  echo "Wartość zmiennej a to 1";
  break;

case 2:
  echo "Wartość zmiennej a to 2";
  break;

case 3:
  echo "Wartość zmiennej a to 3";
  break;

case 72:
  echo "Wartość zmiennej a to 72";
  break;

default:
  echo "Żadna z powyższych";
  break;
}
echo "<br>";
//temat five
if($zmienna < 101){}
{
  echo $zmienna;
  $zmienna++;
}
if($zmienna < 101)
{
  echo $zmienna;
  $zmienna++;
}

if($zmienna < 101)
{
  echo $zmienna;
  $zmienna++;
} 
while($zmienna < 101) // warunek kontynuacji pętli
{
  echo $zmienna;
  $zmienna++;
} 
while($zmienna < 101) // warunek kontynuacji pętli
{
  echo $zmienna;
  $zmienna += 10; // zmienna może się zmieniać szybciej/wolniej/wcale
} 
while($zmienna < 101 && $inna > 100) // warunek kontynuacji pętli
{
  echo $zmienna;
  echo $inna;
  $zmienna += 10; // zmienna może się zmieniać szybciej/wolniej/wcale
  $inna -= 5; // sprawdzanych może być wiele zmiennych
} 
echo "<br>";
//temat siks
$zmienna = 200;
do // instrukcje do wykonania
{
  echo $zmienna;
  $zmienna++;
} 
while($zmienna < 101); // tu też musi być średnik

echo "<br>";

// temat SICSEVEN
// użycie pętli for
for($i=0;$i<10;$i++)
{
  // instrukcje
}

// ten sam efekt z użyciem funkcji while
$i=0;
while($i < 10)
{
  // instrukcje
  $i++;
}
echo "<br>";
//osiem
$a = 5; // przypisujemy wartość zmiennej $a
$odpowiedz = ($a>5) ? 'Większa od 5' : 'Mniejsza, bądź równa 5';

echo $odpowiedz;

?>
