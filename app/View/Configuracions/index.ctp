<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Módulo Configuraciones
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Variable</th>
                                <th>Tipo Dato</th>
                                <th>Valor</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($configuracions as $configuracion): ?>
                                <tr>
                                        <td><?php echo h($configuracion['Configuracion']['variable']); ?>&nbsp;</td>
                                        <td><?php echo h($configuracion['Configuracion']['tipo']); ?>&nbsp;</td>
                                        <td><?php echo h($configuracion['Configuracion']['valor']); ?>&nbsp;</td>
                                        <td class="center">
                                                <?php //echo $this->Html->link(__('View'), array('action' => 'view', $configuracion['Configuracion']['id'])); ?>
                                                <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $configuracion['Configuracion']['id'])); ?>
                                                <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $configuracion['Configuracion']['id']), array(), __('¿Desea eliminar la Variable # %s?', $configuracion['Configuracion']['variable'])); ?>
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
