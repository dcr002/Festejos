<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Módulo Clientes
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Razón Social</th>
                                <th>R.I.F</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clientes as $cliente): ?>
                                <tr>
                                        <td><?php echo h($cliente['Cliente']['razon']); ?>&nbsp;</td>
                                        <td><?php echo h($cliente['Cliente']['rif']); ?>&nbsp;</td>
                                        <td><?php echo h($cliente['Cliente']['telf']); ?>&nbsp;</td>
                                        <td><?php echo h($cliente['Cliente']['direccion']); ?>&nbsp;</td>
                                        <td class="center">
                                                <?php //echo $this->Html->link(__('Ver '), array('action' => 'view', $cliente['Cliente']['id'])); ?>
                                                <?php echo $this->Html->link(__('Editar '), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
                                                <?php echo $this->Form->postLink(__('Eliminar '), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('¿Desea eliminar al cliente # %s?', $cliente['Cliente']['razon'])); ?>
                                        </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
</script>