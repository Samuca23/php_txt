<?php

/**
 * Constroller consulta para a listagem de produtos
 * @author Samuel Chiodini 
 * @since 03/04/2022
 */

class ControllerConsultaProduto {

    public function abreListagem() {
        $this->montaTela();
        $this->trataDadoListagem();
    }

    protected function trataDadoListagem() {
        $oFopenFile = fopen("txt/produto.txt", "rb");
        $oFile = "txt/produto.txt";
        $aDado = fread($oFopenFile, filesize($oFile));
        $aDado = (explode("}", $aDado));

        $this->listaDado($aDado);
    }

    protected function listaDado($aDado) {
        foreach($aDado as $key => $oDado) {
            //$oDado = json_decode($oDado);
            echo $oDado;
        }
    }

    public function montaTela() {
        return require_once('view\view_consulta_produto.php');
    }
}