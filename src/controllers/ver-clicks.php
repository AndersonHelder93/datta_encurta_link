<?php

//Colocar os caminhos contidos no atributo (require_once) de acordo com o caminho da sua máquina local
require_once __DIR__ . "/../database/custom-pdo.php";

$id = $_REQUEST["id"];

// Se houver id, retorna JSON com  url encurtada, url original, e clicks
if ($id) {
  $query = "select url_encurtada, url_original, qtd_clicks from urls where id = $id";
  $stm = $pdo->query($query, PDO::FETCH_ASSOC);
  $results = $stm->fetch();
  echo json_encode($results);
  exit();
}

echo json_encode(["success: " => false, "message: " => "Nenhum id de url foi informado!"]);
