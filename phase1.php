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

$string = $data["mcuTimeLine"]["Phase 1"][0]["imdbcache"]["duration"];
$look4= "/PT\s+(\w)+/";

if (preg_match($look4, $string, $looking)) {
$xtrac = str_replace($looking, "", $string);
}

?>

<?php include "head.php"; ?>

<main>
<section>
<h2>MCU Timeline: phase I</h2>

<img src=" <?= $data["mcuTimeLine"]["Phase 1"][0]["imdbcache"]["image"]; ?>" alt="Poster to <?= $data["mcuTimeLine"]["Phase 1"][0]["title"] ?>" style="border-radius: 16px; width: 400px;"/>
</section>

<hgroup>
<h3><?= $data["mcuTimeLine"]["Phase 1"][0]["title"]; ?></h3>
<article>
<p> <?= $data["mcuTimeLine"]["Phase 1"][0]["imdbcache"]["description"]; ?> </p>
<p>released in <?= $data["mcuTimeLine"]["Phase 1"][0]["premiere"]; ?></p> 
<p>MCU time: <?= $data["mcuTimeLine"]["Phase 1"][0]["mcutime"]; ?></p>
<p>duration: <?= $xtract; ?></p>

</article>
</hgroup>

</main>


<footer> © 2024 MARVEL. All rights reserved </footer>
