<?php

//Colocar os caminhos contidos no atributo (DIR) de acordo com o caminho da sua máquina local
require_once __DIR__ . "/../database/custom-pdo.php";
require_once __DIR__ . "/../functions/gerador-string.php";

$url = $_REQUEST["url"];
$url_encurtada = geradorString();

if ($url !== "") {
  // Faz select para verificar se a url gerada já existe e está deletada
  $query = "select url_encurtada from urls where datahora_deletado is not null and url_encurtada = '$url_encurtada'";
  $stm =  $pdo->query($query);
  $results = $stm->fetchAll();

  // Faz insert da url encurtada e original
  if ($results["url_encurtada"] != $url_encurtada && count($results) == 0) {
    $query = "insert into  urls set url_original = '$url', url_encurtada = '$url_encurtada'";
    $results = $pdo->exec($query);
    //Colocar os caminhos contidos no atributo (Header) de acordo com o caminho da sua máquina local
    Header("location: http://localhost/desafio-vsdata/src/views/dashboard.php");
    exit();
  }
  //Colocar os caminhos contidos no atributo (Header) de acordo com o caminho da sua máquina local
  Header("location: http://localhost/desafio-vsdata/src/views/dashboard.php");
  exit();
}

// Retorna mensagem se a url for vazia
echo json_encode(["sucess" => false, "message" => "URL vazia"]);
exit();
