<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/php; charset=UTF-8">
    <link rel="stylesheet" href="../css/styles.css" type="text/css" />
    <link rel="stylesheet" href="../css/heroes-styles.css" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="../scripts/jquery.easing.1.3.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <?php include("../includes/layout.php") ?>

    <title> <?php echo "$title" ?>  </title>
</head>
<body id="hristo">
    <div class="container">
        <header>

            <?php include("../includes/logo.php") ?>


            <nav>

                <?php include("../includes/navigation.html")?>
            </nav>
        </header>
        <main class="row">

            <section class="col-sm-10 col-sm-offset-1">
                <article><img src="../images/hristo-tenchev.jpeg" alt="Hristo" id="Hristo" class="img-responsive"></article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article>
                    <h2>HRISTO</h2>
                    <h3>CHARACTER INFO</h3>
                    <p><strong>Real Name:</strong> Христо Тенчев</p>
                    <p><strong>Birthday:</strong>: 03-08-1986 </p>
                    <p><strong>Height:</strong>  177см </p>
                    <p><strong>Weight:</strong> 76кг</p>
                    <p><strong>History:</strong> Фен на брейкденса като малък, изведнъж Христо преоткрива истинската си страст- програмирането и в частност създаването на игри за масова употреба.
Потърсен за съдействие от Наков в борбата със злите ректори, Христо решава да вкара в употреба най-новото си произведение.</p>
                    <p><strong>Powers:</strong> С ума си той може да контролира компютрите и да ги командва като истински отряд от войници. Техния софтуер ще даде огромно предимство на нашите Отмъстители.</p>

                </article>
            </section>

        </main>

        <footer class="row">
            <section id="foot" class="col-sm-10 col-sm-offset-1">
                <?php include("../includes/foot.php") ?>
                <?php include("../includes/icons.html") ?>
            </section>
        </footer>
    </div>

    <script src="../scripts/navigation.js"></script>
    <script src="../scripts/bootstrap.min.js"></script>

</body>
</html>
