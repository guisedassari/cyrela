<div class="modal fade" id="exampleModal<?= $cliente->id_cliente; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New message</h4>
            </div>
            <div class="modal-body">
                <?php
                echo form_open('toten/caricaturas/compartilhar');
                echo form_hidden('nome', $cliente->nome);
                echo form_hidden('caricatura', $cliente->caricatura);
                echo form_label('Compartilhar caricatura nesse email');
                echo form_input(array('class' => 'form-control', 'name' => 'email', 'value' => $cliente->email));
                ?>
            </div>
            <div class="modal-footer">
                <?php
                echo div_open('col-md-12 text-right');
                echo form_button(array('class' => 'btn btn-azul', 'type' => 'submit', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Enviar'));
                echo div_close();
                ?>
            </div>
        </div>
    </div>
</div>