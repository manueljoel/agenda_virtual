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
</div>

<div class="container-fluid">
    <div class="row m-1 py-3 mb-5">
        <div class="row py-4 mb-5">
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

                        <!-- Inicio de nova tarefa -->
                        <tr>
                            <td scope="row">Criar o crud das páginas que faltam</td>
                            <td scope="row">Paginas Grupo de tarefas e contacto...</td>
                            <td scope="row">07/08/2022</td>
                            <td scope="row">09:00</td>

                            <th>
                                <a href="" class="ui cinza button btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <a href="../../painel/tarefas/editar_tarefas.php" class="ui teal button btn-sm ">
                                    <i class="fa-solid fa-pen-clip"></i>
                                </a>

                                <!-- Princípio do modal -->
                                <button type="button" class="ui yellow button btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-eye"></i>
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
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
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

            <div class="m-3">
                <a href="../../painel/tarefas/tarefas.php" class="ui teal button">
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