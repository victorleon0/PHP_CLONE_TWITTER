<?php

$tweet = $_POST["tweets"]; //recogemos el dato que viene del formulario

$arraytweet = [  //construimos el array que queremos generar
   "texto" => $tweet,
   "autor" => "Gloria",
   "username" => "glorvega"
];

$tweets = file_get_contents('tweets.json');  //leemos el contenido del fichero JSON

$arraytweets = json_decode($tweets, true); //convertimos el JSON en un array de php

/* print_r($arraytweets); */

$arraytweets["tweets"][] = $arraytweet; //añadimos el nuevo tweet en el array

$JSONtweet = json_encode($arraytweets); //transformamos el array en JSON

file_put_contents("tweets.json", $JSONtweet);

echo "tweet insertado con éxito";