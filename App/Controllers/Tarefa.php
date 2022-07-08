<?php

namespace App\Controllers;

use \Core\View;
use Core\Controller;


class Tarefa extends Controller
{

    public function indexAction()
    {
        $tarefas = [
            [
                'id' => 1,
                'titulo' => 'Teste 1',
                'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a cursus nisl, quis aliquam lorem. Vestibulum ac turpis turpis. Vivamus tristique nibh in nunc molestie lobortis. Etiam mauris ipsum, semper a lectus ac, interdum hendrerit justo. Ut tristique turpis sapien, ut luctus felis dignissim in. Morbi sit amet dui et dolor porta fermentum non sed orci. Etiam at facilisis massa, vel lobortis lectus. Nulla eget leo sit amet est lacinia convallis vitae id nisi. Pellentesque a aliquet justo, dictum vestibulum lacus. In sagittis elementum lacinia. Morbi volutpat diam id sem mattis, ut hendrerit lacus cursus. In eget molestie ipsum. Aliquam erat volutpat. Aliquam vitae diam turpis. Morbi eget hendrerit ex.',
                'data' => '07/08/2022',
                'hora' => '09:00',
                'nivel_prioridade' => 'Alta',
                'responsavel' => 'Leonardo Quizomba',
                'estado' => 'Pedente',
            ],
            [
                'id' => 2,
                'titulo' => 'Teste 2',
                'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a cursus nisl, quis aliquam lorem. Vestibulum ac turpis turpis. Vivamus tristique nibh in nunc molestie lobortis. Etiam mauris ipsum, semper a lectus ac, interdum hendrerit justo. Ut tristique turpis sapien, ut luctus felis dignissim in. Morbi sit amet dui et dolor porta fermentum non sed orci. Etiam at facilisis massa, vel lobortis lectus. Nulla eget leo sit amet est lacinia convallis vitae id nisi. Pellentesque a aliquet justo, dictum vestibulum lacus. In sagittis elementum lacinia. Morbi volutpat diam id sem mattis, ut hendrerit lacus cursus. In eget molestie ipsum. Aliquam erat volutpat. Aliquam vitae diam turpis. Morbi eget hendrerit ex.',
                'data' => '07/08/2022',
                'hora' => '09:00',
                'nivel_prioridade' => 'Media',
                'responsavel' => 'Alberto Francisco',
                'estado' => 'Em Execução',
            ],
            [
                'id' => 3,
                'titulo' => 'Teste 3',
                'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a cursus nisl, quis aliquam lorem. Vestibulum ac turpis turpis. Vivamus tristique nibh in nunc molestie lobortis. Etiam mauris ipsum, semper a lectus ac, interdum hendrerit justo. Ut tristique turpis sapien, ut luctus felis dignissim in. Morbi sit amet dui et dolor porta fermentum non sed orci. Etiam at facilisis massa, vel lobortis lectus. Nulla eget leo sit amet est lacinia convallis vitae id nisi. Pellentesque a aliquet justo, dictum vestibulum lacus. In sagittis elementum lacinia. Morbi volutpat diam id sem mattis, ut hendrerit lacus cursus. In eget molestie ipsum. Aliquam erat volutpat. Aliquam vitae diam turpis. Morbi eget hendrerit ex.',
                'data' => '07/08/2022',
                'hora' => '09:00',
                'nivel_prioridade' => 'Baixa',
                'responsavel' => 'Carlos Pedro',
                'estado' => 'Em Execução',
            ]
        ];
        View::render('painel/layouts/header.php');
        View::render('painel/layouts/navbar.php');
        View::render('painel/tarefas/lista_tarefas.php', [
            'tarefas' => $tarefas
        ]);
        View::render('painel/layouts/footer.php');
    }

    public function adicionar()
    {
        View::render('painel/layouts/header.php');
        View::render('painel/layouts/navbar.php');
        View::render('painel/tarefas/tarefas.php');
        View::render('painel/layouts/footer.php');
    }

    public function editar()
    {
        View::render('painel/layouts/header.php');
        View::render('painel/layouts/navbar.php');
        View::render('painel/tarefas/editar_tarefas.php');
        View::render('painel/layouts/footer.php');
    }
}