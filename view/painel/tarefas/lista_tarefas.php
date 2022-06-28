<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid">
    <div class=" mb-4 bg-dark text-white rounded-2">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Minha lista de tarefa</h1>
            <p class="col-md-8 fs-5">lista a baixo</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <table class="table table-hover table-bordered table-white bg-white">
                <thead class="">
                    <tr>
                        <th>#</th>

                        <th>Título da tarefa</th>

                        <th>Descriçāo</th>

                        <th>Data</th>

                        <th>Hora</th>

                        <th>Acçōes</th>
                    </tr>

                </thead>
                <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td scope="row">Terminar o projecto agenda</td>
                        <td scope="row">Cumprir com as metas a tempo</td>
                        <td scope="row">06/31/2022</td>
                        <td scope="row">08:45</td>

                        <th>
                            <a href="" class="btn btn-primary btn-sm btn-danger">
                                <i class="bi bi-trash-fill">
                                </i>
                            </a>

                            <a href="../../painel/tarefas/editar_tarefas.php" class="btn btn-primary btn-sm ">
                                <i class="bi bi-pen-fill">
                                </i>
                            </a>

                            <a href="../../painel/tarefas/tarefas.php" class="btn btn-sm btn-success">
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