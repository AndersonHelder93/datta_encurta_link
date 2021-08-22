<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>VSData</title>
</head>

<body>

  <nav class="blue-grey">
    <div class="nav-wrapper container">
      <div class="brand-logo ligth">Encurtador de Urls</div>
    </div>
  </nav>

  <div class="row container">
    <p>&nbsp;</p>
    <!--Colocar os caminhos contidos no atributo (action) de acordo com o caminho da sua máquina local-->
    <form action="../src/controllers/encurtar-url.php" method="POST" class="col s12">
      <fieldset class="formulario">
        <!--Colocar os caminhos contidos no atributo (src) de acordo com o caminho da sua máquina local-->
        <legend><img src="../src/views/image/icone.png" alt="[image]" width="100"></legend>
        <h5 class="ligth center">Insira o link no campo abaixo</h5>

        <div class="container-fluid">
          <form action=method="POST">
            <input type="text" name="url" placeholder="http://www.google.com" required>
            <button class="btn waves-effect waves-light" type="submit" name="action">encurtar
              <i class="material-icons right"></i>
            </button>
          </form>
          <!--Colocar os caminhos contidos no atributo (href) de acordo com o caminho da sua máquina local-->
          <a class="btn waves-effect waves-light" href="../src/views/dashboard.php">Dashboard</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
