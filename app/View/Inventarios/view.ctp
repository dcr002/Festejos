<div class="inventarios view">
<h2><?php echo __('Inventario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inventario['Inventario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($inventario['Inventario']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($inventario['Inventario']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($inventario['Inventario']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($inventario['Inventario']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($inventario['Inventario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($inventario['Inventario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inventario'), array('action' => 'edit', $inventario['Inventario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inventario'), array('action' => 'delete', $inventario['Inventario']['id']), array(), __('Are you sure you want to delete # %s?', $inventario['Inventario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Facturas'), array('controller' => 'item_facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Factura'), array('controller' => 'item_facturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Presupuestos'), array('controller' => 'item_presupuestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Presupuesto'), array('controller' => 'item_presupuestos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Item Facturas'); ?></h3>
	<?php if (!empty($inventario['ItemFactura'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Inventario Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Subtotal'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inventario['ItemFactura'] as $itemFactura): ?>
		<tr>
			<td><?php echo $itemFactura['id']; ?></td>
			<td><?php echo $itemFactura['inventario_id']; ?></td>
			<td><?php echo $itemFactura['cantidad']; ?></td>
			<td><?php echo $itemFactura['precio']; ?></td>
			<td><?php echo $itemFactura['subtotal']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'item_facturas', 'action' => 'view', $itemFactura['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'item_facturas', 'action' => 'edit', $itemFactura['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'item_facturas', 'action' => 'delete', $itemFactura['id']), array(), __('Are you sure you want to delete # %s?', $itemFactura['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item Factura'), array('controller' => 'item_facturas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Item Presupuestos'); ?></h3>
	<?php if (!empty($inventario['ItemPresupuesto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Inventario Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Subtotal'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inventario['ItemPresupuesto'] as $itemPresupuesto): ?>
		<tr>
			<td><?php echo $itemPresupuesto['id']; ?></td>
			<td><?php echo $itemPresupuesto['inventario_id']; ?></td>
			<td><?php echo $itemPresupuesto['cantidad']; ?></td>
			<td><?php echo $itemPresupuesto['precio']; ?></td>
			<td><?php echo $itemPresupuesto['subtotal']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'item_presupuestos', 'action' => 'view', $itemPresupuesto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'item_presupuestos', 'action' => 'edit', $itemPresupuesto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'item_presupuestos', 'action' => 'delete', $itemPresupuesto['id']), array(), __('Are you sure you want to delete # %s?', $itemPresupuesto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item Presupuesto'), array('controller' => 'item_presupuestos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
