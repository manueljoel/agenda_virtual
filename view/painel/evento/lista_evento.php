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

<div class="container-fluid py-1">
    <div class="row py-5 m-2 mb-5">
        <div class="py-5 mb-5">
            <div class="m-3 col-md-12">
                <table id="Tabela" class="ui fixed celled table shadow-sm" style="width:100%">
                    <thead>
                        <tr>
                            <th width="2%">id</th>

                            <th>Título do Evento</th>

                            <th>Descriçāo</th>

                            <th>Data</th>

                            <th>Hora</th>

                            <th>Local:</th>

                            <th width="12%">Acçōes</th>
                        </tr>

                    </thead>
                    <tbody>

                        <tr class="id">
                            <td scope="row">1</td>
                            <td scope="row">Casamento da Jandira</td>
                            <td scope="row">ser garson</td>
                            <td scope="row">08/06/2022</td>
                            <td scope="row">Viana/Space</td>
                            <td scope="row">21:00</td>

                            <th>
                                <a href="javascript:func()" onclick="excluir('1')" class="ui cinza button btn-sm excluir">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <a href="../../painel/evento/editar_evento.php" class="ui teal button btn-sm ">
                                    <i class="fa-solid fa-pen-clip"></i>
                                </a>

                                <a href="../../painel/evento/editar_evento.php" class="ui yellow button btn-sm ">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="m-1">
                <a href="../../painel/evento/evento.php" class="ui teal button">
                    <i class="fa-solid fa-plus"></i>
                    Adicionar
                </a>

                <a href="/../agenda_virtual/view/painel/home.php" type="submit" class="ui yellow button">
                    <i class="fa-solid fa-landmark"></i>
                    Home
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<br><br>
<br><br>
<?php
include_once('../../../view/painel/layouts/footer.php');
?>