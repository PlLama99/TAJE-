<?php



    $zip = new ZipArchive();

    $timestamp = time();
    $zipName = "paczka_" . $timestamp . ".zip";

    if($zip->open($zipName, ZipArchive::CREATE) === TRUE)
    {

        foreach($_FILES['obrazy']['tmp_name'] as $key => $tmp_name)
        {

            $originalName = $_FILES['obrazy']['name'][$key];

            $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

            if($extension == "jpg" || $extension == "jpeg" || $extension == "png")
            {
                $zip->addFile($tmp_name, $originalName);
            }

        }

        $zip->close();

        echo "Archiwum zostało utworzone.<br>";
        echo "<a href='$zipName'>Pobierz plik ZIP</a>";

    }
    else
    {
        echo "Nie udało się utworzyć archiwum.";
    }


?>