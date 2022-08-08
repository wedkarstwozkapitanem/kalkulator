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
<?php include("gora.htm") ?>

    <div id="wszystko">
        <!--Początek strony-->
        <div class="powitanie"><img src="obrazy/powitanie.jpg" alt="poczotek" draggable="false" /><span
                style="position:relative;left:10px"> Ahoj załoga! 👋🏻
                <hr> Profesjonalne wędkarstwo to ciągła nauka poznawania wody.Na tej stronie znajdziesz porady
                profesjonalistów na temat połowu różnych gatunków polskich ryb. 🐟🦈
            </span></div>
        <br>
        <fieldset id="dzial" class="dzial" style="padding-top:0;">
            <legend style="position:relative;left:68%"><img style="width:288px;" src="obrazy/ryba.png" alt="Dział 1"
                    draggable="false" /></legend>Dział 1
            <hr> Bez niego nie możesz przejść do następnych.Tu są podstawy wędkowania.🎣 <br>
            Na końcu jest quiz który sprawdzi zdobytą wiedzę.
        </fieldset>

        <fieldset class="poczotekwedk">
            <legend><img src="obrazy/wedka.png" alt="rozpączęci przygody wędkarskie" draggable="false" /></legend>Aby
            rozpocząć przygodę z wędkarstwem trzeba oczywiśćie zakupić wędke z odpowiednim zestawem,który umowimy w
            kolejnych częściach tego poradnika.Dodatkowym
            obowiązkowym ekwipunkiem wędkarza jest <span class="dym"> <img src="obrazy/plusz.jpg" /> wypychacz </span>
            oraz <span class="dym"> <img src="obrazy/podbierak.png" /> podbierak. </span>.
        </fieldset>

        <fieldset class="karta">
            <legend style="position:relative;left:50%;"><img height="100px" width="200px" src="obrazy/karta.png"
                    alt="karta wędkarska" draggable="false" /></legend> A właśnie chyba o czymś ważnym zapomnieliśmy🤔
            <hr>Chodzi o uprawnienia do połowu a mianowicie kartę wędkarską z opłaconymi składkami na dany rok <br> Aby
            zdobyć kartę należy udać się do skarbnika PZW w okolicy w celu informacji i uczyć się z naszego <a
                href="">poradnika</a> do egzaminów na <span class="dym"> <img src="obrazy/karta.png" /> kartę
                wędkarską</span>.
        </fieldset>

        <div style="border:3px solid green;margin-top:28px;background-color: rgb(91, 141, 185);">
            <div style="color:red;font-size:88px;background-color: rgba(13, 253, 253, 0.511);text-align: center;">To
                musisz znać!</div>
            <fieldset style="margin:28px;background:rgba(247, 7, 99, 0.401);color:black;">
                <legend style="width:628px;font-size:48px;">Wymiary i okresy ochronne ryb</legend>
                <table id="wymiary">
                    <tr>
                        <td class="gatunekwym" style="font-weight:888;">Gatunek</td>
                        <td class="wymiar" style="font-weight:888;">Wymiar</td>
                        <td class="okres" style="font-weight:888;">Okres</td>
                        <td class="przyneta" style="font-weight:888;">Przynęty</td>
                    </tr>
                    <tr>
                        <td class="gatunekwym">Lin</td>
                        <td class="wymiar">25</td>
                        <td class="okres">brak</td>
                        <td class="przyneta">czerwony robak</td>
                    </tr>
                        
                        <tr>
                        <td class="gatunekwym">szczupak</td>
                        <td class="wymiar">60</td>
                        <td class="okres">1 Stycznia do 1 maja</td>
                        <td class="przyneta">spinngowe</td>
                    </tr>
                </table>
                <button onClick="wymiary()" id="wymiarpoka" style="margin:12px;float:right;background:rgb(0, 153, 255);color:rgb(235, 252, 4);color:red;font-size:24px;height:48px;width:288px;cursor:pointer;">Pokaż więcej</button>
            </fieldset>
        </div>


        <div style="margin-top:28px;background:rgb(87, 40, 182);border:3px dotted blue">
            <div class="metod">W wędkarstwie wyróżniamy 3 metody:</div>
            <fieldset id="metody">
                <div class="metoda">Wędkarstwo spławikowe <img src="obrazy/splawik.png" alt="wędkarstwo spławikowe"
                        draggable="false" /></div>
                <div class="metoda">Wędkarstwo gruntowe <img src="obrazy/grunt.png" alt="wędkarstwo gruntowe"
                        draggable="false" /></div>
                <div class="metoda">Wędkarstwo spininngowe<img src="obrazy/spin.png" alt="wędkarstwo spininngowe"
                        draggable="false" />
                </div>
            </fieldset>
        </div>


        <fieldset id="poznajgatunki">
            <div> Zacznijmy od przedstawienia najczęściej łowionych polskich ryb </div>
            <legend style="font-size:18px;font-weight:600">
                atlas ryb
            </legend>
            <div id="atlas">
                <img src="https://lh3.googleusercontent.com/-zmGN8ZTdo3k/YSDIbEOFFCI/AAAAAAAAyUU/R7S0QDCYjHgdtIYdFcsJ9spGuHJ5DoZTQCLcBGAsYHQ/w593-h337/image.png"
                    alt="atlas" draggable="false" />
            </div>
        </fieldset>


        <div class="ciekawostka">
            <div class="tytulciekaw">Ciekawostka</div>
            <div class="tresciekaw">Gdy pada deszcz bierze leszcz</div>
        </div>



        <div>
            
        </div>


    </div>
</body>

</html>
<style>

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function wymiary() {
   $.ajax({
      type: "POST",
      url: "wymiary.php",
      success: function (wymiar) {
         document.getElementById("wymiary").innerHTML = wymiar;
document.getElementById("wymiarpoka").style.display = "none";
      }
   });
}
</script>