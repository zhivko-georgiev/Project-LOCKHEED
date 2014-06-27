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
<body id="hristo">
    <div class="container">
        <header>

            <?php include("logo.php") ?>


            <nav>

                <?php include("navigation.html")?>
            </nav>
        </header>
        <main class="row">

            <section class="col-sm-10 col-sm-offset-1">
                <article><img src="images/hristo-tenchev.jpeg" alt="Hristo" id="Hristo" class="img-responsive"></article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article>
                    <h2>KURTEV</h2>
                    <h3>CHARACTER INFO</h3>
                    <p><strong>Real Name:</strong> Теодор Куртев</p>
                    <p><strong>Birthday:</strong>:  02-04-1992</p>
                    <p><strong>Height:</strong> 180см</p>
                    <p><strong>Weight:</strong> 76кг</p>
                    <p><strong>History:</strong> Като един амбициозен бъдещ програмист, той прекарва детството си търсейки велик учител, който да му предаде тайната на истинското софтуерно познание. Малко преди да се откаже окончателно от своята мечта, той бива повикан като „чирак“ под крилото на великия майстор Светлин Наков. Обучава го като свое дете в тайните на “high-quality-coding”-а  и го подготвя за свой съюзник в прииждащата война.</p>
                    <p><strong>Powers:</strong> Известен като дясната ръка на своя учител, Теодор дейно изготвя стратегиите за най-качествено, бързо и ефективно обучение на младите войници – програмистите. Именно той ще поведе редиците в заветния ден.</p>

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
