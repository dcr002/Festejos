<div class="facturas view">
<h2><?php echo __('Factura'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($factura['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $factura['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motivo'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['motivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['lugar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatus'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['estatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Iva'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['valor_iva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($factura['User']['id'], array('controller' => 'users', 'action' => 'view', $factura['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Factura'), array('action' => 'edit', $factura['Factura']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Factura'), array('action' => 'delete', $factura['Factura']['id']), array(), __('Are you sure you want to delete # %s?', $factura['Factura']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
