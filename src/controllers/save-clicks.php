<?php

//Colocar os caminhos contidos no atributo (require_once) de acordo com o caminho da sua máquina local
require_once __DIR__ . "/../database/custom-pdo.php";

$click = file_get_contents("php://input");
$click = json_decode($click, true);

// Faz select da quantidade de clicks
$query = "select qtd_clicks from urls where id =" . $click["id"];
$stm = $pdo->query($query, PDO::FETCH_ASSOC);
$results = $stm->fetch()["qtd_clicks"];

// Incrementa +1 no click
if (count($results) >= 0) {
  $clicks = intval($results[0] + 1);
  $query = "update urls set qtd_clicks = $clicks where id =" . $click["id"];
  $results = $pdo->exec($query);
}
