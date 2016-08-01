<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Caricaturas</title>
        <link rel="shortcut icon" href="<?= base_url("assets/img/cyrela.ico"); ?>" type="image/x-icon" />
        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- Meu CSS -->
        <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
        <!-- font-awesome -->
        <link href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-6">
                            <?= img('assets/img/topo-logo-cyrela-rjz.png', FALSE, array('class' => 'logo-login')); ?>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group input-pesquisa">
                                <input type="text" class="form-control" placeholder="Pesquisar">
                                <span class="input-group-btn">
                                    <button class="btn btn-azul" type="button">Buscar</button>
                                </span>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div>
            </div>
        </nav>
        <br><br>
        <div class="container painel">



