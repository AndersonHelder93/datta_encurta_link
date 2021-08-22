// fetch para salvar clique
function incrementClick(id) {
  const data = { id: id, click: "1" };

  //Colocar os caminhos contidos na função (fetch()) de acordo com o caminho da sua máquina local
  fetch("http://localhost/desafio-vsdata/src/controllers/save-clicks.php?id", {
      method: "POST",
      mode: "no-cors",
      headers: {"Content-Type": "application/json"},
      body: JSON.stringify(data)
    })
}

// fetch para deletar uma url
function deleteUrl(id) {
  const data = { id: id };

  //Colocar os caminhos contidos na função (fetch()) de acordo com o caminho da sua máquina local
  fetch("http://localhost/desafio-vsdata/src/controllers/delete-url.php", {
      method: "POST",
      mode: "no-cors",
      headers: {"Content-Type": "application/json"},
      body: JSON.stringify(data)
    }),
    window.location.reload();
}
