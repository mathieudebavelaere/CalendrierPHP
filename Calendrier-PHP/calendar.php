<?php include_once("./controllers.php") ?>

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
    <article>
        <form action="calendar.php" method="GET">
            <div class="boxSelect">

                <?php
                if ($_GET['months'] == 1) {
                ?>
                    <a class="previous" href="./calendar.php?months=<?= $_GET['months'] + 11 ?>&years=<?= $_GET['years'] - 1 ?>&validate="></a>
                <?php } else {
                ?>
                    <a class="previous" href="./calendar.php?months=<?= $_GET['months'] - 1 ?>&years=<?= $_GET['years'] ?>&validate="></a>
                <?php } ?>
                <select name="months" class="boxTwo">
                    <?php
                    foreach ($months as $key => $m) {
                    ?>
                        <option <?= $chooseMonths == $key ? 'selected' : ''; ?> value="<?= $key ?>"> <?= $m; ?></option>
                    <?php
                    }
                    ?>
                </select>

                <select name="years" class="boxTwo">

                    <?php
                    for ($years = 2050; $years > 1970; $years--) {
                    ?>
                        <option <?= $chooseYears == $years ? 'selected' : '' ?>><?= $years ?></option>
                    <?php
                    }
                    ?>
                </select>
                <button name="validate" class="boxTwo">Valider</button>
                <?php
                if ($_GET['months'] == 12) {
                ?>
                    <a class="next" href="./calendar.php?months=<?= $_GET['months']  - 11 ?>&years=<?= $_GET['years'] + 1 ?>&validate="></a>
                <?php } else { ?>
                    <a class="next" href="./calendar.php?months=<?= $_GET['months'] + 1 ?>&years=<?= $_GET['years'] ?>&validate="></a>
                <?php } ?>
            </div>
        </form>
    </article>

    <article class="box">
        <p class="timeDate">
            <?= $months[$monthsT] . ' ' . $yearsT . ' ' . $dayT ?>
        </p>
        <div class="containerMonts">
            <div class="week">
                <p>Lundi</p>
            </div>
            <div class="week">
                <p>Mardi</p>
            </div>
            <div class="week">
                <p>Mercredi</p>
            </div>
            <div class="week">
                <p>Jeudi</p>
            </div>
            <div class="week">
                <p>Vendredi</p>
            </div>
            <div class="week">
                <p>Samedi</p>
            </div>
            <div class="week">
                <p>Dimanche</p>
            </div>
            <?php
            for ($fixOther = 1; $fixOther <= $totalOther; $fixOther++) {
            ?>
                <p class="containerOther"><?= $fixOther ?></p>
            <?php
            }
            for ($fixDay = 1; $fixDay <= $dayMonths; $fixDay++) {
            ?>
                <div class="boxDay notEvent">
                    <?= $fixDay ?>
                </div>
            <?php
            }
            ?>

        </div>

    </article>

    <?php
    $paqueDay =  date("j", easter_date($yearsT));
    $paqueMonth = date("n", easter_date($yearsT));

    $jour = "$yearsT-$paqueMonth-$paqueDay"; // Notre date par default
    $tuesdayDay = date('d', strtotime($jour . ' - 47 days'));
    $tuesdayMonth = date('n', strtotime($jour . ' - 47 days'));
    $tuesdayYear = date('Y', strtotime($jour . ' - 47 days'));
    ?>
    <div id="tuesdayDay">
        <?= $tuesdayDay ?>
    </div>
    <div id="tuesdayMonth">
        <?= $tuesdayMonth ?>
    </div>
    <div id="tuesdayYear">
        <?= $tuesdayYear ?>
    </div>
    <div id="paqueDay">
        <?= $paqueDay ?>
    </div>
    <div id="paqueMonth">
        <?= $paqueMonth ?>
    </div>
    <?php
    $today = date("j");
    $monthsToday = date("n");
    $yearsToday = date("Y");
    ?>

    <div id="today">
        <?= $today ?>
    </div>
    <div id="monthsToday">
        <?= $monthsToday ?>
    </div>
    <div id="yearsToday">
        <?= $yearsToday ?>
    </div>


    <script src="./assets/js/script.js"></script>
</body>

</html>