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


            <nav>

                <?php include("includes/navigation.html")?>
            </nav>
        </header>
        <main class="row">

            

            <section class="col-sm-10 col-sm-offset-1">
                <article>
                    <figure  class="characters">
                        <a href="storylane/episode1.php"><img src="images/story2.jpg" width="170" height="170" alt="Nakov" class="img-responsive"></a>
                        <figcaption class="figcaption"><a href="storylane/episode1.php" alt="firms">THE EVIL RECTORS</a></figccaption>
                    </figure>
                
                    <figure  class="characters">
                        <a href="storylane/episod2.php"><img src="images/story2.jpg" width="170" height="170" alt="Nakov" class="img-responsive"></a>
                        <figcaption class="figcaption"><a href="storylane/episode1.php" alt="firms">THE PREPARATION</a></figccaption>
                    </figure>
                
                    
                     <figure  class="characters">
                        <a href="storylane/episode3.php"><img src="images/story2.jpg" width="170" height="170" alt="Nakov" class="img-responsive"></a>
                        <figcaption class="figcaption"><a href="storylane/episode1.php" alt="firms">THE FINAL COUNTDOWN</a></figccaption>
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
