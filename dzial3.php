<?php
//lekcja1
function wyswietl_powitanie() // deklaracja funkcji
{
   echo "Witam serdecznie!";
   echo "Proszę się zarejestrować.";
}

//lekcja2
function tresc_powitania() // deklaracja funkcji
{
   return "Witam wszystkich!";
}

$powitanie = tresc_powitania();
echo $powitanie;

//lekcja3
function przywitaj($zmienna_z_imieniem)
{
   echo 'Witaj '.$zmienna_z_imieniem.'!';
}

$imie = "Marcin";
przywitaj($imie);

//lekcja4
function kwadrat($liczba)
{
   return $liczba * $liczba;
}

$numer = 5;
$wynik = kwadrat($numer);

echo $wynik; // wyświetli 25


//lekcja5
function silnia($liczba)
{
   if($liczba < 2) 
      return 1;
   else
      return $liczba * silnia($liczba - 1);  
}

echo silnia(5);


//lekcja6
$tablica[0] = 1;
$tablica[1] = 4;
$tablica[2] = 1;
$tablica[3] = 0;

for ($i = 0; $i < 4; $i++)
{
   echo $tablica[$i];
}


//lekcja7
$tablica_ucznia[0] = "Janek";
$tablica_ucznia[1] = "Kowalski";
$tablica_ucznia[2] = "14-10-1995";

$tablica_klasy[0] = $tablica_ucznia;

$tablica_ucznia[0] = "Krzysiek";
$tablica_ucznia[1] = "Nowak";
$tablica_ucznia[2] = "24-12-1994";

$tablica_klasy[1] = $tablica_ucznia;

$tablica_ucznia[0] = "Ewa";
$tablica_ucznia[1] = "Kowalska";
$tablica_ucznia[2] = "17-03-1996";

$tablica_klasy[2] = $tablica_ucznia;

echo $tablica_klasy[1][0]; // wyświetli Krzysiek


//lekcja8
$classroom = array();

$student['firstName'] = 'Janek';
$student['lastName'] = 'Kowalski';
$student['birthday'] = '15-08-2000';
$classroom[] = $student;

$student['firstName'] = 'Mirek';
$student['lastName'] = 'Nowak';
$student['birthday'] = '2-11-2001';
$classroom[] = $student;

$student['firstName'] = 'Marcin';
$student['lastName'] = 'Wesel';
$student['birthday'] = '19-05-1989';
$classroom[] = $student;

var_dump($classroom);


//lekcja9
$numbers = array();

for($i = 0; $i < 10; $i++)
{
    $numbers[] = $i;
}

foreach($numbers as $number)
{
    echo $number;
}


//lekcja10
$data = date("Y-m-d");
$czas = date("H:i");

echo "Stronę wyświetlono dnia $data o godzinie $czas";

?>