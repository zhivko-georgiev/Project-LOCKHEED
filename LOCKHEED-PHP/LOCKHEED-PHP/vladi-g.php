<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/php; charset=UTF-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <link rel="stylesheet" href="css/heroes-styles.css" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include("layout.php") ?>

    <title> <?php echo "$title" ?>  </title>
</head>
<body id="vladi-g">
    <div class="container">
        <header>

            <?php include("logo.php") ?>


            <nav>

                <?php include("navigation.html")?>
            </nav>
        </header>
        <main class="row">

            <section class="col-sm-10 col-sm-offset-1">
                <article><img src="images/vladi-georgiev.png" alt="Vladi-G" id="Vladi-G" class="img-responsive"></article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article>
                    <h2>VLADIMIR</h2>
                    <h3>CHARACTER INFO</h3>
                    <p><strong>Real Name:</strong> C3PO</p>
                    <p><strong>Birthday:</strong>: 10-12-1991</p>
                    <p><strong>Height:</strong> 185см</p>
                    <p><strong>Weight:</strong> 73кг</p>
                    <p><strong>History:</strong> Неговата история не е известна. Има много спекулации, че Владимир всъщност е първия успешен опит на Светлин Наков за създаване на киборг, изпълняващ човешки дейности и притежаващ собствени умения в писането на код.</p>
                    <p><strong>Powers:</strong> Уменията му позволяват да замества великия майстор Наков в просветляването на младите умове, в случай, че той е имал тежка вечер в някое заведение и още по-тежко утро.</p>

                </article>
            </section>

        </main>

        <footer class="row">
            <section id="foot" class="col-sm-10 col-sm-offset-1">
                <?php include("foot.php") ?>
                <?php include("icons.html") ?>
            </section>
        </footer>
    </div>

    <script src="scripts/navigation.js"></script>
    <script src="scripts/bootstrap.min.js"></script>

</body>
</html>