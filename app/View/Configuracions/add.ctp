<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Módulo Configuraciones
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php echo $this->Form->create('Configuracion', array('role'=>'form')); ?>
                    <div class="col-lg-6">
                        
                        <div class="form-group">
                            <label>Variable</label>
                            <?php echo $this->Form->input('variable', array('class'=>'form-control', 'label'=>false, 'div'=>false)); ?>
                        </div>

                        <div class="form-group">
                            <label>Tipo Valor</label>
                            <?php echo $this->Form->input(
                                    'tipo', 
                                    array(
                                        'type'=>'select',
                                        'class'=>'form-control', 
                                        'label'=>false, 
                                        'div'=>false,
                                        'options'=>array(
                                            'integer'=>'Integer',
                                            'varchar'=>'Varchar',
                                            'boolean'=>'Boolean',
                                            'decimal'=>'Decimal'
                                        )
                                    )
                            ); ?>
                        </div>
                        
                        <div class="form-group">
                                <label>Valor</label>
                                <?php echo $this->Form->input('valor', array('class'=>'form-control', 'label'=>false, 'div'=>false)); ?>
                        </div>
                        
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">
                        
                        <div class="form-group">
                                <label>Información</label>
                                <p class="help-block">
                                    Las variables de configuración, 
                                    nos permite realizar ajustes rapidos a los parametros del sistema.
                                </p>
                        </div>
                        
                        <br/>
                        
                        <button type="submit" class="btn btn-outline btn-primary btn-lg btn-block">Guardar</button>
                        <button type="reset" class="btn btn-outline btn-danger btn-lg btn-block">Cancelar</button>
                        
                        
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <?php echo $this->Form->end(); ?>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>