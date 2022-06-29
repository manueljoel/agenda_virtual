<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-1">
    <div class="bg-white text-dark rounded-2 py-4 shadow">
        <div class="container-fluid py-4">
            <h1 class="ui header">
                <div class="m-3 content">Editar tarefas<div class="sub header">Altere os campos a baixo</div>
                </div>
            </h1>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row mb-5 py-3">
        <div>
            <div class="card-body rounded-2 bg-white shadow py-5">
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
                        <button type="submit" class="ui teal button">
                            Editar
                        </button>

                        <a href="/../agenda_virtual/view/painel/tarefas/lista_tarefas.php" type="submit" class="ui teal button">
                            Ver tarefas
                        </a>

                        <a href="/../agenda_virtual/view/painel/tarefas/tarefas.php" type="submit" class="ui cinza button">
                            Cancelar
                        </a>

                        <a href="/../agenda_virtual/view/painel/home.php" type="submit" class="ui yellow button">
                            <i class="bi bi-house-door-fill"></i>
                            Home
                        </a>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<br><br>
<br>

<?php
include_once('../../../view/painel/layouts/footer.php');
?>