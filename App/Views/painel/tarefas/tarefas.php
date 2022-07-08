<div class="nav-scroller bg-white px-4 py-2 shadow">
    <nav class="nav" aria-label="Secondary navigation">
        <a class="nav-link" aria-current="page" href="/../agenda_virtual/view/painel/home.php">
            Home
        </a>
        <a class="nav-link" href="/../agenda_virtual/view/painel/contactos/lista_contactos.php">
            Ver Contactos
            <span class="badge bg-light text-dark rounded-pill align-text-bottom">1</span>
        </a>
        <a class="nav-link" href="/../agenda_virtual/view/painel/evento/lista_evento.php">
            Ver Evento
            <span class="badge bg-light text-dark rounded-pill align-text-bottom">1</span>
        </a>
        <a class="nav-link" href="#">Calendário</a>
    </nav>
</div>

<br>

<div class="container py-2">
    <div class="text-center text-white alert alert alerta co-md-12" role="alert">
        Adicionar Tarefas
    </div>
</div>
<div class="container">
    <div class="row mb-3">
        <div class="card-body rounded-2 bg-white shadow py-3">
            <form class="needs-validation">
                <div class="row p-3">
                    <div class="col-sm-6">
                        <label>Título da tarefa:</label>
                        <input type="text" class="form-control" placeholder="informe o título da tarefa ..." required>
                    </div>
                    <div class="col-sm-6">
                        <label>Hora:</label>
                        <input type="Time" class="form-control" required>
                    </div>
                    <div class="col-sm-12 py-2">
                        <label>Data:</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="col-sm-12 py-2">
                        <label>Descrição:</label>
                        <textarea class="form-control" type="text" placeholder="..." cols="30" rows="6"></textarea>
                    </div>
                </div>
                <div class="m-2 card-footer-fluid px-3 bg-white">
                    <button type="submit" class="btn btn botao">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Salvar
                    </button>
                    <a href="/tarefas" type="submit" class="m-1 btn btn botao">
                        <i class="fa-solid fa-list"></i>
                        Ver lista
                    </a>
                    <a href="/tarefas" type="submit" class=" m-1 btn btn botao">
                        <i class="fa-solid fa-rectangle-xmark"></i>
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>