<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Title</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php

$id=$_GET['id'];
$api_call=file_get_contents("https://imdb-api.com/en/API/Title/k_24d933uc/".$id."/Trailer,");
$trailer_list=json_decode($api_call,true);

$title=$trailer_list['title'];
$fullTitle=$trailer_list['fullTitle'];
$trailer=$trailer_list['trailer']['linkEmbed'];
$keywords=$trailer_list['keywords'];
$imDbRating=$trailer_list['imDbRating'];
$genres=$trailer_list['genres'];
$directors=$trailer_list['directors'];
$plot=$trailer_list['plot'];
$runtimeMin=$trailer_list['runtimeMins'];
$runtimeHour=$trailer_list['runtimeStr'];
$releaseDate=$trailer_list['releaseDate'];
$image=$trailer_list['image'];
$year=$trailer_list['year'];
$type=$trailer_list['type'];
$cast=$trailer_list['stars'];
$country=$trailer_list['countries'];
?>
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
    <h1><?php echo $fullTitle; ?></h1>
</div>

<iframe  src="<?php echo $trailer; ?>"  allowfullscreen>
</iframe>

<hr>
<div class="title">
    <img src="<?php echo $image; ?>">
    <h1><?php echo $title; ?></h1>
    <div class="rating">
        <?php echo $type; ?> &emsp; <?php echo $imDbRating; ?>    &emsp;     <?php echo $runtimeMin; ?>
    </div>
    <div class="plot">
        <?php echo $plot; ?>
    </div>
    <div class="about"><br>

        Genre: &emsp;&emsp;&nbsp;<p class="genre"><?php echo $genres; ?></p>
        <br>
        Cast:  &emsp;&emsp;&emsp;<p class="cast"><?php echo $cast; ?></p>
        <br>
        Director:  &emsp;&ensp;<p class="director"><?php echo $directors; ?></p>
        <br>
        Country: &emsp;&ensp;<p class="country"><?php echo $country; ?></p>
        <br>
        Duration: &emsp; <p class="duration"><?php echo $runtimeHour; ?></p>
        <br>
        Release: &emsp; &nbsp;<p class="release"><?php echo $releaseDate; ?></p>
        <br>
        Keywords: &ensp; <p class="tags"><?php echo $keywords; ?></p>

    </div>
</div>

</body>
</html>





<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Movie Title</title>-->
<!--    <link rel="stylesheet" href="style.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<div class="header">-->
<!--    <a class="index" href="potentialindex.php"> ThMDb</a>-->
<!--    <a class="menu" href="#home">Home</a>-->
<!--    <div class="dropdown">-->
<!--        <a class="menu">Movies</a>-->
<!---->
<!--        <div class="dropdown-content">-->
<!--                <div class="column">-->
<!--                    <a class="menu" href="api_mostPopularMovies.php">Most Popular Movies</a>-->
<!--                    <a class="menu" href="api_moveis_top250.php">Top Rated Movies</a>-->
<!--                    <a class="menu" href="#">Top Box Office</a>-->
<!--                    <a class="menu" href="api_inThreaters.php">In Theaters</a>-->
<!--                    <a class="menu" href="#">Coming soon</a>-->
<!---->
<!--                </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="dropdown">-->
<!---->
<!--        <a class="menu">Tv Shows</a>-->
<!---->
<!--        <div class="dropdown-content">-->
<!--            <div class="column">-->
<!--                <a class="menu" href="api_mostPopularTvs.php">Most Popular Shows</a>-->
<!--                <a class="menu" href="api_tv_top250.php">Top Rated Shows</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="search">-->
<!--        <form method="get" action="search.php" class="search">-->
<!--            <input type="text" name="expression" placeholder="Search IMDb" required>-->
<!--            <button type="submit"><i class="fa fa-search"></i></button>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="title-title">-->
<!--    <h1>Dune 2021</h1>-->
<!--</div>-->
<!--<iframe  src="https://www.imdb.com/video/imdb/vi2959588889/imdb/embed"  allowfullscreen>-->
<!--    </iframe>-->
<!---->
<!--<hr>-->
<!--<div class="title">-->
<!--    <img src="https://imdb-api.com/images/original/MV5BN2FjNmEyNWMtYzM0ZS00NjIyLTg5YzYtYThlMGVjNzE1OGViXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_Ratio0.6716_AL_.jpg">-->
<!--    <h1>Dune</h1>-->
<!--    <div class="rating">-->
<!--        8.2-->
<!--    </div>-->
<!--    <div class="plot">-->
<!--        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti distinctio eius excepturi illo iure, magnam nemo pariatur perspiciatis placeat porro praesentium quae temporibus. Aliquam cumque dicta reprehenderit tenetur ullam?-->
<!--    </div>-->
<!--    <div class="about"><br>-->
<!---->
<!--        Genre: &emsp;&emsp;&nbsp;<p class="genre">2</p>-->
<!--        <br>-->
<!--        Cast:  &emsp;&emsp;&emsp;<p class="cast">2</p>-->
<!--        <br>-->
<!--        Director:  &emsp;&ensp;<p class="director">2</p>-->
<!--        <br>-->
<!--        Country: &emsp;&ensp;<p class="country">2</p>-->
<!--        <br>-->
<!--        Duration: &emsp; <p class="duration">2</p>-->
<!--        <br>-->
<!--        Release: &emsp; &ensp;<p class="release">2</p>-->
<!--        <br>-->
<!--        Keywords: &ensp; <p class="tags">2</p>-->
<!---->
<!--    </div>-->
<!--</div>-->
<!---->
<!--</body>-->
<!---->
<!---->
<!--</html>-->