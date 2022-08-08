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
    <?php
    include_once("gora.htm")
    ?>

    <div id="wszystko">
<section>
        <div id="posty">
<?php include("wszystkieposty.php"); ?>
        </div>
</section>
    </div>

    </div>
</body>

</html>
<style>

    #wszystko {
       /* background: white;*/
       position: relative;
    }

    #posty {
        position: relative;
        width: auto;
        top:48px;
    }

    .post {
        min-width: 388px;
        max-width:488px;
        height: 488px;
        float: left;
        background-color: white;
        text-align: center;
        cursor: pointer;
        transition-duration: 3s;
        z-index:8;
        margin:10px;
        transform: scale(1);
        border:3px solid green;
    }

    .tytulpost {
        font-size: 88px;
        background: #faebd78c linear-gradient(45deg, #98f30cb0, transparent);
    }

    .trescpost {
        font-size: 28px;
        background: #54ff1a85;
    }
    #czytajwiecej {
        position: absolute;
        bottom:1px;
        right:1px;
        color:blue;
        font-weight: 800;
        font-size:48px;
        background-color:#00ffff30;
    }
    #czytajwiecej:hover {
        opacity:0.4;
    }

    @media only screen and (max-device-width: 680px) {
.post {
    width:80%;
}
    }
</style>