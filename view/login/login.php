<?php include_once("layouts/header.php"); ?>

<div class="container">


    <div class="form-container">


        <div class="signin">

            <form action="../../view/painel/home.php" class="form-sign-in">
                <img class="mb-4" src="/../agenda_virtual/assets/img/icons8_checked_user_male_64.png" alt="" width="65" height="65">

                <input type="email" placeholder="email@gmail.com" required>
                <input type="password" placeholder="Senha***" required>


                <button class="btn btn-primary">Entrar</button>

            </form>

        </div>



        <div class="signup">

            <form action="" class="form-sign-up">
                <img class="mb-4" src="/../agenda_virtual/assets/img/icons8_add_user_male_64.png" alt="" width="65" height="65">
                <input type="text" placeholder="informe seu nome" required>
                <input type="email" placeholder="informe seu email" required>
                <input type="password" placeholder="informe sua enha" required>

                <button class="btn btn-primary">Criar</button>

            </form>

        </div>

    </div>



    <div class="overlay">

        <div class="overlay-panel overlay-signin">
            <h1>
                Bem-Vindo
            </h1>
            <span>
                Se o cadastro já foi feito, Então podes
            </span>
            <button class="btn btn-overlay" onclick="togglePage()">Entrar</button>
        </div>

        <div class="overlay-panel overlay-signup">
            <h1>
                Olá, Amigo!
            </h1>
            <span>
                Se ainda não tens uma conta, clica no botão abaixo
            </span>
            <button class="btn btn-overlay" onclick="togglePage()">Criar</button>
        </div>

    </div>

</div>

<?php include_once("layouts/footer.php") ?>