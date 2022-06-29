<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-1">
    <div class=" mb-2 bg-white text-dark py-5 shadow">
        <h1 class="ui header">
            <div class="m-3 content">Meus Contactos<div class="sub header">lista a baixo</div>
            </div>
        </h1>
    </div>
</div>

<div class="container py-5">
    <div class="row py-5 mb-5">
        <div class="py-5 mb-5">
            <div class=" col-md-12">
                <table class=" ui fixed table ui teal table">
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
                                <a href="" class="ui cinza button btn-sm">
                                    <i class="bi bi-trash-fill">
                                    </i>
                                </a>

                                <a href="../../painel/contactos/editar_contactos.php" class="ui teal button btn-sm ">
                                    <i class="bi bi-pen-fill">
                                    </i>
                                </a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="py-4">
                <a href="../../painel/contactos/contactos.php" class="ui teal button">
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
<?php
include_once('../../../view/painel/layouts/footer.php');
?>