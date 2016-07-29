<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thumbnail Gallery</h1>
        </div>
        <?php
        foreach ($clientes as $cliente) :
            ?>
            <!-- Button trigger modal -->
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="example-image-link thumbnail" href="<?= base_url().'toten/caricaturas/cadastro/'.$cliente['id_cliente']?>">
                    <?= img(array('src' => base_url("uploads/" . $cliente['caricatura']), 'class' => 'example-image')) ?>
                </a>
                <div class="legenda text-center">
                    <p><?= $cliente['nome'] . " " . $cliente['sobrenome']; ?></p>
                </div>
            </div>
            <?php
        endforeach;
        ?>
    </div>
    <hr>
</div>
