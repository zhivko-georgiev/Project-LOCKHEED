<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/php; charset=UTF-8">
    <link rel="stylesheet" href="styles/styles.css" type="text/css" />
    <link rel="stylesheet" href="styles/heroes-styles.css" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include("layout.php") ?>

    <title> <?php echo "$title" ?>  </title>
</head>
<body id="characters">
    <div class="container">
        <header>

            <?php include("logo.php") ?>


            <nav>

                <?php include("navigation.html")?>
            </nav>
        </header>
        <main class="row">

            <section class="col-sm-10 col-sm-offset-1">
                <article>
                    <figure>
                        <img src="images/characters.png" id="CharImage" alt="Avengers" class="img-responsive">
                        <figcaption class="figcaption"><h1> THE AVENGERS OF SOFTUNI</h1></figcaption>
                    <figure>
                    </article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article>
                    <figure class="characters">
                        <a href="nakov.php"><img src="images/nakov.png" alt="Nakov" class="img-responsive"></a>
                        <figcaption class="figcaption"><a href="nakov.php" alt="nakov">SVETLIN NAKOV</a></figccaption>
                    </figure>
                    <figure class="characters">
                        <a href="vladi-g.php"><img src="images/vladi-g.png" alt="Vladimir" class="img-responsive"></a>
                        <figcaption class="figcaption"><a href="vladi-g.php" alt="Vladi-g">VLADIMIR GEORGIEV</a></figcaption>
                    </figure>
                    <figure class="characters">
                        <a href="Teo.php"><img src="images/teo.png" alt="Teodor" class="img-responsive"></a>
                        <figcaption class="figcaption"><a href="teo.php" alt="Teodor">TEODOR KURTEV</a></figcaption>
                    </figure>
                </article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article>
                   <figure class="characters">
                       <a href="petya.php"><img src="images/petya.png" alt="Petya" class="img-responsive"></a>
                       <figcaption class="figcaption"><a href="petya.php" alt="Petya">PETYA GROZDARSKA</a></figcaption>
                    </figure>
                   <figure class="characters">
                       <a href="vladi-k.php"><img src="images/vladi-k.png" alt="Vladislav" class="img-responsive"></a>
                       <figcaption class="figcaption"><a href="vladi-k.php" alt="Vladislav">VLADISLAV KARAMFILOV</figcaption>
                       </figure>
                  <figure class="characters">
                      <a href="hristo.php"><img src="images/hristo.png" alt="Hristor" class="img-responsive"></a>
                      <figcaption class="figcaption"><a href="hristo.php" alt="Hristo">HRISTO TENCHEV</figcaption>
                   </figure>
                </article>
            </section>

        </main>

        <footer class="row">
            <section id="foot" class="col-sm-10 col-sm-offset-1">
                <?php include("foot.php") ?>
            </section>
        </footer>
    </div>

    <script src="scripts/navigation.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
