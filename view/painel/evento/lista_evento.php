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

<div class="container-fluid py-1">
    <div class="row py-3 m-2 mb-5">
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

                        <!-- Primeiro evento -->
                        <tr class="id">
                            <td scope="row">1</td>
                            <td scope="row">Ir para reuniāo da escola da Judth</td>
                            <td scope="row">Falar com os professores...</td>
                            <td scope="row">02/07/2022</td>
                            <td scope="row">Viana/Vila(Eliada)</td>
                            <td scope="row">07:00</td>

                            <th>
                                <a href="javascript:func()" onclick="excluir('1')" class="ui cinza button btn-sm excluir">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <a href="../../painel/evento/editar_evento.php" class="ui teal button btn-sm ">
                                    <i class="fa-solid fa-pen-clip"></i>
                                </a>

                                <!-- botao do modal -->
                                <button type="button" class="ui yellow button btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-eye"></i>
                                </button>

                                <!-- Princípio do modal -->
                                <div class="">
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="menu modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ir para reuniāo da escola da Judth</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Descriçāo: Receber o bolitim de
                                                    notas e falar com os professores
                                                    e director sobre o comportamento da mesma.<br>
                                                    <br>Data:02/07/2022
                                                    <br>Hora:07:00
                                                    <br>Local:Vila de Viana(Colégio Eliada).
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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