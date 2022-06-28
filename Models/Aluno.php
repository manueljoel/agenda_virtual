<?php


include_once 'PDOConnection.php';


/**
 * 
 */
class Aluno
{
    private $idaluno;
    private $nome;
    private $telefone;
    private $bi;
    private $data_nascimento;
    private $nacionalidade;
    private $naturalidade;
    private $morada;
    private $idgenero;
    private $idturno;
    private $idcurso;
    private $idclasse;
    private $idciclo;
    private $idturma;
    private $idsala;
    private $pdo;

    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if ($i > 0) {
            call_user_func_array(array($this, 'constructArg'), $a);
        }
        $this->pdo = new PDOConnection();
    }


    //Constructor de preenchimento. 

    function constructArg($idaluno, $nome, $telefone, $bi, $data_nascimento, $nacionalidade, $naturalidade, $idgenero, $idturno, $morada, $idcurso, $idclasse, $idciclo, $idturma, $idsala)
    {
        $this->idaluno = $idaluno;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->bi = $bi;
        $this->data_nascimento = $data_nascimento;
        $this->nacionalidade = $nacionalidade;
        $this->naturalidade = $naturalidade;
        $this->idgenero = $idgenero;
        $this->idturno = $idturno;
        $this->morada = $morada;
        $this->idcurso = $idcurso;
        $this->idclasse = $idclasse;
        $this->idciclo = $idciclo;
        $this->idturma = $idturma;
        $this->idsala = $idsala;
    }

    public function selecionar()
    {
        $sql = 'SELECT
        A.idaluno,
        A.nome as nome_alunoss,
        A.telefone,
        A.bi,
        A.data_nascimento,
        A.nacionalidade,
        A.naturalidade,
        A.morada,
        G.descricao as descricao_genero,
        Tu.descricao as descricao_turno,
        U.nome as nome_curso,
        U.abreviatura,
        C.descricao as descricao_classe,
        Ci.descricao as descricao_ciclo,
        T.descricao as descricao_turma,
        S.numeroSala
        FROM
            Aluno A
        INNER JOIN  genero G ON
            A.idgenero = G.idgenero
        INNER JOIN  turno Tu ON
            A.idturno = Tu.idturno
        INNER JOIN curso U ON
            A.idcurso = U.idcurso
        INNER JOIN  classe C ON
            A.idclasse = C.idclasse
        INNER JOIN ciclo Ci ON
            A.idciclo = Ci.idciclo
        INNER JOIN turma T ON
            A.idturma = T.idturma
        INNER JOIN sala S ON
            A.idsala = S.idsala';
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }

    function getClasse()
    {
        $sql = "select * from classe";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }


    function getGenero()
    {
        $sql = "select * from genero";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }

    function getTurno()
    {
        $sql = "select * from turno";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }

    function getCiclo()
    {
        $sql = "select * from ciclo";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }

    function getSala()
    {
        $sql = "select * from sala";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }

    function getTurma()
    {
        $sql = "select * from turma";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }

    function getCurso()
    {
        $sql = "select * from curso";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }


    function alunoPorID($id)
    {
        $stmt = $this->pdo->conect()->prepare("SELECT * FROM aluno WHERE idaluno=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }



    function inserirAluno()
    {
        $data = [
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'bi' => $this->bi,
            'data_nascimento' => $this->data_nascimento,
            'nacionalidade' => $this->nacionalidade,
            'naturalidade' => $this->naturalidade,
            'morada' => $this->morada,
            'idgenero' => $this->idgenero,
            'idturno' => $this->idturno,
            'idcurso' => $this->idcurso,
            'idclasse' => $this->idclasse,
            'idciclo' => $this->idciclo,
            'idturma' => $this->idturma,
            'idsala' => $this->idsalas
        ];
        $sql = "INSERT INTO aluno (nome, telefone, bi, data_nascimento, nacionalidade, naturalidade, morada, idgenero, idturno, idcurso, idclasse, idciclo, idturma, idsala) VALUES (:nome, :telefone, :bi, :data_nascimento, :nacionalidade, :naturalidade, :morada, :idgenero, :idturno, :idcurso, :idclasse, :idcilo, :idturma, :idsalas)";
        $stmt = $this->pdo->conect()->prepare($sql);
        return $stmt->execute($data);
    }


    function deletarAluno($id)
    {
        return $this->pdo->conect()->prepare("DELETE FROM aluno WHERE idaluno=?")->execute([$id]);
    }
}
