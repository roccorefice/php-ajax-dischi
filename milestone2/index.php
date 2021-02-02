
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <!-- css -->
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
<body>
    <div id="app">

        <!-- header -->
        <header class="navbar">
            <div class="container">
                <img src="./src/img/logo.png" alt="">
            </div>
        </header>
        <!-- //header -->

        <!-- main -->
        <main id="site_main">
            <div class="container d_flex">
            <!-- v-for che cicla nell'array della lista degli album situata nel data del .json -->
                <div v-for="album in list_albums" class="card ">
                <img :src="album.poster" alt="">
                <h5>{{album.title}}</h5>
                <p>{{album.author}}</p> 
                <p>{{album.year}}</p>            
                </div>
                
            </div>
        </main>
        <!-- /main -->
    </div>


    <!-- axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- javascript -->
    <script src="src/js/main.js"></script>
</body>
</html>
<!-- //HTML -->


