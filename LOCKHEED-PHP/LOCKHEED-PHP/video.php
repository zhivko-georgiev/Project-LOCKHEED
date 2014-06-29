<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/php; charset=UTF-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css" /> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include("includes/layout.php") ?>

    <title> <?php echo "$title" ?>  </title>
    <style>
        .video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px; height: 0; overflow: hidden;
}
 
.video-container iframe,
.video-container object,
.video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
       </style>
</head>
<body>
    <div class="container">
        <header>

            <?php include("includes/logo.php") ?>

           <section class="row">
            <nav class="col-sm-12 col-md-offset-0 col-sm-offset-1">
                <div class="center-block">
                     <?php include("includes/navigation.html")?>
                </div>
            </nav>
           <section>
        </header>
        <main class="row">
            <section class="col-sm-10 col-sm-offset-1">
                 <div class="video-container">
                     <iframe width="100%" height="600px" src="http://www.youtube.com/embed/Ad4ydNIjkas" frameborder="0" allowfullscreen></iframe>
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

