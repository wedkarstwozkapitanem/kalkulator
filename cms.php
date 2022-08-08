

<?php

    $pli = "dane/artykuly.txt";
    if (is_writeable($pli)) {
      if (!$handle = fopen($pli, "a")) echo "<span style='color:red'>Błąd...</span>";
     if (fwrite($handle,$_POST['tytul']." || ".$_POST['tlo']." || ".$_POST['artykul']." || Kapitanpixi" ) === FALSE) echo "Błąd...";
        else echo "<span style='color:red;font-size:large;'>Dodano rybę!...</span><br>";
      fclose($handle);
    } else echo "Nie udało się..";
  

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cms</title>
</head>
<body>
    <fieldset>
    <?php

session_start();



 if (!empty($_POST['wymiar'])) {
    $plik = "dane/wymiary.txt";
    if (is_writeable($plik)) {
      if (!$handle = fopen($plik, "a")) echo "<span style='color:red'>Błąd...</span>";
     if (fwrite($handle,$_POST['gatunek']." || ".$_POST['wymiar']." || ".$_POST['okres']." || ".$_POST['przynety']." || " .$_POST['ciekawostka']."
") === FALSE) echo "Błąd...";
        else echo "<span style='color:red;font-size:large;display:none;'>Wiadomość wysłana!...</span><br>";
      fclose($handle);
    } else echo "Nie udało się..";
  }



?>
    <h1>Wymiary i okresy ochronne ryb</h1>
    <?php include("dane/wymiary.txt"); ?>
    <form action="" method="POST">
<input name="gatunek" placeholder="Gatunek" />
<input name="wymiar" placeholder="wymiar" />
<input name="okres" placeholder="okres"/>
<input name="przynety" placeholder="przynety"/>
<input name="ciekawostka" placeholder="ciekawostka"/>    
<input type="submit" value="wymiar" />
</form>
    </fieldset>

    <fieldset>
        <div id="podglad" onkeydown="podg()" contenteditable="true" ></div>
<div id="tresc" contenteditable="true"></div>
    </fieldset>


    <fieldset>
        <legend>Dodaj artykuł</legend>
        <form action="" method="POST">
            <input type="text" placeholder="Napisz tytuł artykułu" name="tytul" />
            <input style="width:80%;height:48px;" type="text" placeholder="Napisz artykuł" name="artykul" />
            <input placeholder="tlo" name="tlo"/>
            <input type="submit" value="dodaj"/>
        </form>

    </fieldset>
</body>
</html>
<style>
    #tresc {
        width:48%;
        height:228px;
        border:3px solid black;
        float:left;
    }
</style>
<script>
    tresc = document.getElementById("tresc").innerHTML;
    podglad = document.getElementById("podglad").innerHTML;

    function podg() {
        document.getElementById("tresc").innerHTML = document.getElementById("podglad").innerHTML + '.';
}
</script>