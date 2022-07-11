<?php

namespace App\Controllers;

use \Core\View;
use Core\Controller;


class Login extends Controller
{

    public function indexAction()
    {
        View::render('login/layouts/header.php');
        View::render('login/login.php');
        View::render('login/layouts/footer.php');
    }
}