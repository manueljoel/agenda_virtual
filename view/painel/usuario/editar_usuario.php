<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-5">
    <div class=" mb-5 bg-white text-dark rounded-2">
        <h2 class="ui header">
            <i class="settings icon"></i>
            <div class="content">Configurações da Conta <div class="sub header">Gerenciar preferencias</div>
            </div>
        </h2>
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
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="digite o número..." required>
                        </div>

                        <div class="col-sm-6 py-2">
                            <label">Senha:</label>
                                <input type="text" class="form-control" placeholder="digite a morada..." required>
                        </div>
                    </div>

                    <div class="card-footer-fluid px-3 bg-white">
                        <button type="submit" class="ui blue button">
                            Editar
                        </button>

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

<div class="b-example-divider"></div>

<?php
include_once('../../../view/painel/layouts/footer.php');
?>