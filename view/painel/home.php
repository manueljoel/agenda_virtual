<?php
include_once('../painel/layouts/header.php');
include_once('../painel/layouts/navbar.php');
?>


<div class="container-fluid my-3 py-2">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5  align-items-center rounded-3 shadow">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h3 class="display-5 fw-bold text-dark">Agenda Virtual</h3>

            <div class="ui stackable menu">
                <div class="item">
                    <img src="/../agenda_virtual/assets/img/icons8_dossier_folder.ico" width="80" height="40">
                </div>
                <a href="/../agenda_virtual/view/painel/contactos/contactos.php" class="item">Contactos</a>

                <a href="/../agenda_virtual/view/painel/tarefas/tarefas.php" class="item">Tarefas</a>

                <a href="/../agenda_virtual/view/painel/evento/evento.php" class="item">Eventos</a>

                <a href="/../agenda_virtual/view/painel/evento/evento.php" class="item">Calendário</a>
            </div>

        </div>
    </div>
</div>


<div class="container-fluid py-4 m-5">
    <div class="row py-4">
        <div class="col-md-3">
            <div class="ui card">
                <div class="content">
                    <div class="header">Tarefas</div>
                </div>
                <div class="content">
                    <h4 class="ui sub header">Actividades a realizar</h4>
                    <div class="meta">vizualizado 2 minutos</div>
                    <div class="ui small feed">
                        <div class="event">
                            <div class="content">
                                <div class="text value">Título: Terminar o projecto Agenda<br></div>
                                <div class="label">Data: 06/30/2022<br>Hora: 09:00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="extra content">
                    <a href="/../agenda_virtual/view/painel/tarefas/lista_tarefas.php" class="ui teal button">
                        <i class="fa-solid fa-plus"></i>
                        ver detalhes
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="ui card">
                <div class="content">
                    <div class="header">Contactos novos</div>
                </div>
                <div class="content">
                    <h4 class="ui sub header">Ver contacos</h4>
                    <div class="meta">vizualizado 40 minutos</div>
                    <div class="ui small feed">
                        <div class="event">
                            <div class="content">
                                <div class="text value">Nome: Joana<br></div>
                                <div class="label">Telefone: 912345678<br>Morada: Talatona</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="extra content">
                    <a href="/../agenda_virtual/view/painel/contactos/lista_contactos.php" class="ui teal button">
                        <i class="fa-solid fa-plus"></i>
                        ver detalhes
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="ui card">
                <div class="content">
                    <div class="header">Eventos</div>
                </div>
                <div class="content">
                    <h4 class="ui sub header">Atividade a ir</h4>
                    <div class="meta">vizualizado 1 hora</div>
                    <div class="ui small feed">
                        <div class="event">
                            <div class="content">
                                <div class="text value">Título: Chegar a tempo a reuniāo<br></div>
                                <div class="label">Data: 05/07/2022<br>Hora: 09:30</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="extra content">
                    <button class="ui teal button">
                        <i class="fa-solid fa-plus"></i>
                        ver detalhes
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-3">

            <div class="ui card">
                <div class="content">
                    <div class="header">Eventos</div>
                </div>
                <div class="content">
                    <h4 class="ui sub header">Atividade a ir</h4>
                    <div class="meta">vizualizado 2 dias atrás</div>
                    <div class="ui small feed">
                        <div class="event">
                            <div class="content">
                                <div class="statistic">
                                    <div class="text value">Título: Ir para o camento da Sara<br></div>
                                    <div class="label">Data: 08/07/2022<br>Hora: 21:30</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="extra content">
                    <button class="ui teal button">
                        <i class="fa-solid fa-plus"></i>
                        ver detalhes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<br><br>

<?php
include_once('../painel/layouts/footer.php');
