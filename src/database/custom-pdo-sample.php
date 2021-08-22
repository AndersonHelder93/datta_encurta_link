<?php

$driver = "mysql";
$username = "";
$password = "";
$host = "localhost";
$dbname = "";

$pdo = new PDO("
  $driver:
  host=$host;
  dbname=$dbname",
  $username,
  $password
);

/* OBS: Copiar o arquivo (custom-pdo-sample.php), renomear para: "custom-pdo.php", inserir os dados de
autenticação do seu banco de dados local, e por ultimo copiar o try-catch abaixo e colar no arquivo
"custom-pdo.php".
try {
  $pdo = new PDO("$driver:host=$host;dbname=$dbname",$username,$password);

} catch ( PDOException $Exception ) {
  // Note The Typecast To An Integer!
  throw new Exception( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
}*/
