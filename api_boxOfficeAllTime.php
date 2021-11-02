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
    <h1>Box Office All Time</h1>
</div>

<div class="table">


    <table class="table table-bordered table-striped mb-0">

        <tr>
            <th>Rank</th>
            <th>Title</th>
            <th>Year</th>
            <th>Worldwide Lifetime Gross </th>
            <th>Domestic Lifetime Gross </th>
            <th>Domestic</th>
            <th>Foreign Lifetime Gross </th>
            <th>Foreign</th>
        </tr>
<?php
$api=file_get_contents("https://imdb-api.com/en/API/BoxOfficeAllTime/k_24d933uc");

$api=json_decode($api,true);

foreach ($api['items'] as $result)
{
    $id=$result['id'];
    $rank=$result['rank'];
    $title=$result['title'];
    $worldwideLifetimeGross=$result['worldwideLifetimeGross'];
    $domesticLifetimeGross=$result['domesticLifetimeGross'];
    $domestic=$result['domestic'];
    $foreignLifetimeGross=$result['foreignLifetimeGross'];
    $foreign=$result['foreign'];
    $year=$result['year'];


    ?>

            <tr>
                <td><?php echo $rank; ?></td>
                <td class="table-title" onclick="location.href='title.php?id=<?php echo $id; ?>'"><?php echo $title; ?></td>
                <td><?php echo $year; ?></td>
                <td><?php echo $worldwideLifetimeGross; ?></td>
                <td><?php echo $domesticLifetimeGross; ?></td>
                <td><?php echo $domestic; ?></td>
                <td><?php echo $foreignLifetimeGross; ?></td>
                <td><?php echo $foreign; ?></td>
            </tr>
    <?php


}


?>

    </table>




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
<!--    <title>Box Office All Time</title>-->
<!--    <link rel="stylesheet" href="style.css">-->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--</head>-->
<!---->
<!---->
<!--<body>-->
<!---->
<!---->
<!---->
<!---->
<!--<div class="header">-->
<!--    <a class="index" href="index.php"> ThMDb</a>-->
<!--    <a class="menu" href="#home">Home</a>-->
<!--    <div class="dropdown">-->
<!--        <a class="menu">Movies</a>-->
<!---->
<!--        <div class="dropdown-content">-->
<!--            <div class="column">-->
<!--                <a class="menu" href="api_mostPopularMovies.php">Most Popular Movies</a>-->
<!--                <a class="menu" href="api_moveis_top250.php">Top Rated Movies</a>-->
<!--                <a class="menu" href="#">Top Box Office</a>-->
<!--                <a class="menu" href="api_inThreaters.php">In Theaters</a>-->
<!--                <a class="menu" href="#">Coming soon</a>-->
<!---->
<!--            </div>-->
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
<!--<div class="table-main">-->
<!---->
<!--    <div class="title">-->
<!--        <h1>Box Office All time</h1>-->
<!--    </div>-->
<!---->
<!--    <div class="table">-->
<!---->
<!---->
<!--        <table>-->
<!--            <tr>-->
<!--                <th>Rank</th>-->
<!--                <th>Title</th>-->
<!--                <th>Year</th>-->
<!--                <th>Worldwide Lifetime Gross </th>-->
<!--                <th>Domestic Lifetime Gross </th>-->
<!--                <th>Domestic</th>-->
<!--                <th>Foreign Lifetime Gross </th>-->
<!--                <th>Foreign</th>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>1</td>-->
<!--                <td>Avatar</td>-->
<!--                <td>2009</td>-->
<!--                <td>$2,847,246,203</td>-->
<!--                <td>$760,507,625</td>-->
<!--                <td>26.7%</td>-->
<!--                <td>$2,086,738,578</td>-->
<!--                <td>73.3%</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td>2</td>-->
<!--                <td>Avengers: Endgame</td>-->
<!--                <td>2019</td>-->
<!--                <td>$2,797,501,328</td>-->
<!--                <td>$858,373,000</td>-->
<!--                <td>30.7%</td>-->
<!--                <td>$1,939,128,328</td>-->
<!--                <td>69.3%</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td>3</td>-->
<!--                <td>Titanic</td>-->
<!--                <td>1997</td>-->
<!--                <td>$2,201,647,264</td>-->
<!--                <td>$659,363,944</td>-->
<!--                <td>30%</td>-->
<!--                <td>$1,542,283,320</td>-->
<!--                <td>70%</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td>4</td>-->
<!--                <td>Star Wars: Episode VII - The Force Awakens</td>-->
<!--                <td>2015</td>-->
<!--                <td>$2,069,521,700</td>-->
<!--                <td>$936,662,225</td>-->
<!--                <td>45.3%</td>-->
<!--                <td>$1,132,859,475</td>-->
<!--                <td>54.7%</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td>5</td>-->
<!--                <td>Avengers: Infinity War</td>-->
<!--                <td>2018</td>-->
<!--                <td>$2,048,359,754</td>-->
<!--                <td>$678,815,482</td>-->
<!--                <td>33.1%</td>-->
<!--                <td>$1,369,544,272</td>-->
<!--                <td>66.9%</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td>6</td>-->
<!--                <td>Jurassic World</td>-->
<!--                <td>2015</td>-->
<!--                <td>$1,670,516,444</td>-->
<!--                <td>$652,385,625</td>-->
<!--                <td>39%</td>-->
<!--                <td>$1,018,130,819</td>-->
<!--                <td>61%</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td>7</td>-->
<!--                <td>The Lion King</td>-->
<!--                <td>2019</td>-->
<!--                <td>$1,667,635,327</td>-->
<!--                <td>$543,638,043</td>-->
<!--                <td>32.6%</td>-->
<!--                <td>$1,123,997,284</td>-->
<!--                <td>67.4%</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td>8</td>-->
<!--                <td>The Avengers</td>-->
<!--                <td>2012</td>-->
<!--                <td>$1,518,815,515</td>-->
<!--                <td>$623,357,910</td>-->
<!--                <td>41%</td>-->
<!--                <td>$895,457,605</td>-->
<!--                <td>59%</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td>9</td>-->
<!--                <td>Furious 7</td>-->
<!--                <td>2015</td>-->
<!--                <td>$1,515,341,399</td>-->
<!--                <td>$353,007,020</td>-->
<!--                <td>23.3%</td>-->
<!--                <td>$1,162,334,379</td>-->
<!--                <td>76.7%</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td>10</td>-->
<!--                <td>Frozen II</td>-->
<!--                <td>2019</td>-->
<!--                <td>$1,450,026,933</td>-->
<!--                <td>$477,373,578</td>-->
<!--                <td>32.9%</td>-->
<!--                <td>$972,653,355</td>-->
<!--                <td>67.1%</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td>11</td>-->
<!--                <td>Avengers: Age of Ultron</td>-->
<!--                <td>2015</td>-->
<!--                <td>$1,402,809,540</td>-->
<!--                <td>$459,005,868</td>-->
<!--                <td>32.7%</td>-->
<!--                <td>$943,803,672</td>-->
<!--                <td>67.3%</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td>12</td>-->
<!--                <td>Black Panther</td>-->
<!--                <td>2018</td>-->
<!--                <td>$1,347,597,973</td>-->
<!--                <td>$700,426,566</td>-->
<!--                <td>52%</td>-->
<!--                <td>$647,171,407</td>-->
<!--                <td>48%</td>-->
<!--            </tr>-->
<!---->
<!--        </table>-->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->
<!--</body>-->
<!--</html>-->
