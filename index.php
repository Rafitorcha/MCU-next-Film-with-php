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

<img class="next" src=" <?= $data["poster_url"]; ?>" alt="Poster to <?= $data["title"] ?>" style="border-radius: 16px; width: 400px;"/>
</section>

<hgroup>
<h3><?= $data["title"]; ?> it's release in <?= $data["days_until"]; ?> days </h3>
 <p>release date: <?= $data["release_date"]; ?></p>
</hgroup>

</main>


<footer> © 2024 MARVEL. All rights reserved </footer>
