<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-5">
    <div class=" mb-4 bg-white text-dark rounded-2">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Eventos à comparecer</h1>
            <p class="col-md-8 fs-5">lista a baixo</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <table class="ui fixed table ui blue table">
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
                            <a href="" class="btn btn-primary btn-sm btn-danger">
                                <i class="bi bi-trash-fill">
                                </i>
                            </a>

                            <a href="../../painel/evento/editar_evento.php" class="btn btn-primary btn-sm ">
                                <i class="bi bi-pen-fill">
                                </i>
                            </a>

                            <a href="../../painel/evento/evento.php" class="btn btn-sm btn-success">
                                <i class="bi bi-file-plus-fill">
                                </i>
                            </a>


                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include_once('../../../view/painel/layouts/footer.php');
?>