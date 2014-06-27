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
<body id="vladi-k">
    <div class="container">
        <header>

            <?php include("logo.php") ?>


            <nav>

                <?php include("navigation.html")?>
            </nav>
        </header>
        <main class="row">

            <section class="col-sm-10 col-sm-offset-1">
                <article><img src="images/vladi-karamfilov.png" alt="Vladi-K" id="Vladi-K" class="img-responsive"></article>
            </section>
            <section class="col-sm-10 col-sm-offset-1">
                <article>
                   <h2>VLADISLAV</h2>
			        <h3>CHARACTER INFO</h3>
			        <p><strong>Real Name:</strong> Владислав Карамфилов</p>
			        <p><strong>Birthday:</strong>: 09-07-1992</p>
			        <p><strong>Height:</strong> 175см</p>
			        <p><strong>Weight:</strong> 82кг</p>
			        <p><strong>History:</strong> Произлиза от скромен род с много традиции. Счита се, че когато детето изпие един черпак от „отварата на кода“  го чака бляскава кариера в софтуерната индустиря. Нещещ ли обаче на своето кръщене, Владислав пада в котлето с отварата.</p>
			        <p><strong>Powers:</strong>  Презарежда с няколко капки от‚‘отварата на кода“ и веднага влиза в състояние, в което решава изпит по Java  в рамките на десет минути. Неговия талант е забелязан от Наков и е привикан в „Задругата“.</p>

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