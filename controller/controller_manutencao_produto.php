<?php

/**
 * Controller do cadastro de Produto
 * @author Samuel Chiodini 
 * @since 31/03/2022
 */
class ControllerManutencaoProduto {
    
    public function abreCadastro() {
        $this->montaTela();
        $this->verificaAcao();
    }

    protected function verificaAcao() {
        if(isset($_GET['acao'])) {
            $sAcao = $_GET['acao'];
            switch($sAcao){
                case $sAcao == 'cadastrar':
                    return $this->setNovoProduto();
                case $sAcao == 'listar':
                    break;
            }
        }
    }

    protected function setNovoProduto() {
       $sProdutoNome = $_POST['produto_nome'];
       $xProdutoValor = $_POST['produto_valor'];
       $iProdutoQuantidade = $_POST['produto_quantidade'];

       return var_dump($sProdutoNome);
    }

    protected function criaTxt() {
        
    }

    protected function montaTela() {
        return require_once ('view\view_manutencao_produto.php');
    }

}