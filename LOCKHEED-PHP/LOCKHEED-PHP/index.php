<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/php; charset=UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
   
    <?php include("includes/layout.php") ?>
   
    <title> <?php echo "$title" ?>  </title>
</head>
<body>
    <div class="container">
     <header>

           <?php include("includes/logo.php") ?>

   
        <nav>
           
                 <?php include("includes/navigation.html")?>
       </nav>
    </header>
        <main class="row">
            
            <section class="col-md-5 col-lg-offset-1">
                <article><img src="images/tas2.png" class="img-responsive" /></article>
                </section>
            <section class="col-md-5 col-lg-offset-0">
                <article>
                    <img src="images/tas.png" class="img-responsive"/></article>
                </section>
            <section class="row">
                <div class="col-xs-10 col-xs-offset-1">
                <?php include("includes/content.html") ?>
                </div>
            </section>
        </main>

       
        
        
           
             <?php  include("includes/foot.php") ?>
            
            <?php include("includes/icons.html") ?>
            
        
    </div>
      
    <script src="scripts/navigation.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
</body>

</html>
