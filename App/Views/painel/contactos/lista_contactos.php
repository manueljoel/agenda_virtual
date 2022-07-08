<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<div class="container-fluid">
    <div class="row m-1 m-2 py-4 mb-5">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h4 class="card-title">Meus Contactos</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="Tabela" class="table tablesorter " id="">
                                    <thead class="">
                                        <tr>
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Telefone
                                            </th>
                                            <th>
                                                Morada
                                            </th>
                                            <th width="18%">
                                                Acçōes
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">Sandra Mulata</td>
                                            <td scope="row">912878900</td>
                                            <td scope="row">Viana</td>

                                            <th>
                                                <button type="button" class="btn botao btn-sm" onclick="remove(this)">
                                                    <i class="fa-solid fa-trash-can"></i>Excluir
                                                </button>

                                                <a href="../../painel/contactos/editar_contactos.php" class="btn botao btn-sm">
                                                    <i class="fa-solid fa-pen-clip"></i>Editar
                                                </a>

                                                <!-- botao do modal -->
                                                <button type="button" class="btn botao btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa-solid fa-eye"></i>Ver
                                                </button>

                                                <!-- Princípio do modal -->
                                                <div class="">
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Descrição do contacto</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Nome: Sandra Mulata
                                                                    <br>Número:912878900
                                                                    <br>Morada:Vila de Viana(perto do Colégio Elsamina).
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                                        <i class="fa-solid fa-rectangle-xmark"></i>
                                                                        Fechar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- fimdo modal -->
                                            </th>
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