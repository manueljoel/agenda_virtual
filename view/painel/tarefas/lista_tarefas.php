<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid py-1">
    <div class="mb-2 bg-white text-dark py-5 shadow">
        <div class="container-fluid py-2">
            <h1 class="ui header">
                <div class="m-3 content">Minha lista de tarefa<div class="sub header">lista a baixo</div>
                </div>
            </h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row m-1 py-4 mb-5">
        <div class="row py-5 mb-5">
            <div class="m-4 col-md-12">
                <table id="Tabela" class=" ui fixed celled table shadow-sm" style="width:100%">
                    <thead class="">
                        <tr>
                            <th>Título da tarefa</th>

                            <th>Descriçāo</th>

                            <th>Data</th>

                            <th>Hora</th>

                            <th width="12%">Acçōes</th>
                        </tr>

                    </thead>
                    <tbody>

                        <tr>
                            <td scope="row">Terminar o projecto agenda</td>
                            <td scope="row">Cumprir com as metas a tempo</td>
                            <td scope="row">06/31/2022</td>
                            <td scope="row">08:45</td>

                            <th>
                                <a href="" class="ui cinza button btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <a href="../../painel/tarefas/editar_tarefas.php" class="ui teal button btn-sm ">
                                    <i class="fa-solid fa-pen-clip"></i>
                                </a>

                                <a href="../../painel/tarefas/editar_tarefas.php" class="ui yellow button btn-sm ">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="m-3">
                <a href="../../painel/tarefas/tarefas.php" class="ui teal button">
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
<br><br>

<?php
include_once('../../../view/painel/layouts/footer.php');
?>