<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-1">
  <div class=" mb-2 bg-white text-dark py-4 rounded-2 shadow">
    <div class="container-fluid py-3">
      <h1 class="ui header">
        <div class="m-3 content">Tarefas a realisar<div class="sub header">Adicionar tarefas</div>
        </div>
      </h1>
    </div>
  </div>
</div>

<div class="container p-3">
  <div class="row mb-3 p-3">
    <div>
      <div class="card-body rounded-2 bg-white shadow py-5">
        <form class="ui form">
          <div class="row p-3">
            <div class="col-sm-6">
              <label>Título da tarefa:</label>
              <input type="text" class="form-control" placeholder="informe o título da tarefa ..." required>
            </div>

            <div class="col-sm-6">
              <label>Data:</label>
              <input type="date" class="form-control" required>
            </div>

            <div class="col-sm-6 py-2">
              <label>Descrição:</label>
              <textarea type="text" class="form-control" placeholder="digite mais detalhes..." required></textarea>
            </div>

            <div class="col-sm-6 py-2">
              <label>Hora:</label>
              <input type="time" class="form-control" required>
            </div>
          </div>

          <div class="card-footer-fluid px-3 bg-white">
            <button type="submit" class="ui teal button">
              <i class="fa-solid fa-floppy-disk"></i>
              Salvar
            </button>

            <a href="/../agenda_virtual/view/painel/tarefas/lista_tarefas.php" type="submit" class="ui teal button">
              <i class="fa-solid fa-list"></i>
              Ver lista
            </a>

            <a href="/../agenda_virtual/view/painel/home.php" type="submit" class="ui cinza button">
              <i class="fa-solid fa-rectangle-xmark"></i>
              Cancelar
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<br><br>
<br><br>

<?php
include_once('../../../view/painel/layouts/footer.php');
?>