<?php

namespace App\Controllers;

use \Core\View;
use Core\Controller;

class Evento extends Controller
{

    public function indexAction()
    {
        View::render('painel/layouts/header.php');
        View::render('painel/layouts/navbar.php');
        View::render('painel/evento/lista_evento.php');
        View::render('painel/layouts/footer.php');
    }
}