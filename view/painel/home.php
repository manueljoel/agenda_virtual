<?php
include_once('../painel/layouts/header.php');
include_once('../painel/layouts/navbar.php');
?>

<div class="container-fluid my-5 py-2">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5  align-items-center rounded-3 border shadow-sm">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1 text-white">Agenda Virtual</h1>
            <p class="lead"></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a href="/../agenda_virtual/view/painel/contactos/contactos.php" class="btn btn-primary btn-lg">
                    <i class="bi bi-person-lines-fill"></i>
                    Criar Contactos
                </a>
                <a href="/../agenda_virtual/view/painel/tarefas/tarefas.php" class="btn btn-primary btn-lg">
                    <i class="bi bi-cast"></i>
                    Criar Tarefas
                </a>
                <a href="/../agenda_virtual/view/painel/evento/evento.php" class="btn btn-primary btn-lg">
                    <i class="bi bi-calendar2-event-fill"></i>
                    Criar Evento
                </a>
                <a class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">
                    <i class="bi bi-calendar-day-fill"></i>
                    Ver Calendário
                </a>
            </div>
        </div>
    </div>
</div>




<?php
include_once('../painel/layouts/footer.php');
