<?php

function delta_arquivo($arquivo) {
    $file = base_url('uploads/' . $arquivo);

    if (unlink($file)) {

        echo 'Excluido com sucesso';
    } else {

        echo 'Erro ao excluir';
    }
}
