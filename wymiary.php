<tr>
    <td class="gatunekwym" style="font-weight:888;">Gatunek</td>
    <td class="wymiar" style="font-weight:888;">Wymiar</td>
    <td class="okres" style="font-weight:888;">Okres</td>
    <td class="przyneta" style="font-weight:888;">Przynęty</td>
</tr>
<?php
$baza = "dane/wymiary.txt";
$plik = $baza;
$dane = file($plik);

for ($i = 1; $i < count($dane); $i++) {
    list($gatunek[$i], $wymiar[$i], $okres[$i], $ciekawosta[$i]) = explode(" || ", $dane[$i]);
}

for ($p = 1; $p < count($dane); $p++) {
    echo '
         <tr>
         <td class="gatunekwym">' . $gatunek[$p] . '</td>
         <td class="wymiar">' . $wymiar[$p] . '</td>
         <td class="okres">' . $okres[$p] . '</td>
         <td class="przyneta">' . $ciekawosta[$p] . '</td>
     </tr>
         ';
}
?>