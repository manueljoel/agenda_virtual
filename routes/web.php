<?php

use Core\Router;

$router = new Router();

// Add the routes
$router->add('', ['controller' => 'Login', 'action' => 'index']);
$router->add('login', ['controller' => 'Login', 'action' => 'index']);

$router->add('home', ['controller' => 'Home', 'action' => 'index']);

//Tarefas rotas
$router->add('tarefas', ['controller' => 'Tarefa', 'action' => 'index']);
$router->add('tarefa/adicionar', ['controller' => 'Tarefa', 'action' => 'adicionar']);
$router->add('tarefa/editar', ['controller' => 'Tarefa', 'action' => 'editar']);
$router->add('tarefa/visualizar', ['controller' => 'Tarefa', 'action' => 'index']);
$router->add('tarefa/deletar', ['controller' => 'Tarefa', 'action' => 'index']);

//Eventos Routas
$router->add('eventos', ['controller' => 'Evento', 'action' => 'index']);
$router->add('evento/adicionar', ['controller' => 'Evento', 'action' => 'index']);
$router->add('evento/editar', ['controller' => 'Evento', 'action' => 'index']);
$router->add('evento/visualizar', ['controller' => 'Evento', 'action' => 'index']);
$router->add('evento/deletar', ['controller' => 'Evento', 'action' => 'index']);

//Contactos Routas
$router->add('contactos', ['controller' => 'Contacto', 'action' => 'index']);
$router->add('contacto/adicionar', ['controller' => 'Contacto', 'action' => 'index']);
$router->add('contacto/editar', ['controller' => 'Contacto', 'action' => 'index']);
$router->add('contacto/visualizar', ['controller' => 'Contacto', 'action' => 'index']);
$router->add('contacto/deletar', ['controller' => 'Contacto', 'action' => 'index']);

//Usuario Routas
$router->add('usuarios', ['controller' => 'Login', 'action' => 'index']);
$router->add('usuario/adicionar', ['controller' => 'Login', 'action' => 'index']);
$router->add('usuario/editar', ['controller' => 'Login', 'action' => 'index']);
$router->add('usuario/visualizar', ['controller' => 'Login', 'action' => 'index']);
$router->add('usuario/deletar', ['controller' => 'Login', 'action' => 'index']);

$router->add('{controller}/{action}');
$router->dispatch($_SERVER['QUERY_STRING']);
