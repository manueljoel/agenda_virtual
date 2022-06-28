<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-5">
    <div class=" mb-4 bg-white text-dark rounded-2">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Meus Contactos</h1>
            <p class="col-md-8 fs-5">lista a baixo</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <table class=" ui fixed table ui blue table">
                <thead class="">
                    <tr>
                        <th>#</th>

                        <th>Nome</th>

                        <th>Telefone</th>

                        <th>Morada</th>

                        <th>Acçōes</th>
                    </tr>

                </thead>
                <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td scope="row">Mark</td>
                        <td scope="row">Otto</td>
                        <td scope="row">@mdo</td>

                        <th>
                            <a href="" class="btn btn-primary btn-sm btn-danger">
                                <i class="bi bi-trash-fill">
                                </i>
                            </a>

                            <a href="../../painel/contactos/editar_contactos.php" class="btn btn-primary btn-sm ">
                                <i class="bi bi-pen-fill">
                                </i>
                            </a>

                            <a href="../../painel/contactos/contactos.php" class="btn btn-sm btn-success">
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