<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-1">
    <div class=" mb-4 bg-white text-dark py-4 rounded-2 shadow">
        <div class="container-fluid py-3">
            <h1 class="ui header">
                <div class="m-3 content">Eventos à comparecer<div class="sub header">lista a baixo</div>
                </div>
            </h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row py-5 mb-5">
        <div class="py-5 mb-5">
            <div class="col-md-12">
                <table class="ui fixed table ui teal table">
                    <thead class="">
                        <tr>
                            <th>#</th>

                            <th>Título do Evento</th>

                            <th>Descriçāo</th>

                            <th>Data</th>

                            <th>Hora</th>

                            <th>Local:</th>

                            <th>Acçōes</th>
                        </tr>

                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td scope="row">Casamento da Jandira</td>
                            <td scope="row">Trabalhar como garson</td>
                            <td scope="row">08/06/2022</td>
                            <td scope="row">Viana/Space</td>
                            <td scope="row">21:00</td>

                            <th>
                                <a href="" class="ui cinza button btn-sm">
                                    <i class="bi bi-trash-fill">
                                    </i>
                                </a>

                                <a href="../../painel/evento/editar_evento.php" class="ui teal button btn-sm ">
                                    <i class="bi bi-pen-fill">
                                    </i>
                                </a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="py-4">
                <a href="../../painel/evento/evento.php" class="ui teal button">
                    <i class="bi bi-file-plus-fill">
                        Adicionar
                    </i>
                </a>

                <a href="/../agenda_virtual/view/painel/home.php" type="submit" class="ui yellow button">
                    <i class="bi bi-house-door-fill"></i>
                    Home
                </a>
            </div>
        </div>
    </div>
</div>
<br><br>
<br><br>
<?php
include_once('../../../view/painel/layouts/footer.php');
?>