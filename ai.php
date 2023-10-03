<?php

require_once __DIR__."/config.php";

$apiKey = $API_KEY;

if (isset($_POST['opera'])) {
    $nomeOpera = $_POST['opera'];
} else {
    $nomeOpera = "";
}

$prompt = "Descrivi l'opera d'arte, usando massimo 450 caratteri, chiamata \"$nomeOpera\".";

$requestData = array(
    "prompt" => $prompt,
    "max_tokens" => 300,
);

$headers = array(
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey",
);

$apiUrl = "https://api.openai.com/v1/engines/text-davinci-003/completions";

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_CAINFO, $CA_PATH);

$response = curl_exec($ch);

if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    $data = json_decode($response, true);
    $risposta = $data["choices"][0]["text"];
    session_start();
    $_SESSION['risposta'] = $risposta;
    header('Location: index.php');
}

curl_close($ch);
?>
