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
        $this->escreveTxt(Array('produto_nome' => $sProdutoNome, 
                                'produto_valor' => $xProdutoValor, 
                                'produto_quantidade' => $iProdutoQuantidade));
    }

    protected function criaTxt($bCriaTxt = true) {
        if($bCriaTxt) {
            $xTxt = fopen("produto.txt", "w") or die("Ocorreu erro na criação do arquivo");
        }
    }

    protected function escreveTxt($aParametro) {
        var_dump($aParametro);
    }

    protected function montaTela() {
        return require_once ('view\view_manutencao_produto.php');
    }

}