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
<body id="petya-g">
    <div class="container">
        <header>

            <?php include("../includes/logo.php") ?>


            <nav>

                <?php include("../includes/navigation.html")?>
            </nav>
        </header>
        <main class="row">

            <section class="col-sm-10 col-sm-offset-1">
                <article><img src="../images/pe-g.png" alt="Petya" id="Petya" class="img-responsive"></article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article>
                    <h2>PETYA</h2>
			<h3>CHARACTER INFO</h3>
			<p><strong>Real Name:</strong> Петя Гроздарска</p>
			<p><strong>Birthday:</strong>: 04-09-1991</p>
			<p><strong>Height:</strong> 165см</p>
			<p><strong>Weight:</strong> 51кг</p>
			<p><strong>History:</strong> Петя израства като съвсем нормално момиче, ходейки на училище и играейки със своите връстници. Това, което остава скрито за света са нейните изтъкнати хакерски умения, които държи в пълна тайна . Дочува за историите на Светлин Наков, тя пробива в сайта на правителството и намира документацията за всички проведени експерименти под кодово име “Terminakov”. Тайно, тя изпробва някои от тях и върху себе си.</p>
			<p><strong>Powers:</strong> В ролята на бизнес асистент, играейки го „секретарка“, никой не подозира за уменията, които са скрити зад образа на това симпатично момиче. Вечер, когато останалите герои заспят, пияни като мотики, тя става и поправя техния код, които те сами биха нарекли‚‘мусака‘‘ ако го видят преди нейната редакция.</p>

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
