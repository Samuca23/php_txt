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
                    $this->getChamaListagem();
                    break;
            }
        }
    }

    protected function getChamaListagem($bChamaListagem = true) {
        if($bChamaListagem) {
            require_once('controller/controller_consulta_produto.php');
            $oListagem = new ControllerConsultaProduto;

            return $oListagem->abreListagem();
        }
    }

    protected function setNovoProduto() {
        $sProdutoNome = $_POST['produto_nome'];
        $xProdutoValor = $_POST['produto_valor'];
        $iProdutoQuantidade = $_POST['produto_quantidade'];
        $this->escreveTxt(json_encode( Array('produto_nome' => $sProdutoNome, 
                                'produto_valor' => $xProdutoValor, 
                                'produto_quantidade' => $iProdutoQuantidade)). "\n");
    }

    protected function criaTxt($bCriaTxt = true) {
        if($bCriaTxt) {
            $xTxt = fopen("txt/produto.txt", "a+") or die("Ocorreu erro na criação do arquivo");

            return $xTxt;
        }
    }

    protected function escreveTxt($aParametro) {
       $xTxt = $this->criaTxt();
       if(fwrite($xTxt, $aParametro)){
        ?>
            <script>window.alert('Produto cadastrado com sucesso!');</script>
        <?php
       }
    }

    protected function montaTela() {
        return require_once ('view\view_manutencao_produto.php');
    }

}