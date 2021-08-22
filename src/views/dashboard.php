<?php

require_once __DIR__ . "/../database/custom-pdo.php";

$query = "select * from urls order by criado_em desc limit 5";
$stm = $pdo->query($query, PDO::FETCH_ASSOC);
$results = $stm->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <title>Dashboard</title>

</head>

<body>

  <u>
    <h2 class="d-flex justify-content-center">Dashboard</h2>
  </u>
  <table class="container">

    </br>
    <tr id=ids class="p-3 mb-2 bg-secondary text-white">>
      <th>Codigo</th>
      <th>URL Original</th>
      <th>URL Encurtada</th>
      <th>Quantidade de Cliks</th>
      <th>Data e Hora Deletado</th>
      <th>Data e Hora Criado</th>
      <th>Excluir Dados</th>

    </tr>

    <?php
    for ($i = 0; $i < count($results); $i++) {
    ?>
      <tr class="p-3 mb-2 bg-light text-dark">
        <th><?php echo ($results[$i]['id']) ?></th>
        <th><?php echo ($results[$i]['url_original']) ?></th>
        <th><a target="blank" href="<?php echo ($results[$i]['url_original']) ?>" onclick="incrementClick(<?php echo ($results[$i]['id']) ?>)"><?php echo ($results[$i]['url_encurtada']) ?></a></th>
        <th class="d-flex justify-content-center"><a href=<?php echo ("http://localhost/desafio-vsdata/src/controllers/ver-clicks.php?id=" . $results[$i]['id']) ?>>Visualizar</a></th>
        <th>
          <?php
          if ($results[$i]['datahora_deletado'] !== null) {
            echo " <p style='color:red'>" . $results[$i]['datahora_deletado'] . "</p>";
          } else {
            echo ($results[$i]['datahora_deletado']);
          }
          ?>
        </th>
        <th><?php echo ($results[$i]['criado_em']) ?></th>
        <th><input type="submit" onclick="deleteUrl(<?php echo ($results[$i]['id']) ?>)" value="deletar"></th>
      </tr>

    <?php
    }
    ?>

  </table>

  <br>
  <div class="container">
    <a class="btn btn-primary" href="../index.php">Voltar para o inicio</a>
  </div>
  <br>


  <script src="../scripts/fetchs.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
