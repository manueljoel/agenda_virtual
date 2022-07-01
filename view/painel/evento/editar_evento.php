<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-1">
    <div class=" mb-2 bg-white text-dark py-4 rounded-2 shadow">
        <div class="container-fluid py-3">
            <h1 class="ui header">
                <div class="m-3 content">Editar Eventos<div class="sub header">altere os campos a baixo</div>
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

<div class="container py-1">
    <div class="row mb-5 py-2 ">
        <div>
            <div class="card-body rounded-2 bg-white shadow-lg py-5">
                <form class="was-validated">
                    <div class="row p-3">
                        <div class="col-sm-6">
                            <label>Título do Evento:</label>
                            <input type="text" class="form-control" placeholder="informe o título do evento..." required>
                        </div>

                        <div class="col-sm-6">
                            <label>Descrição:</label>
                            <input type="text" class="form-control" placeholder="digite mais detalhes..." required>
                        </div>

                        <div class="col-sm-6 py-2">
                            <label>Data:</label>
                            <input type="date" class="form-control" required>
                        </div>

                        <div class="col-sm-6 py-2">
                            <label>Hora:</label>
                            <input type="time" class="form-control" required>
                        </div>

                        <div class="col-sm-6 py-2">
                            <label>Local do Evento(opcional):</label>
                            <textarea type="text" class="form-control" placeholder="descreve o local..." cols="30" rows="7"></textarea>
                        </div>
                    </div>

                    <div class="card-footer-fluid px-3 bg-white">
                        <button type="submit" class="ui teal button">
                            <i class="fa-solid fa-pen-to-square"></i>
                            Editar
                        </button>

                        <a href="/../agenda_virtual/view/painel/evento/lista_evento.php" type="submit" class="ui teal button">
                            <i class="fa-solid fa-list"></i>
                            Ver lista
                        </a>

                        <a href="/../agenda_virtual/view/painel/evento/evento.php" type="submit" class="ui cinza button">
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


<?php
include_once('../../../view/painel/layouts/footer.php');
?>