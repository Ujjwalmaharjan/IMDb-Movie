<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>In theaters</title>
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


<div class="title-title">
    <h1>In Theaters</h1>
</div>


<div class="main">


    <?php
    $apicall = file_get_contents("https://imdb-api.com/en/API/InTheaters/k_24d933uc");
    $list = json_decode($apicall, true);
    foreach ($list['items'] as $list_item) {
            $id = $list_item['id'];
                $title = $list_item['title'];
                $fullTitle = $list_item['fullTitle'];
                $year = $list_item['year'];
                $image = $list_item['image'];
                $imDbRating = $list_item['imDbRating'];
                $plot=$list_item['plot'];

                ?>

                <div class="show" id="click" onclick="location.href='title.php?id=<?php echo $id;?>'">

                    <img src="<?php echo $image; ?>">

                    <div class="show-name">
                        <h3><?php echo $title; ?></h3>
                        &#9733;<?php echo $imDbRating; ?>
                    </div>


                </div>
                <?php


    }


    ?>

</div>


</body>
</html>

