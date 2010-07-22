<?php

$query = 'select * from csv where url="http://spreadsheets.google.com/pub?key=0Av1UU55ifVHidERIYUJsS3NFZHdTTWZUeENVWDR1bHc&gid=0&x=1&output=csv"';
$api = 'http://query.yahooapis.com/v1/public/yql?q='.
        urlencode($query).'&format=json';
               
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $api);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
$data = json_decode($output);
$movies = $data->query->results->row;

$movieList = '<table id="movieTable">';
$movieList .= "<thead><tr><th>Titel</th><th>FSK</th><th>Dauer</th></tr></thead><tbody>";

foreach ($movies as $movie){
    $movieList .= "<tr><td>".$movie->col0."</td><td>".$movie->col1."</td><td>".$movie->col2."</td></tr>";
}

$movieList .= "</tbody></table>";

$random = rand(0, sizeof($movies));
$randomMovie = $movies[$random]->col0;

?>