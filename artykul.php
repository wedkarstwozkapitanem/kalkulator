<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poradnik wędkarski</title>
    <meta http-equiv="default-style" content="pixi.css">
    <link href="pixi.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta name="keywords" content="wedkarstwozkapitanem,czat,łowienie,rozmawiaj,">
    <meta name="description" content="Forum wędkarskie">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Dominikapitanpiksel">
    <meta name="creator" content="wędkarstwozkapitanempixi">
    <link rel="shortcut icon" href="https://pbs.twimg.com/media/E0oZqutXIAoUhuN?format=png&name=small">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
</head>

<body>
<div id="wszystko">
    <?php
    include_once('gora.htm');
    $plik = "dane/artykuly.txt"; //wybór pliku
    $dane = file($plik); //pobieranie danych z pliku
    for ($i = 0; $i < count($dane); $i++) { //pętla przeszukująca plik
        list($tytul[$i], $tlo[$i], $tresc[$i], $autor[$i]) = explode(" || ", $dane[$i]); //dzielenie wierszy z pliku do zmiennej
    }
    for ($i = 0; $i < count($dane); $i++) { //przeszukiwanie wcześniej pobranych zmiennych
        if ($i == $_GET['wyprawa']) {
            echo '
  <article class="post">
 <a href="'.$tlo[$i].'" target="_blank"><img onclick="powieksz()" src="'.$tlo[$i].'" alt="zdjecie wyprawy" draggable="false" /></a>
    <h1 class="tytulpost">' . $tytul[$i] . '</h1>
    <p class="trescpost">' . $tresc[$i] . '</p>
</article>
';
        }
    }
    if (count($dane) < $_GET['wyprawa'] || count($dane) < 0) {
        echo "<h2>Nie znaleziono podanego wpisu</h2>";
                }
                else {
 echo '   
    <fieldset>
        <div style="font-weight:888;color:blue;font-size:48px;text-align:center;"> Komentarze do tego artykułu: </div> 
    <form action="" method="POST">
        <input type="text" placeholder="Napisz co sądzisz o tym artykule" name="tresc"/>
        <input type="submit" value="Dodaj komentarz"/>
    </form>
  ';
                }
session_start(); // rozpączecie sesji

if (!empty($_SESSION["uzytkwonikpixiid"])) {
$idu = $_SESSION["uzytkwonikpixiid"]; //id sesji użytkownika
}

$plik = "dane/komentarz.txt"; //wybór pliku
$dane = file($plik); //pobieranie danych z pliku
for ($i = 0; $i < count($dane); $i++) { //pętla przeszukująca plik
  list($nazwaid[$i], $idodbiorcy[$i], $data[$i], $nazwa[$i], $tresc[$i]) = explode(" || ", $dane[$i]); //dzielenie wierszy z pliku do zmiennej
}
for ($i = 0; $i < count($dane); $i++) { //przeszukiwanie wcześniej pobranych zmiennych
    if ($idodbiorcy[$i]==$_GET['wyprawa']) {
        echo "<div id='".$i."' class='wiadomosc' ><div class='nazwau'>$nazwa[$i] dodał(a) o <time> $data[$i] </time></div><div class='tresc'>" . $tresc[$i] . "</div></div>";
    }
}
?>
    </fieldset>
</div>
</body>
</html>
<style>
    .post::before {
        background-color: blue;
    }
    h2 {
        font-size:88px;
        color:red;
        font-weight: 800;
    }
    .post {
        background-color: white;
        min-height:488px;
        font-size:28px;
        border: 5px dotted #5d00ff;
    }
    .tytulpost {
        text-align: center;
        font-weight:888;
        font-size:48px;
        position: relative;
    margin: 148px;
    }
    .post img {
        height:288px;
        float:left;
        width:288px;
        margin:28px;
    }
    input[type="text"] {
        width:80%;
        height:28px;
        border-radius:48px;
    }
    input [type="submit"] {
        width:18%;
        height:28px;
    }
    .wiadomosc {
        background-color: white;
        border-radius:48px;
        margin:12px;
        padding:8px;
    }
</style>


<?php

$data = date('m.d.y H:i ');
$nazwa="kapitan";/*trim($_SESSION['uzytkwonikpixi'])*/;
$nazwaid="8"/*trim($_SESSION['uzytkwonikpixiid'])*/;
$idodb = $_GET['wyprawa'];

 if (!empty($_POST['tresc'])) {
    $plik = "dane/komentarz.txt";
    if (is_writeable($plik)) {
      if (!$handle = fopen($plik, "a")) echo "<span style='color:red'>Błąd...</span>";
     if (fwrite($handle,$nazwaid." || ".$idodb." || ".$data." || ".$nazwa." || " .htmlentities($_POST['tresc'])."
") === FALSE) echo "Błąd...";
        else echo "<span style='color:red;font-size:large;display:none;'>Wiadomość wysłana!...</span><br>";
      fclose($handle);
    } else echo "Nie udało się..";
  }
  $_POST['tresc'] = "";
  ?>

  <script>

  </script>