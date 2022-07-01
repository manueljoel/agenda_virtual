<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>


<div class="container-fluid py-1">
    <div class=" mb-5 bg-white text-dark py-4 rounded-2 shadow">
        <h1 class="ui header">
            <div class="m-3 content">Configurações da Conta <div class="sub header">Todos os meus dados</div>
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

<div class="container">
    <div class="row m-1 m-2 py-2 mb-5">
        <div class="py-1 mb-3">
            <div class="m-3 py-4 mb-2 col-md-12">
                <table id="Tabela" class=" ui fixed celled table shadow-sm" style="width:100%">
                    <thead class="">
                        <tr>
                            <th width="2%">ID</th>

                            <th>Nome de Usuário</th>

                            <th>Email</th>

                            <th width="13%">Acçōes</th>
                        </tr>

                    </thead>
                    <tbody>

                        <tr>
                            <th>1</th>
                            <td scope="row">Joel Manuel</td>
                            <td scope="row">Joel@gmail.com</td>

                            <th>
                                <a href="" class="ui cinza button btn-sm">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>

                                <a href="../../painel/usuario/editar_usuario.php" class="ui teal button btn-sm ">
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
                                                <div class="modal-header ui">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detalhes do Usuário</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Nome: Joel Manuel
                                                    <br>Email:Joel@gmail.com
                                                    <br>Senha:****

                                                    <br>Nacionalidade:Angolana
                                                    <br>Usuário:desde 06/05/2022...pelas 20:00
                                                    <br>Criou a conta através da google
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
            <div class="m-1">
                <a href="../../painel/usuario/editar_usuario.php" class="ui cinza button">
                    <i class="fa-solid fa-rectangle-xmark"></i>
                    Cancelar
                </a>
            </div>
        </div>
    </div>
</div>
<br><br>
<br><br>
<?php
include_once('../../../view/painel/layouts/footer.php');
?>