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

<?php include "head.php"; ?>

<main>
<section>
<h2>The next Marvel film</h2>

<p>The Marvel Cinematic Universe (MCU) is a media franchise and shared universe centered on a series of superhero films produced by Marvel Studios. These films are based on characters that appear in the comics published by Marvel Comics. In addition to movies, the MCU includes television series, short films, digital series, and literature.</p>

<div class="marvelContainer">
<img class="marvelLogo" src="./img/Marvel_Comics_2024_logo.svg.png"/>
<img class="marvelLogo" src="./img/Marvel_Studios_Animation_logo.png"/>
<img class="marvelLogo" src="./img/Marvel_Studios_logo.svg.png"/>
<img class="marvelLogo" src="./img/Marvel-television-logo.png"/>
</div>

<p>The MCU has transformed the way superhero movies are produced and consumed, establishing a new standard in cinematic narrative. With its approach to the construction of a shared universe, it has managed to attract a wide audience and has generated a significant impact on popular culture.
</p>

<section class="fans">

<img class="img1" src="./img/infinitywarfanevent3.jpg"/>

<img class="img2" src="./img/fans.jpeg"/>
</section>
<p>That is why following the content of this media franchise is common, inspirational, or nostalgic. We are eagerly awaiting the next Marvel film!"</p>

<p class="end">For now, we know that:</p>

<img class="next" src=" <?= $data["poster_url"]; ?>" alt="Poster to <?= $data["title"] ?>" style="border-radius: 16px; width: 400px;"/>
</section>

<hgroup>
<h3><?= $data["title"]; ?> it's release in <?= $data["days_until"]; ?> days </h3>
<p>release date: <?= $data["release_date"]; ?></p>
</hgroup>

</main>


<footer> © 2024 MARVEL. All rights reserved </footer>
