<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-1">
    <div class=" mb-5 bg-white text-dark py-4 rounded-2 shadow">
        <h1 class="ui header">
            <div class="m-3 content">Configurações da Conta <div class="sub header">Gerenciar preferencias</div>
            </div>
        </h1>
    </div>
</div>

<div class="text-center">
    <img class="d-block mx-auto mb-2" src="/../agenda_virtual/assets/img/icons8_under_computer.ico" alt="" width="50" height="50">
    <h2>Meus Dados</h2>
</div>


<div class="container">
    <div class="row py-3">
        <div class="mb-5 py-4">
            <div class="">
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
                            <button type="submit" class="ui teal button">
                                <i class="fa-solid fa-pen-to-square"></i>
                                Editar
                            </button>

                            <a href="" type="submit" class="ui teal button">
                                <i class="fa-solid fa-user-pen"></i>
                                Ver dados
                            </a>

                            <a href="/../agenda_virtual/view/painel/home.php" type="submit" class="ui yellow button">
                                <i class="fa-solid fa-landmark"></i>
                                Home
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<br>

<div class="b-example-divider"></div>

<?php
include_once('../../../view/painel/layouts/footer.php');
?>