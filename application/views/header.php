<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $titulo ?></title>

    <!--	ARQUIVOS DE ESTILO	-->
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-theme.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">

    <!--	ARQUIVOS DE SCRIPT	-->
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.3.1.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/npm.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/buscaModal.js') ?>"></script>

</head>

<body>
    <!-- DIV DE VISUALIZACAO PARA AS VIEWS QUE UTILIZAM MODAL -->
    <div class="modal fade text-primary" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span
                            aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="visualizarTitulo"> ... </h4>
                </div>
                <div id="visualizarTexto" class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button id="visualizarModal" type="button" class="btn btn-default"
                        data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- DIV DE JANELA PADRAO PARA AS VIEWS QUE UTILIZAM MODAL -->
    <div class="modal fade text-primary" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalTitulo"> ... </h4>
                </div>
                <div id="modalTexto" class="modal-body">
                    ...
                </div>
                <div class="modal-footer" id="modalSalvar">
                    <button id="fecharModal" type="button" class="btn btn-default" data-dismiss="modal">Fechar
                    </button>
                    <button id="salvarModal" type="button" class="btn btn-primary"
                        data-loading-text="Carregando...">Salvar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL PADRAO BOOTSTRAP -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div id="modal-conteudo" class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- div de ERRO -->
    <div class="modal fade text-danger" id="erro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="erroTitulo">Erro!</h4>
                </div>
                <div id="erroTexto" class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <!--<button type="button" class="btn btn-primary">Salvar mudan�as</button>-->
                </div>
            </div>
        </div>
    </div>