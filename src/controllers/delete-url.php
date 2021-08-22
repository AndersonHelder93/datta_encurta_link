<?php

//Colocar os caminhos contidos no atributo (DIR) de acordo com o caminho da sua máquina local
require_once __DIR__ . "/../database/custom-pdo.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

// Faz select das datahoras deletadas
$query = "select datahora_deletado from urls where id =" . $dados["id"];
$stm = $pdo->query($query, PDO::FETCH_ASSOC);
$results = $stm->fetch()["datahora_deletado"];

// Salva datahora atual
if ($results[0] == null) {
  $query = "update urls set datahora_deletado = now() where id=" . $dados["id"];
  $results = $pdo->exec($query);
}
