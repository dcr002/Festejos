<div class="facturas index">
	<h2><?php echo __('Facturas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('motivo'); ?></th>
			<th><?php echo $this->Paginator->sort('lugar'); ?></th>
			<th><?php echo $this->Paginator->sort('estatus'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_iva'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($facturas as $factura): ?>
	<tr>
		<td><?php echo h($factura['Factura']['id']); ?>&nbsp;</td>
		<td><?php echo h($factura['Factura']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($factura['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $factura['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($factura['Factura']['motivo']); ?>&nbsp;</td>
		<td><?php echo h($factura['Factura']['lugar']); ?>&nbsp;</td>
		<td><?php echo h($factura['Factura']['estatus']); ?>&nbsp;</td>
		<td><?php echo h($factura['Factura']['valor_iva']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($factura['User']['id'], array('controller' => 'users', 'action' => 'view', $factura['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $factura['Factura']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $factura['Factura']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $factura['Factura']['id']), array(), __('Are you sure you want to delete # %s?', $factura['Factura']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Factura'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
