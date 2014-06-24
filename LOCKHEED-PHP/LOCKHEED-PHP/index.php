<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/php; charset=UTF-8">
    <link rel="stylesheet" href="styles/styles.css" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include("layout.php") ?>
   
    <title> <?php echo "$title" ?>  </title>
</head>
<body>
    <div class="container">
     <header>

           <?php include("logo.php") ?>

   
        <nav>
           
                 <?php include("navigation.html")?>
       </nav>
    </header>
        <main class="row">
            
            <section class="col-sm-5 col-lg-offset-1">
                <article><img src="images/Big-Bang-Theory2.jpg" class="img-responsive" /></article>
                </section>
            <section class="col-sm-5 col-lg-offset-0">
                <article>
                    <img src="images/Big-Bang-Theory2.jpg" class="img-responsive"/></article>
                </section>
            <section class="row">
                <div class="col-xs-10 col-xs-offset-1">
                <?php include("content.html") ?>
                </div>
            </section>
        </main>

       
        
        <footer>
           
             <?php  include("foot.php") ?>
            
        </footer>
    </div>
      
    <script src="scripts/navigation.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
