<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid">
    <div class=" mb-4 bg-dark text-white rounded-2">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Adicionar Contactos</h1>
            <p class="col-md-8 fs-5">Preencha os campos a baixo</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row ">
        <div>
            <div class="card-body rounded-2 bg-white py-5">
                <form class="was-validated">
                    <div class="row p-3">
                        <div class="col-sm-6">
                            <label class="form-label">Nome:</label>
                            <input type="text" class="form-control" placeholder="informe o nome completo..." required>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label">Telefone:</label>
                            <input type="text" class="form-control" placeholder="digite o número..." required>
                        </div>

                        <div class="col-sm-6 py-2">
                            <label class="form-label">Morada(opcional):</label>
                            <input type="text" class="form-control" placeholder="digite a morada...">
                        </div>
                    </div>

                    <div class="card-footer-fluid px-3 bg-white">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save2"></i>
                            Salvar
                        </button>

                        <a href="/../agenda_virtual/view/painel/contactos/lista_contactos.php" type="submit" class="btn btn-primary">
                            <i class="bi bi-arrow-right-square-fill"></i>
                            Ver Contactos
                        </a>

                        <a href="/../agenda_virtual/view/painel/home.php" type="submit" class="btn btn-danger">
                            <i class="bi bi-x-square-fill"></i>
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