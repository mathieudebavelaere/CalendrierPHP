<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assets/css/style.min.css">
    <link rel="stylesheet" href="./assets/css/mobil.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier PHP</title>
</head>
<body>
    <nav class="block">
        <h1>Calendrier PHP</h1>
        <div class="titleBox">
            <p class="titleName">@Debavelaere Mathieu</p>
            <p class="titleContact">Contact :</p>
            <a href="https://www.linkedin.com/in/mathieu-debavelaere-b38825253/">
                <div class="iconlink"></div>
            </a>
        </div>
    </nav>
<div class="boxIndex">
    <p class="textEnter">Bienvenue sur mon <br> <span class=fontC> calendrier</span><br> Généré en PHP </p>
<a id="todayAnime" href="./calendar.php?months=<?= date('n')?>&years=<?= date('Y') ?>&validate=" class="boxEnter">Entrée</a>
</div>
<img id="todayMen" src="./assets/img/today.png" alt="">
<script src="./assets/js/todayMen.js"></script>
</body>
</html>