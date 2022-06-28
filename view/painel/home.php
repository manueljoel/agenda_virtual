<?php
include_once('../painel/layouts/header.php');
include_once('../painel/layouts/navbar.php');
?>


<div class="container-fluid my-5 py-2">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5  align-items-center rounded-3 shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold text-dark">Agenda Virtual</h1>

            <div class="ui three item menu">
                <a href="/../agenda_virtual/view/painel/contactos/contactos.php" class="item">Contactos</a>

                <a href="/../agenda_virtual/view/painel/tarefas/tarefas.php" class="item">Tarefas</a>

                <a href="/../agenda_virtual/view/painel/evento/evento.php" class="item">Eventos</a>
            </div>
        </div>
    </div>
</div>




<?php
include_once('../painel/layouts/footer.php');
