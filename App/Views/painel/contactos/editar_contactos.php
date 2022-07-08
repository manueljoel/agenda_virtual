<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>


<div class="nav-scroller bg-white px-4 py-2 shadow">
    <nav class="nav" aria-label="Secondary navigation">
        <a class="nav-link active" aria-current="page" href="/../agenda_virtual/view/painel/home.php">Home</a>
        <a class="nav-link" href="/../agenda_virtual/view/painel/tarefas/lista_tarefas.php">
            Ver Tarefas
            <span class="badge bg-light text-dark rounded-pill align-text-bottom">1</span>
        </a>
        <a class="nav-link" href="/../agenda_virtual/view/painel/evento/lista_evento.php">
            Ver Evento
            <span class="badge bg-light text-dark rounded-pill align-text-bottom">1</span>
        </a>
        <a class="nav-link" href="#">Calendário</a>
    </nav>
</div>
<br><br>
<br><br>

<div class="container">
    <div class="text-center text-white alert alert alerta" role="alert">
        Editar Contacto
    </div>
</div>

<div class="container">
    <div class="row mb-5 p-3">
        <div class="card-body rounded-2 bg-white shadow py-3">
            <form class="">
                <div class="row p-3">
                    <div class="col-sm-6">
                        <label>Nome:</label>
                        <input type="text" class="form-control" placeholder="informe o nome completo..." required>
                    </div>

                    <div class="col-sm-6">
                        <label>Telefone:</label>
                        <input type="text" class="form-control" placeholder="digite o número..." required>
                    </div>

                    <div class="col-sm-12 py-2">
                        <label>Morada(opcional):</label>
                        <textarea type="text" class="form-control" placeholder="informe a morada..." cols="30" rows="7"></textarea>
                    </div>
                </div>

                <div class="card-footer-fluid px-3 bg-white">
                    <button type="submit" class="btn btn botao">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Editar
                    </button>

                    <a href="/../agenda_virtual/view/painel/contactos/lista_contactos.php" type="submit" class="btn btn botao">
                        <i class="fa-solid fa-list"></i>
                        Ver lista
                    </a>

                    <a href="/../agenda_virtual/view/painel/contactos/contactos.php" type="submit" class="btn btn botao">
                        <i class="fa-solid fa-rectangle-xmark"></i>
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<?php
include_once('../../../view/painel/layouts/footer.php');
?>