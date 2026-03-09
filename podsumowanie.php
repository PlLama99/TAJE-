<?php

echo "<table>";

for($i=1; $i<=10; $i++)
{
    echo "<tr>";
    
    for($j=1; $j<=10; $j++)
    {
        $wynik = $i*$j;
        
        if($wynik % 2 == 0)
        {
            echo "<td style='color:blue'>$wynik</td>";
        }
        else
        {
            echo "<td style='color:green'>$wynik</td>";
        }
    }
    
    echo "</tr>";
}

echo "</table>";

$potega = 3;

switch($potega)
{
    case 2:
        for($i=1; $i<=10; $i++)
        {
            echo $i*$i."<br>";
        }
        break;

    case 3:
        for($i=1; $i<=10; $i++)
        {
            echo $i*$i*$i."<br>";
        }
        break;

    case 4:
        for($i=1; $i<=10; $i++)
        {
            echo $i*$i*$i*$i."<br>";
        }
        break;

    default:
        echo "Niepoprawna wartosc";
}
?>