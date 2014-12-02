<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Módulo Inventario
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Descripción</th>
                                <th>Existencia</th>
                                <th>Precio</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($inventarios as $inventario): ?>
                                <tr>
                                        <td><?php echo h($inventario['Inventario']['codigo']); ?>&nbsp;</td>
                                        <td><?php echo h($inventario['Inventario']['descripcion']); ?>&nbsp;</td>
                                        <td><?php echo h($inventario['Inventario']['cantidad']); ?>&nbsp;</td>
                                        <td>Bs.&nbsp;<?php echo h($inventario['Inventario']['precio']); ?>&nbsp;</td>

                                        <td class="center">
                                                <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $inventario['Inventario']['id'])); ?>
                                                <?php echo $this->Html->link(__('Cargar'), array('action' => 'upload', $inventario['Inventario']['id'])); ?>
                                                <?php echo $this->Html->link(__('Descargar'), array('action' => 'download', $inventario['Inventario']['id'])); ?>
                                                <?php //echo $this->Html->link(__('View'), array('action' => 'view', $inventario['Inventario']['id'])); ?>
                                                <?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inventario['Inventario']['id']), array(), __('Are you sure you want to delete # %s?', $inventario['Inventario']['id'])); ?>
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