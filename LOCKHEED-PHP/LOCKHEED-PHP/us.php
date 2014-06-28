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
                <h1 class="col-md-10 col-md-offset-1">TEAM "LOCKHEED"</h1>
                </article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article >
                    <div class ="col-md-6 col-md-offset-1">
                        <img src="images/zhivko.png" id="zhivko" alt="zhivko" class="img-responsive">
                    </div>
                   <div class="col-md-4">
                            <ul>
                                <li>Zhivko Georgiev</li>
                                <li>zdgeorgiev@abv.bg</li>
                            <ul>
                  <div>
                </article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article>
                    <div class="col-md-6 col-md-offset-1">
                        <img src="images/daniel.png" id="daniel" alt="daniel" class="img-responsive">
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li>Daniel Hadzhiev</li>
                            <li>insanee8@gmail.com</li>
                            <ul>
                    <div>
                </article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article>
                    <div class="col-md-6 col-md-offset-1">
                        <img src="images/rosen.png" id="rosen" alt="rosen" class="img-responsive">
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li>Rosen Iliev</li>
                            <li>roseniliev92@yahoo.com</li>
                            <ul>
                    <div>
                </article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article>
                    <div class="col-md-6 col-md-offset-1">
                        <img src="images/silviabs.png" id="silvia" alt="silvia" class="img-responsive">
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li>Silvia Slavcheva</li>
                            <li>silvia.b.slavcheva@gmail.com</li>
                            <ul>
                  <div>
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


