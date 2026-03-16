<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pakowarka Grafiki</title>
</head>
<body>

<h2>Wgraj obrazy do spakowania</h2>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    
    <input type="file" name="obrazy[]" multiple accept=".jpg,.jpeg,.png">
    
    <br><br>
    
    <button type="submit">Spakuj do ZIP</button>

</form>

</body>
</html>