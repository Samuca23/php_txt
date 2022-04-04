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

        $this->listaDado($aDado);
    }
    
    protected function listaDado($aDado) {
        json_decode($aDado, true);
        if(json_last_error() == 0){
            foreach($aDado as $key => $oDado) {
                echo $oDado;
                echo "<br>";
            }
        }else {
            echo json_last_error();
        }
    }

    public function montaTela() {
        return require_once('view\view_consulta_produto.php');
    }
}