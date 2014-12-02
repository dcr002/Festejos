<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Razon'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['razon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telf'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['telf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('controller' => 'facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Facturas'); ?></h3>
	<?php if (!empty($cliente['Factura'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Motivo'); ?></th>
		<th><?php echo __('Lugar'); ?></th>
		<th><?php echo __('Estatus'); ?></th>
		<th><?php echo __('Valor Iva'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Factura'] as $factura): ?>
		<tr>
			<td><?php echo $factura['id']; ?></td>
			<td><?php echo $factura['created']; ?></td>
			<td><?php echo $factura['cliente_id']; ?></td>
			<td><?php echo $factura['motivo']; ?></td>
			<td><?php echo $factura['lugar']; ?></td>
			<td><?php echo $factura['estatus']; ?></td>
			<td><?php echo $factura['valor_iva']; ?></td>
			<td><?php echo $factura['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'facturas', 'action' => 'view', $factura['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'facturas', 'action' => 'edit', $factura['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'facturas', 'action' => 'delete', $factura['id']), array(), __('Are you sure you want to delete # %s?', $factura['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Presupuestos'); ?></h3>
	<?php if (!empty($cliente['Presupuesto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Vence'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Lugar'); ?></th>
		<th><?php echo __('Valor Iva'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Presupuesto'] as $presupuesto): ?>
		<tr>
			<td><?php echo $presupuesto['id']; ?></td>
			<td><?php echo $presupuesto['created']; ?></td>
			<td><?php echo $presupuesto['vence']; ?></td>
			<td><?php echo $presupuesto['cliente_id']; ?></td>
			<td><?php echo $presupuesto['lugar']; ?></td>
			<td><?php echo $presupuesto['valor_iva']; ?></td>
			<td><?php echo $presupuesto['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'presupuestos', 'action' => 'view', $presupuesto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'presupuestos', 'action' => 'edit', $presupuesto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'presupuestos', 'action' => 'delete', $presupuesto['id']), array(), __('Are you sure you want to delete # %s?', $presupuesto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
