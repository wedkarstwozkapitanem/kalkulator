<?php 
$plik = "dane/artykuly.txt"; //wybór pliku
$dane = file($plik); //pobieranie danych z pliku
for ($i = 0; $i < count($dane); $i++) { //pętla przeszukująca plik
  list($tytul[$i],$tlo[$i],$tresc[$i],$autor[$i]) = explode(" || ", $dane[$i]); //dzielenie wierszy z pliku do zmiennej
}
for ($i = 0; $i < count($dane); $i++) { //przeszukiwanie wcześniej pobranych zmiennych
  if ($i == 0) {
 echo '
 <a href="artykul.php?wyprawa='.$i.'"><article class="post" style="background-image:url('.$tlo[$i].');min-width:82%;">
 <div class="tytulpost">'.$tytul[$i].'</div>
 <div class="trescpost">'.substr($tresc[$i],0,248);
 if ( mb_strlen($tresc[$i]) > 248) {
   echo '...' ;
 }
 echo ' 
 </div>
<div id="czytajwiecej"> Czytaj więcej </div>
</article>
</a>
 ';
  }
  else {
 echo '
 <a href="artykul.php?wyprawa='.$i.'"><article class="post" style="background-image:url('.$tlo[$i].')">
    <div class="tytulpost">'.$tytul[$i].'</div>
    <div class="trescpost">'.substr($tresc[$i],0,248);
    if ( mb_strlen($tresc[$i]) > 248) {
      echo '...' ;
    }
    echo ' 
    </div>
   <div id="czytajwiecej"> Czytaj więcej </div>
</article>
</a>
';
  }
}
