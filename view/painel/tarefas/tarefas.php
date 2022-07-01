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

        <div class="m-3 ui stackable menu">
          <a href="/../agenda_virtual/view/painel/home.php" class="item">Home</a>

          <a href="../../painel/contactos/contactos.php" class="item">Contactos</a>

          <a href="../../painel/tarefas/tarefas.php" class="item">Tarefas</a>

          <a href="../../painel/evento/evento.php" class="item">Eventos</a>

          <a href="../../painel/" class="item">Calendário</a>
        </div>
      </h1>
    </div>
  </div>
</div>

<div class="container p-1">
  <div class="row mb-3 p-2">
    <div>
      <div class="card-body rounded-2 bg-white shadow py-5">
        <form class="was-validated">
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
              <textarea type="text" class="form-control" placeholder="digite mais detalhes..." cols="30" rows="7" required></textarea>
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