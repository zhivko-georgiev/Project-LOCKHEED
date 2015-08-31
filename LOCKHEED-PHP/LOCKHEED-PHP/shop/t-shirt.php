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
<body id="characters">
    <div class="container">
        <header>

            <?php include("../includes/logo.php") ?>


            <nav class="row">
                <div class="col-sm-12">
                     <?php include("../includes/navigation.html")?>
                 </div>
            </nav>
        </header>
        <main class="row">

            <section class="col-sm-10 col-sm-offset-1">
                <article class="col-md-5">
                    <iframe frameborder="0" scrolling="no" width="290" height="290"
                            src="../images/t-shirt-nakov.png" name="imgbox" id="imgbox" >
                        <p>iframes are not supported by your browser.</p>
                    </iframe><br />
                </article>
                <article class="col-md-5">
                <a href="../images/t-shirt-nakov.png" target="imgbox">Nakov</a><br />
                <a href="../images/t-shirt-teo.png" target="imgbox">Teo</a><br />
                <a href="../images/t-shirt-petya.png" target="imgbox">Petya</a><br />
                <a href="../images/t-shirt-vladi-g.png" target="imgbox">Vladi-G</a><br />
                <a href="../images/t-shirt-vladi-k.png" target="imgbox">Vladi-K</a><br />
                <a href="../images/t-shirt-hristo.png" target="imgbox">Hristo</a>
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







