<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-5">
  <div class=" mb-2 bg-white text-dark rounded-2">
    <div class="container-fluid py-3">
      <h1 class="display-5 fw-bold">Tarefas a realisar</h1>
      <p class="col-md-8 fs-5">Adicionar tarefas</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row ">
    <div>
      <div class="card-body rounded-2 bg-white shadow-lg py-5">
        <form class="ui form">
          <div class="row p-3">
            <div class="col-sm-6">
              <label>Título da tarefa:</label>
              <input type="text" class="form-control" placeholder="informe o nome completo..." required>
            </div>

            <div class="col-sm-6">
              <label>Descrição:</label>
              <input type="text" class="form-control" placeholder="digite o número..." required>
            </div>

            <div class="col-sm-6 py-2">
              <label>Data:</label>
              <input type="date" class="form-control" placeholder="informe o nome completo..." required>
            </div>

            <div class="col-sm-6 py-2">
              <label>Hora:</label>
              <input type="time" class="form-control" placeholder="digite o número..." required>
            </div>
          </div>

          <div class="card-footer-fluid px-3 bg-white">
            <button type="submit" class="ui blue button">
              Salvar
            </button>

            <a href="/../agenda_virtual/view/painel/tarefas/lista_tarefas.php" type="submit" class="ui blue button">
              Ver lista
            </a>

            <a href="/../agenda_virtual/view/painel/home.php" type="submit" class="ui red button">
              Cancelar
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
include_once('../../../view/painel/layouts/footer.php');
?>