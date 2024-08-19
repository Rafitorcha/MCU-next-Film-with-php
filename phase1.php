<?php

const API_URL = "https://api.earth616.org/api/mcu/timeline/category/1/";
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
</head>

<header>
<img src="./marvel.webp" />
</header>

<nav>
<button>Phase 1</button>
</nav>

<main>
<section>
<h2 style="text-align: center;">The next Marvel film</h2>

<img src=" <?= $data["poster_url"]; ?>" alt="Poster to <?= $data["title"] ?>" style="border-radius: 16px; width: 400px;"/>
</section>

<hgroup>
<h3><?= $data["title"]; ?> it's release in <?= $data["days_until"]; ?> days </h3>
 <p>release date: <?= $data["release_date"]; ?></p>
</hgroup>

</main>

<footer>Copyright</footer>

