<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="nav-scroller bg-white px-4 py-2 shadow">
    <nav class="nav" aria-label="Secondary navigation">
        <a class="nav-link" aria-current="page" href="/../agenda_virtual/view/painel/home.php">
            Home
        </a>
        <a class="nav-link" href="/../agenda_virtual/view/painel/contactos/lista_contactos.php">
            Ver Contactos
            <span class="badge bg-light text-dark rounded-pill align-text-bottom">1</span>
        </a>
        <a class="nav-link" href="/../agenda_virtual/view/painel/tarefas/lista_tarefas.php">
            Ver Tarefas
            <span class="badge bg-light text-dark rounded-pill align-text-bottom">1</span>
        </a>
        <a class="nav-link" href="#">Calendário</a>
    </nav>
</div>

<br>
<div class="container">
    <div class="text-center text-white alert alert alerta" role="alert">
        Adicionar Eventos
    </div>
</div>
<div class="container p-2">
    <div class="row mb-3">
        <div class="card-body rounded-2 bg-white shadow py-3">
            <form class="">
                <div class="row p-3">
                    <div class="col-sm-6">
                        <label>Título do Evento:</label>
                        <input type="text" class="form-control" placeholder="informe o título do evento..." required>
                    </div>

                    <div class="col-sm-6">
                        <label>Hora:</label>
                        <input type="time" class="form-control" required>
                    </div>

                    <div class="col-sm-12 py-2">
                        <label>Data:</label>
                        <input type="date" class="form-control" required>
                    </div>

                    <div class="col-sm-6 py-2">
                        <label>Descrição:</label>
                        <textarea type="text" class="form-control" placeholder="digite mais detalhes..." cols="30" rows="7" required></textarea>
                    </div>
                    <div class="col-sm-6 py-2">
                        <label>Local do Evento(opcional):</label>
                        <textarea type="text" class="form-control" placeholder="descreve o local..." cols="30" rows="7" required></textarea>
                    </div>
                </div>
                <div class="card-footer-fluid px-3 bg-white">
                    <button class="btn btn botao">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Salvar
                    </button>

                    <a href="/../agenda_virtual/view/painel/evento/lista_evento.php" type="submit" class="btn btn botao">
                        <i class="fa-solid fa-list"></i>
                        Ver lista
                    </a>

                    <a href="/../agenda_virtual/view/painel/home.php" type="submit" class="btn btn botao">
                        <i class="fa-solid fa-rectangle-xmark"></i>
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include_once('../../../view/painel/layouts/footer.php');
?>