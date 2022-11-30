<?php 
namespace App\Controller;

use App\Model\Clientes;
use League\Plates\Engine;

class Page extends Clientes
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->clientes = new Clientes();
        $this->view = new Engine(__DIR__.'/../../view', 'php');
        $this->view->addData([
            'title' => 'Clientes'
        ]);
    }

    public function viewClientes()
    {
       
        echo $this->view->render('clientes/clientes');
    }

    public function viewCadastro()
    {
        $clientes = db()->select("tbl_clientes", "id, nome, idade")->orderBy('id', 'DESC')->fetchAll();
        echo $this->view->render('clientes/cadastro', ["clientes" => $clientes]);
    }

    public function createCliente()
    {
        $dados = request()->body();
        $nome = $dados['nome'];
        $idade = $dados['idade'];
        db()->insert("tbl_clientes")
        ->params([
          "nome" => $nome,
          "idade" => $idade
        ])
        ->execute();
        $clientes = db()->select("tbl_clientes", "id, nome, idade")->orderBy('id', 'DESC')->fetchAll();
        echo json_encode($clientes);
    }
}   