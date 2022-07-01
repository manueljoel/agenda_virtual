<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-1">
    <div class=" mb-2 bg-white text-dark py-5 shadow">
        <h1 class="ui header">
            <div class="m-3 content">Meus Contactos<div class="sub header">lista a baixo</div>
            </div>

            <div class="m-3 ui stackable menu">
                <a href="/../agenda_virtual/view/painel/home.php" class="item">Home</a>

                <a href="../../painel/contactos/contactos.php" class="item">Contactos</a>

                <a href="../../painel/tarefas/tarefas.php" class="item">Tarefas</a>

                <a href="../../painel/evento/evento.php" class="item">Eventos</a>

                <a href="../../painel/" class="item">Calendário</a>
            </div>
        </h1>
    </div>
</div>

<div class="container-fluid">
    <div class="row m-1 m-2 py-3 mb-5">
        <div class="py-1 mb-3">
            <div class="m-3 py-4 mb-2 col-md-12">
                <table id="Tabela" class=" ui fixed celled table shadow-sm" style="width:100%">
                    <thead class="">
                        <tr>

                            <th>Nome</th>

                            <th>Telefone</th>

                            <th>Morada</th>

                            <th width="12%">Acçōes</th>
                        </tr>

                    </thead>
                    <tbody>

                        <tr>
                            <td scope="row">Joel</td>
                            <td scope="row">943785640</td>
                            <td scope="row">Viana/Estalagem</td>

                            <th>
                                <a href="" class="ui cinza button btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <a href="../../painel/contactos/editar_contactos.php" class="ui teal button btn-sm ">
                                    <i class="fa-solid fa-pen-clip"></i>
                                </a>

                                <a href="../../painel/contactos/" class="ui yellow button btn-sm">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </th>
                        </tr>

                        <tr>
                            <td scope="row">Sandra Mulata</td>
                            <td scope="row">912878900</td>
                            <td scope="row">Talatona</td>

                            <th>
                                <a href="" class="ui cinza button btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <a href="../../painel/contactos/editar_contactos.php" class="ui teal button btn-sm ">
                                    <i class="fa-solid fa-pen-clip"></i>
                                </a>

                                <a href="../../painel/contactos/" class="ui yellow button btn-sm">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </th>
                        </tr>

                        <tr>
                            <td scope="row">Lucas Saldanha</td>
                            <td scope="row">943475888</td>
                            <td scope="row">Benfica</td>

                            <th>
                                <a href="" class="ui cinza button btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <a href="../../painel/contactos/editar_contactos.php" class="ui teal button btn-sm ">
                                    <i class="fa-solid fa-pen-clip"></i>
                                </a>

                                <a href="../../painel/contactos/" class="ui yellow button btn-sm">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </th>
                        </tr>

                        <tr>
                            <td scope="row">Gelson Laton</td>
                            <td scope="row">912457690</td>
                            <td scope="row">Benfica</td>

                            <th>
                                <a href="" class="ui cinza button btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <a href="../../painel/contactos/editar_contactos.php" class="ui teal button btn-sm ">
                                    <i class="fa-solid fa-pen-clip"></i>
                                </a>

                                <a href="../../painel/contactos/" class="ui yellow button btn-sm">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </th>
                        </tr>

                        <tr>
                            <td scope="row">Ana Keumira</td>
                            <td scope="row">943974731</td>
                            <td scope="row">Palanca</td>

                            <th>
                                <a href="" class="ui cinza button btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <a href="../../painel/contactos/editar_contactos.php" class="ui teal button btn-sm ">
                                    <i class="fa-solid fa-pen-clip"></i>
                                </a>

                                <a href="../../painel/contactos/" class="ui yellow button btn-sm">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </th>
                        </tr>


                        <tr>
                            <td scope="row">Raquel Ariodety</td>
                            <td scope="row">945365123</td>
                            <td scope="row">Samba</td>

                            <th>
                                <a href="" class="ui cinza button btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <a href="../../painel/contactos/editar_contactos.php" class="ui teal button btn-sm ">
                                    <i class="fa-solid fa-pen-clip"></i>
                                </a>

                                <a href="../../painel/contactos/" class="ui yellow button btn-sm">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="m-1">
                <a href="../../painel/contactos/contactos.php" class="ui teal button">
                    <i class="fa-solid fa-plus"></i>
                    Adicionar
                </a>
            </div>
        </div>
    </div>
</div>
<br><br>
<?php
include_once('../../../view/painel/layouts/footer.php');
?>