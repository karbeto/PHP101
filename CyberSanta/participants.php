<?php
    $people = file_get_contents('people.json');
    $participants = json_decode($people, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Santa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .input-group-text {
            width: 100px;
            text-align: center !important;
            justify-content: center;
        }

        body {
            min-height: 99vh;
        }

        .snowflake {
            position: absolute;
            width: 10px;
            height: 10px;
            background: linear-gradient(white, white);
            border-radius: 50%;
            filter: drop-shadow(0 0 10px white);
        }
    </style>
</head>

<body class="bg-dark text-white">
    <div id="snow" count="200"></div>

    <div class="py-5"></div>

    <main>

        <div class="px-4 py-5 text-center">
            <img class="d-block mx-auto mb-4" src="./cybersanta.png" alt="" width="150" height="150">
            <h1 class="display-5 fw-bold">Cyber Santa</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Below are all the people registered in this game who still haven't received any
                    gift.<br /> Send one to any of them and enter the game yourself.<br /> GOOD LUCK! </p>
            </div>
        </div>

        <div class="album py-5 text-dark">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" data-masonry='{"percentPosition": true }'>

                <?php 
                    foreach($participants as $participant){
                        if(!isset($participant['gift'])){
                        echo "
                        <div class='col'>
                            <div class='card shadow-sm'>
                                <img class='img-fluid'
                                    src='{$participant['picture']}'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$participant['name']}</h5>
                                    <p class='card-text'>
                                        {$participant['wish']} </p>
                                    <form method='POST' action='gift.php'>
                                        <div class='d-flex justify-content-between align-items-center'>
                                            <div class='input-group mb-3'>
                                                <input type='hidden' name='id' value='{$participant['id']}'>
                                                <input type='text' name='gift' class='form-control' placeholder='Enter Your Gift'>
                                                <button class='btn mx-2 btn-outline-secondary' type='submit'>Gift</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    ";
                    }
                }
                ?>
                </div>
            </div>
        </div>

    </main>



    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
    <script src="./pure-snow.js"></script>
</body>

</html>