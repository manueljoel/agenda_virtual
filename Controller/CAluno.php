<?php

if (file_exists('../Models/Aluno.php')) {
    require_once('../Models/Aluno.php');
} else {
    require_once('../../../Models/Aluno.php');
}

extract($_REQUEST);


if (isset($acao)) {

    switch ($acao) {
        case 'adicionar':
            $ob = new Aluno(0, $nome, $telefone, $bi, $data_nascimento, $nacionalidade, $naturalidade, $idgenero, $idturno, $morada, $idcurso, $idclasse, $idturma, $idsala);
            $ob->inserirAluno();
            header('Location: ../view/painel/aluno/l_aluno.php');
            break;

        case 'eliminar':
            $ob = new Aluno();
            $ob->deletarAluno($idaluno);
            header('Location: ../view/painel/aluno/l_aluno.php');
            break;
    }
}

function listarAluno()
{
    $ob = new Aluno();
    return $ob->selecionar();
}

function trazAluno($id)
{
    $ob = new Aluno();
    return $ob->alunoPorID($id);
}

function trazGenero()
{
    $ob = new Aluno();
    return $ob->getGenero();
}

function trazTurno()
{
    $ob = new Aluno();
    return $ob->getTurno();
}


function trazClasse()
{
    $ob = new Aluno();
    return $ob->getClasse();
}

function trazCiclo()
{
    $ob = new Aluno();
    return $ob->getCiclo();
}


function trazSala()
{
    $ob = new Aluno();
    return $ob->getSala();
}

function trazTurma()
{
    $ob = new Aluno();
    return $ob->getTurma();
}

function trazCurso()
{
    $ob = new Aluno();
    return $ob->getCurso();
}
