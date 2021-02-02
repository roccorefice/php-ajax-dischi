<?php 
    include __DIR__ . '/src/partials/db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
<body>

    <header class="navbar">
        <div class="container">
        <img src="./src/img/logo.png" alt="">
        </div>
    </header>
    <main id="site_main">
    <div class="container d_flex">
        
    <?php 
    foreach ($db_dischi as $disco) {?>
        <div class="card ">
        <img src="<?php echo $disco['poster']; ?>" alt="">
        <h5><?php echo $disco['title']; ?></h5>
        <p><?php echo $disco['author']; ?></p> 
        <p><?php echo $disco['year']; ?></p>            
        </div>
    <?php
    }
    ?>
    </div>
    </main>
<script src="./dist/js/main.js"></script>
</body>
</html>

