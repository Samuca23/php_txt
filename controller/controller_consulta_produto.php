<?php

/**
 * Constroller consulta para a listagem de produtos
 * @author Samuel Chiodini 
 * @since 03/04/2022
 */

class ControllerConsultaProduto {

    public function abreListagem() {
        $this->montaTela();
    }

    public function montaTela() {
        return require_once('view\view_consulta_produto.php');
    }
}