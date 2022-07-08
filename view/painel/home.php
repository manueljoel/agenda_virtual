<?php
include_once('../painel/layouts/header.php');
include_once('../painel/layouts/navbar.php');
?>

<div class="px-3 py-2 border-bottom mb-0 bg-light shadow-lg">
    <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
            <input type="search" class="form-control" placeholder="Pesquisar..." aria-label="Search">
        </form>

        <div class="text-end">
            <button type="button" class="btn btn-light text-dark me-2">
                <i class="fa-solid fa-user-gear"></i>
                Perfil
            </button>
            <a href="../../view/login/login.php" type="button" class="btn botao">
                <i class="fa-solid fa-door-open"></i>
                Sair
            </a>
        </div>
    </div>
</div>


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../../assets/img/—Pngtree—creative gray office background_1347893.JPG" class="bd-placeholder-img" width="100%" height="600px">
            <rect width="100%" height="100%" fill="#777" />
            </img>

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Bem Vindo a sua Agenda-Virtual(+Time).</h1>
                    <p>Fique mas próximo dos seus...</p>
                    <p><a class="btn btn-lg btn botao" href="#">Contactos</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../../assets/img/—Pngtree—creative gray office background_1347893.JPG" class="bd-placeholder-img" width="100%" height="600px">
            <rect width="100%" height="100%" fill="#777" />
            </img>

            <div class="container">
                <div class="carousel-caption">
                    <h1>Cumpra com as suas Metas.</h1>

                    <p>Organiza o seu trabalho e o temo de execução...</p>
                    <p><a class="btn btn-lg btn botao" href="#">Tarefas</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../../assets/img/—Pngtree—creative gray office background_1347893.JPG" class="bd-placeholder-img" width="100%" height="600px">
            <rect width="100%" height="100%" fill="#777" />
            </img>

            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>Chegue sempre à horas aos seus eventos .</h1>
                    <p>Ser pontual não é nada difícil.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Eventos</a></p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Avança</span>
    </button>
</div>


<?php
include_once('../painel/layouts/footer.php');
