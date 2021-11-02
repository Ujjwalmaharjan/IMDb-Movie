<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Box Office All Time</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>



<div class="header">
    <a class="index" href="index.php"> ThMDb</a>
    <a class="menu" href="home.php">Home</a>

    <div class="dropdown">
        <a class="menu">Movies</a>

        <div class="dropdown-content">
            <div class="column">
                <a class="menu" href="api_mostPopularMovies.php">Most Popular Movies</a>
                <a class="menu" href="api_moveis_top250.php">Top Rated Movies</a>
                <a class="menu" href="api_boxOfficeAllTime.php">Top Box Office</a>
                <a class="menu" href="api_inThreaters.php">In Theaters</a>
                <a class="menu" href="api_commingSoon.php">Coming soon</a>

                </div>
            </div>
        </div>
        <div class="dropdown">

            <a class="menu">Tv Shows</a>

            <div class="dropdown-content">
                <div class="column">
                    <a class="menu" href="api_mostPopularTvs.php">Most Popular Shows</a>
                    <a class="menu" href="api_tv_top250.php">Top Rated Shows</a>
                </div>
            </div>
        </div>
        <div class="search">
            <form method="get" action="search.php" class="search">
                <input type="text" name="expression" placeholder="Search IMDb" required>
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
</div>

<div class="title">

        <?php
        $api=file_get_contents("https://imdb-api.com/en/API/BoxOffice/k_24d933uc");
        $api=json_decode($api,true);

        foreach ($api['items'] as $result)
        {
            $id=$result['id'];
            $title=$result['title'];
            $image=$result['image'];
            $weekend=$result['weekend'];
            $gross=$result['gross'];
            $weeks=$result['weeks'];


            ?>
            <div class="img">
                <img src="<?php echo $image; ?>">
            </div>
            <div class="box-title">

                Title:  <?php echo $title; ?>
            </div>
            <div class="box-weekend">

                Weekend:  <?php echo $weekend; ?>
            </div>
            <div class="box-gross">
                Gross:  <?php echo $gross; ?>

            </div>
            <div class="box-weeks">
                Weeks:  <?php echo $weeks; ?>

            </div>


            <?php


        }


        ?>


</div>



</body>
</html>

