<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-1">
    <div class=" mb-2 bg-white text-dark py-4 rounded-2 shadow">
        <div class="container-fluid py-3">
            <h1 class="ui header">
                <div class="m-3 content">Meus Eventos <div class="sub header">Adicionar eventos</div>
                </div>
            </h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-5 py-5 ">
        <div>
            <div class="card-body rounded-2 bg-white shadow py-5">
                <form class="ui form">
                    <div class="row p-3">
                        <div class="col-sm-6">
                            <label>Título do Evento:</label>
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

                        <div class="col-sm-6 py-2">
                            <label>Local do Evento(opcional):</label>
                            <input type="text" class="form-control" placeholder="digite o número...">
                        </div>
                    </div>

                    <div class="card-footer-fluid px-3 bg-white">
                        <button type="submit" class="ui teal button">
                            Salvar
                        </button>

                        <a href="/../agenda_virtual/view/painel/evento/lista_evento.php" type="submit" class="ui teal button">
                            Ver lista
                        </a>

                        <a href="/../agenda_virtual/view/painel/home.php" type="submit" class="ui cinza button">
                            Cancelar
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