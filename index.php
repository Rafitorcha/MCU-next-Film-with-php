<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
#Initialize a new session for curl; ch = curl handle
$ch = curl_init(API_URL);
//Indicate that we want to receive the request result and no display it in the window
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Executes the request
and store the result
*/

$result = curl_exec($ch);

//a alternative will be use file_get_contents
// $result = file_get_contents(API_URL); //if you want to do a get from API

$data = json_decode($result, true);

curl_close($ch);

?>

<head>
<meta charset="UTF-8" />
<meta name="description" content="The next Marvel Film!!!" />
<meta name="viewport" content="width=device-width, initial-scale="1.0" />

<title>Next Marvel's Fimls!!</title>
<link rel="stylesheet" href="css/pico.classless.min.css">
<link rel="stylesheet" type="text/css" href="./style.php">
<link rel="icon" href="./spidy.png">
</head>

<header class="head-nav">
<img class="img-layer" src="./Marvel_Logo.svg.png" />

<nav>
<a href="./home.php">Home </a>
<a href="./phase1.php" class="contrast">Phase I </a>
<a href="./phase2.php" class="contrast">Phase II </a>
<a href="./phase3.php">Phase III </a>
<a href="./about.php">About </a>
</nav>
</header>
<main>
<section>
<h2>The next Marvel film</h2>

<img src=" <?= $data["poster_url"]; ?>" alt="Poster to <?= $data["title"] ?>" style="border-radius: 16px; width: 400px;"/>
</section>

<hgroup>
<h3><?= $data["title"]; ?> it's release in <?= $data["days_until"]; ?> days </h3>
 <p>release date: <?= $data["release_date"]; ?></p>
</hgroup>

</main>


<footer> © 2024 MARVEL. All rights reserved </footer>
