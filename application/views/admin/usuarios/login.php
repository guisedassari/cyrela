<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>login</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url('assets/css/admin-style.css') ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php
                    if (($this->session->flashdata('danger'))) {
                        echo '<p class="alert alert-danger">' . $this->session->flashdata('danger') . '</p>';
                    }
                    ?>
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <?= img('tema/img/Kairos.png', FALSE, array('class' => 'kairos')); ?>
                        </div>
                        <div class="panel-body">
                            <?php
                            echo form_open('admin/usuarios/login', array('rule' => 'form', 'class' => 'form_login'));
                            echo form_label('Nome');
                            echo form_input(array('class' => 'form-control', 'name' => 'nome', 'id' => 'nome', set_value('nome'), 'autofocus' => 'true'));
                            echo form_label('Senha');
                            echo form_input(array('class' => 'form-control', 'type' => 'password', 'name' => 'senha', 'id' => 'senha', set_value('senha')));
                            echo div_open('form-group text-right');
                            echo '<br>';
                            echo form_button(array('class' => 'btn btn-laranja', 'type' => 'submit', 'content' => 'Entrar'));
                            echo div_close();
                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
