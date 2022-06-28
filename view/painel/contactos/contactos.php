<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-5">
    <div class=" mb-4 bg-white text-dark rounded-2">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Adicionar Contactos</h1>
            <p class="col-md-8 fs-5">Preencha os campos a baixo</p>
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
                            <label>Nome:</label>
                            <input type="text" class="form-control" placeholder="informe o nome completo..." required>
                        </div>

                        <div class="col-sm-6">
                            <label>Telefone:</label>
                            <input type="text" class="form-control" placeholder="digite o número..." required>
                        </div>

                        <div class="col-sm-6 py-2">
                            <label>Morada(opcional):</label>
                            <input type="text" class="field" placeholder="digite a morada...">
                        </div>
                    </div>

                    <div class="card-footer-fluid px-3 bg-white">
                        <button type="submit" class="ui blue button">
                            Salvar
                        </button>

                        <a href="/../agenda_virtual/view/painel/contactos/lista_contactos.php" type="submit" class="ui blue button">
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