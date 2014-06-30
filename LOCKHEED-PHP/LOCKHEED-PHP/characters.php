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
    <?php include("includes/layout.php") ?>

    <title> <?php echo "$title" ?>  </title>
</head>
<body id="characters">
    <div class="container">
        <header>

            <?php include("includes/logo.php") ?>


            <nav class="row">
                <div class="col-sm-12">
                     <?php include("includes/navigation.html")?>
                </div>
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
                    <figure  class="characters">
                        <a href="characters/nakov.php"><img src="images/nakov.png" alt="Nakov" class="img-responsive"></a>
                        <figcaption class="figcaption"><a href="characters/nakov.php" alt="nakov">SVETLIN NAKOV</a></figccaption>
                    </figure>
                
                    <figure  class="characters">
                        <a href="characters/vladi-g.php"><img src="images/vladi-g.png" alt="Vladimir" class="img-responsive"></a>
                        <figcaption class="figcaption"><a href="characters/vladi-g.php" alt="Vladi-g">VLADIMIR GEORGIEV</a></figcaption>
                    </figure>
                
                    
                    <figure class="characters">
                        <a href="characters/teo.php"><img src="images/teo.png" alt="Teodor" class="img-responsive"></a>
                        <figcaption class="figcaption"><a href="characters/teo.php" alt="Teodor">TEODOR KURTEV</a></figcaption>
                    </figure>
                </article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article>
                   <figure class="characters">
                       <a href="characters/petya-g.php"><img src="images/petya.png" alt="Petya" class="img-responsive"></a>
                       <figcaption class="figcaption"><a href="characters/petya-g.php" alt="Petya">PETYA GROZDARSKA</a></figcaption>
                    </figure>
                   <figure class="characters">
                       <a href="characters/vladi-k.php"><img src="images/vladi-k.png" alt="Vladislav" class="img-responsive"></a>
                       <figcaption class="figcaption"><a href="characters/vladi-k.php" alt="Vladislav">VLADISLAV KARAMFILOV</figcaption>
                       </figure>
                  <figure class="characters">
                      <a href="characters/hristo.php"><img src="images/hristo.png" alt="Hristor" class="img-responsive"></a>
                      <figcaption class="figcaption"><a href="characters/hristo.php" alt="Hristo">HRISTO TENCHEV</figcaption>
                   </figure>
                </article>
            </section>

        </main>

        <footer class="row">
            <section id="foot" class="col-sm-10 col-sm-offset-1">
                <?php include("includes/foot.php") ?>
                <?php include("includes/icons.html") ?>
            </section>
        </footer>
    </div>

    <script src="scripts/navigation.js"></script>
    <script src="scripts/bootstrap.min.js"></script>

</body>
</html>
