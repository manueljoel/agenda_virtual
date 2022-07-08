<?php

namespace App\Controllers;

use \Core\View;
use Core\Controller;


class Login extends Controller
{

    public function indexAction()
    {
        View::render('login/login.php');
    }
}