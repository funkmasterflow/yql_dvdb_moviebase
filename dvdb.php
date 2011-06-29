<?php

include_once "yql.php";

$movies = getMovies();

$movieList = '<table id="movieTable">';
$movieList .= "<thead><tr><th>Titel</th><th>FSK</th><th>Dauer</th></tr></thead><tbody>";

foreach ($movies as $movie){
        $movieList .= "<tr><td>".$movie->col0."</td><td>".$movie->col1."</td><td>".$movie->col2."</td></tr>";
}

$movieList .= "</tbody></table>";

?>