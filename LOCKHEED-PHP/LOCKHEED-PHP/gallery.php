<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/php; charset=UTF-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css" />

    <link rel="stylesheet" href="css/gallery.css" type="text/css" />
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

     <section class="row">
                <div class="col-xs-10 col-xs-offset-1">
                <?php include("includes/gallery.html") ?>
                </div>
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
