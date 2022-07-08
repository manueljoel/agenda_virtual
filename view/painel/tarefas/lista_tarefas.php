<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="nav-scroller bg-white px-4 py-2 shadow">
    <nav class="nav" aria-label="Secondary navigation">
        <a class="nav-link" aria-current="page" href="/../agenda_virtual/view/painel/home.php">
            Home
        </a>
        <a class="nav-link" href="/../agenda_virtual/view/painel/contactos/contactos.php">
            Criar Contactos
            <span class="badge bg-light text-dark rounded-pill align-text-bottom">0</span>
        </a>
        <a class="nav-link" href="/../agenda_virtual/view/painel/evento/evento.php">
            Adicionar Evento
            <span class="badge bg-light text-dark rounded-pill align-text-bottom">0</span>
        </a>
        <a class="nav-link" href="#">Calendário</a>
    </nav>
</div>

<div class="container-fluid">
    <div class="row m-1 m-2 py-4 mb-5">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h4 class="card-title">Lista de Tarefas</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="Tabela" class="table tablesorter " id="">
                                    <thead class="">
                                        <tr>
                                            <th>Título da tarefa</th>

                                            <th>Descriçāo</th>

                                            <th>Data</th>

                                            <th>Hora</th>

                                            <th width="19%">
                                                Acçōes
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- Inicio de nova tarefa -->
                                        <tr>
                                            <td scope="row">Criar o crud das páginas que faltam</td>
                                            <td scope="row">Paginas Grupo de tarefas e contacto...</td>
                                            <td scope="row">07/08/2022</td>
                                            <td scope="row">09:00</td>

                                            <th>
                                                <button type="button" class="btn botao btn-sm" onclick="remove(this)">
                                                    <i class=" fa-solid fa-trash-can"></i>
                                                    Excluir
                                                </button>

                                                <a href="../../painel/tarefas/editar_tarefas.php" class="btn botao btn-sm ">
                                                    <i class="fa-solid fa-pen-clip"></i>
                                                    Editar
                                                </a>

                                                <!-- Princípio do modal -->
                                                <button type="button" class="btn botao btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa-solid fa-eye"></i>
                                                    Ver
                                                </button>

                                                <!-- Princípio do modal -->
                                                <div class="">
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="menu modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Criar o crud das páginas que faltam</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Descriçāo:criar o crude comple nas paginas Grupo de
                                                                    tarefas e contacto e color os botões suas acçōes.<br>
                                                                    <br>Data final:07/08/2022
                                                                    <br>Hora final: 09:00
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                                        Fechar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- fim do modal -->
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <a href="../../painel/tarefas/tarefas.php" class="btn btn botao">
                        <i class="fa-solid fa-plus"></i>
                        Adicionar
                    </a>
                </div>
                <?php
                include_once('../../../view/painel/layouts/footer.php');
                ?>