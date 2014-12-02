<?php //debug($this->Session->read('Factura')); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Módulo de Factuaración
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php echo $this->Form->create('Factura', array('role'=>'form', 'class'=>'form-factura', 'novalidate'=>'novalidate')); ?>
                    <div class="col-lg-12">
                        <div class="row">
                            
                            <div class="form-group col-lg-2">
                                <label>R.I.F</label>
                                <?php echo $this->Form->input('Cliente.rif', array('class'=>'form-control rif', 'label'=>false, 'div'=>false, 'id'=>'cliente')); ?>
                                
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="form-group col-lg-9">
                                <label>Razón Social</label>
                                <?php echo $this->Form->input('Cliente.razon', array('class'=>'form-control razon', 'label'=>false, 'div'=>false)); ?>
                            </div>
                            
                            <div class="form-group col-lg-3">
                                <label>Teléfono</label>
                                <?php echo $this->Form->input('Cliente.telf', array('class'=>'form-control telefono', 'label'=>false, 'div'=>false)); ?>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="form-group col-lg-12">
                                <label>Dirección Fiscal</label>
                                <?php echo $this->Form->input('Cliente.direccion', array('class'=>'form-control direccion', 'label'=>false, 'div'=>false)); ?>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <hr/>
                            
                            <div class="col-lg-4">
                                <div class="form-group input-group">
                                    <?php echo $this->Form->input('Factura.ItemFactura.0.codigo', array('class'=>'form-control codigo', 'label'=>false, 'div'=>false, 'id'=>'factura', 'placeholder'=>'Código')); ?>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default agregar-item" type="button"><i class="fa fa-plus"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            
                            <div class="form-group col-lg-2">
                                <label>Cantidad</label>
                                <?php echo $this->Form->input('Factura.ItemFactura.0.cantidad', array('class'=>'form-control cantidad', 'label'=>false, 'div'=>false)); ?>
                            </div>
                            
                            <div class="form-group col-lg-2">
                                <label>Precio Unitario</label>
                                <?php echo $this->Form->input('Factura.ItemFactura.0.precio', array('class'=>'form-control precio', 'label'=>false, 'div'=>false)); ?>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <hr/>
                            
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th>Precio Unit.</th>
                                            <th>Sub-Total</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-lg-2 col-lg-offset-8">
                                <button type="submit" class="btn btn-outline btn-primary btn-lg btn-block">Guardar</button>
                            </div>
                            <div class="col-lg-2">
                                <button type="reset" class="btn btn-outline btn-danger btn-lg btn-block">Cancelar</button>
                            </div>
                            
                        </div>
                        
                       
                        
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

<script type="text/javascript">
    $(document).ready(function(){
        
        var funciones = {
            fnc_cargar_tabla: function(){
                
                $.ajax({
                    type: "POST",
                    url: '<?php echo $this->Html->url(array('controller'=>'facturas', 'action'=>'read_table')); ?>',
                    data: null,
                    dataType: 'json',
                    success: function(){
                        console.log('success');
                    }
                })
                .done(function(data){
                    var table = $('#dataTables-example').DataTable();
                    
                    if(data !== null){
                        
                        table.clear().draw();
                     
                        $.each(data.Factura.ItemFactura, function(key, val){
                            table.row.add([
                                val.codigo,
                                val.descripcion,
                                val.cantidad,
                                val.precio,
                                (Number(val.precio) * Number(val.cantidad)),
                                '<button type="button" class="btn btn-danger btn-circle delete-item" data-index="'+key+'"><i class="fa fa-times"></i></button>'
                            ]).draw();
                        });
                     
                    }
                });
                
            },
            fnc_add_item: function(){
                
                $.ajax({
                    type: "POST",
                    url: '<?php echo $this->Html->url(array('controller'=>'facturas', 'action'=>'add_items')); ?>',
                    data: $('.form-factura').serializeArray(),
                    dataType: 'json',
                    success: function(){
                        console.log('success');
                    }
                })
                .done(function(data){
                    if(data !== null){
                        funciones.fnc_clear();
                        funciones.fnc_cargar_tabla();
                    }
                });
            },
            fnc_delete_item: function(index){
                
                $.ajax({
                    type: "POST",
                    url: '<?php echo $this->Html->url(array('controller'=>'facturas', 'action'=>'delete_item')); ?>',
                    data: {id: index},
                    dataType: 'json',
                    success: function(){
                        console.log('success');
                    }
                })
                .done(function(data){
                    if(data !== null){
                        console.log(data);
                        funciones.fnc_cargar_tabla();
                    }
                });
                
            },
            fnc_clear: function(){
                $('.codigo').val(null);
                $('.cantidad').val(null);
                $('.precio').val(null);
            }
        };
        
        $('#dataTables-example').dataTable();
        
        funciones.fnc_cargar_tabla();
        
        $('button.agregar-item').on("click", function(){
            funciones.fnc_add_item();
        });
        
        $('#dataTables-example tbody').on('click', 'button.delete-item', function(ev){
            funciones.fnc_delete_item($(this).data('index'));
        });
        
        
        $('#cliente').autocomplete({
            serviceUrl: '<?php echo $this->Html->url(array('controller'=>'clientes', 'action'=>'find')); ?>',
            onSelect: function (suggestion) {
                
                $('.razon').val(null);
                $('.telefono').val(null);
                $('.direccion').val(null);
                
                $('.razon').val(suggestion.data.razon);
                $('.telefono').val(suggestion.data.telf);
                $('.direccion').val(suggestion.data.direccion);
                
            }
        });
        
        $('#factura').autocomplete({
            serviceUrl: '<?php echo $this->Html->url(array('controller'=>'inventarios', 'action'=>'find')); ?>',
            onSelect: function (suggestion) {
                
                if(suggestion.data.cantidad <= 10){
                    $(function(){
                        
                        $.amaran({
                            content:{
                                title:'Stock muy bajo!',
                                message:'<strong>'+suggestion.data.codigo+'</strong> - Existencia: '+suggestion.data.cantidad,
                                info:'Cantidad en existencia, esta en su punto critico.',
                                icon:'fa fa-arrow-down'
                            },
                            theme:'awesome warning'
                        });                        
                    }); 
                }
                
                $('.precio').val(null);
                
                $('.precio').val(suggestion.data.precio);
                
            }
        });
        
    });
</script>

<style>
.autocomplete-suggestions { border: 1px solid #999; background: #CEE3F6; overflow: auto; }
.autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
.autocomplete-selected { background: #04B486; }
.autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
.autocomplete-group { padding: 2px 5px; }
.autocomplete-group strong { display: block; border-bottom: 1px solid #000; }

.product-add{ margin-top: 25px;}
</style>