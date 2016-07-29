 <!-- Modal -->
            <div class="modal fade" id="myModal<?= $cliente['id_cliente']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Formulario</h4>
                        </div>
                        <div class="modal-body">
                            <?php
                            echo form_open_multipart('toten/caricaturas/editar', array('rule' => 'form', 'class' => 'form_add'));
                            echo form_hidden('id_cliente', $cliente['id_cliente']);
                            echo div_open('col-md-6');
                            echo form_label('Nome');
                            echo form_input(array('class' => 'form-control', 'name' => 'nome', 'id' => 'nome', set_value('nome'), 'autofocus' => 'true'));
                            echo validation_errors('<p class="alert alert-danger">', '</p>');
                            echo div_close();

                            echo div_open('col-md-6');
                            echo form_label('Sobrenome');
                            echo form_input(array('class' => 'form-control', 'name' => 'sobrenome'));
                            echo validation_errors('<p class="alert alert-danger">', '</p>');
                            echo div_close();

                            echo div_open('col-md-6');
                            echo form_label('Cidade');
                            echo form_input(array('class' => 'form-control', 'name' => 'cidade'));
                            echo validation_errors('<p class="alert alert-danger">', '</p>');
                            echo div_close();

                            echo div_open('col-md-6');
                            echo form_label('Telefone');
                            echo form_input(array('class' => 'form-control', 'name' => 'telefone'));
                            echo validation_errors('<p class="alert alert-danger">', '</p>');
                            echo div_close();


                            echo div_open('col-md-6');
                            echo form_label('Status');
                            echo form_dropdown(array('class' => 'form-control', 'name' => 'status',), array('ativo' => 'Ativo', 'inativo' => 'Inativo'));
                            echo validation_errors('<p class="alert alert-danger">', '</p>');
                            echo div_close();

                            echo div_open('col-md-6');
                            echo form_label('Newsletter', 'newsletter');
                            $data = array(
                                'name' => 'newsletter',
                                'id' => 'newsletter',
                                'value' => 'accept',
                                'checked' => TRUE,
                                'style' => 'margin:10px'
                            );
                            echo form_checkbox($data);
                            echo div_close();

                            echo div_open('col-md-12 text-right');
                            echo form_button(array('class' => 'btn btn-azul', 'type' => 'submit', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar'));
                            echo div_close();

                            echo form_close();
                            ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>