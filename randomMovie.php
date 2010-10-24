<?php

include_once "yql.php";

$movies = getMovies();

$random = rand(0, sizeof($movies));
$randomMovie = $movies[$random]->col0;

echo $randomMovie;