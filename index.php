<?php
// importazione della classe movie
require_once './movie.php';

//istanza degli oggetti appartenenti alla classe movie con un genre
//$movie1 = new Movie("Inception", 2010, "Action/Sci-Fi");
//$movie2 = new Movie("The Shawshank Redemption", 1994, "Drama");

//istanza degli oggetti appartenenti alla classe movie con due genre
$movie1 = new Movie("Inception", 2010, ["Action", "Sci-Fi"]);
$movie2 = new Movie("The Shawshank Redemption", 1994, ["Drama"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie PHP</title>
</head>

<div class="container">
    <!-- stampa a schermo  -->
    <?php
    echo '<P>' . $movie1->getMovieInfo() . '</P>';
    echo '<hr/>';
    echo '<P>' . $movie2->getMovieInfo() . '</P>';
    ?>
</div>

<body>


</body>

</html>