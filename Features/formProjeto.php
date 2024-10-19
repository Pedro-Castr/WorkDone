<?php

require_once("../lib/Database.php");
require_once("../lib/Funcoes.php");

$db = new Database();
$func = new Funcoes();

$dados = [];


 if ($_GET['acao'] != 'insert') {
     $dados = $db->dbSelect(
         "SELECT * FROM projetos WHERE id = ?",
         'first',
         [$_GET['id']]
     );
 }

?>
<div class="container-5">
    <form class="g-3" action="<?= $_GET['acao'] ?>projeto.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?= Funcoes::setValue($dados, "id") ?>">
        
        <div style='position: flex; items-align: center; display: flex'>
            <div class="row">
                <div class="col-6">            
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Projeto" required autofocus value="<?= Funcoes::setValue($dados, 'nome') ?>">
                </div>
                <div class="col-6">
                    <label for="prazo">Prazo</label>
                    <input type="date" class="form-control" id="prazo" name="prazo" placeholder="Prazo" required value="<?= Funcoes::setValue($dados, 'prazo') ?>">
                </div>
                <div class="col-6">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" required value="<?= Funcoes::setValue($dados, 'descricao') ?>">
                </div>
                <div class="col-6">
                    <label for="situacao">Situação:</label>
                    <input type="number" class="form-control" id="situacao" name="situacao" placeholder="Situação" required value="<?= Funcoes::setValue($dados, 'situacao') ?>">
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <a href="../index.php" 
                    class="btn btn-outline-secondary btn-sm">
                    Voltar
                </a>

                <?php if ($_GET['acao'] != 'view'): ?>
                    <button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
                <?php endif; ?>
            </div>
        </div>

    </form>
</div>
