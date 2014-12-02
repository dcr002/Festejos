<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Módulo Inventario
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php echo $this->Form->create('Inventario', array('role'=>'form')); ?>
                    <div class="col-lg-6">
                        
                            <div class="form-group">
                                <label>Código</label>
                                <?php echo $this->Form->input('id')?>
                                <?php echo $this->Form->input('codigo', array('class'=>'form-control', 'label'=>false, 'div'=>false, 'readonly'=>'readonly')); ?>
                            </div>
                        
                            <div class="form-group">
                                <label>Descripción</label>
                                <?php echo $this->Form->input('descripcion', array('class'=>'form-control', 'label'=>false, 'div'=>false,  'readonly'=>'readonly')); ?>
                                <p class="help-block">.<p/>
                            </div>
                        
                        <button type="submit" class="btn btn-outline btn-primary btn-lg btn-block">Guardar</button>

                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <div class="col-lg-6">
                        
                        <div class="form-group">
                            <label>Cantidad</label>
                            <?php echo $this->Form->input('cantidad', array('class'=>'form-control', 'label'=>false, 'div'=>false,  'readonly'=>'readonly')); ?>
                        </div>

                        <div class="form-group">
                            <label>Aumentar</label>
                            <?php echo $this->Form->input('aumento', array('type'=>'number','class'=>'form-control', 'label'=>false, 'div'=>false)); ?>
                            <p class="help-block">Solo enteros positivos<p/>
                        </div>
                        
                        
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
