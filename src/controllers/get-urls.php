<?php

//Colocar os caminhos contidos no atributo (require_once) de acordo com o caminho da sua máquina local
require_once("../database/customPDO.php");

$query = "select * from urls order by criado_em desc limit 5";
$stm = $pdo->query($query, PDO::FETCH_ASSOC);
$results = $stm->fetchAll();

echo json_encode($results);
