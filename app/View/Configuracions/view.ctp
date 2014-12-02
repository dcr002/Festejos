<div class="configuracions view">
<h2><?php echo __('Configuracion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($configuracion['Configuracion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variable'); ?></dt>
		<dd>
			<?php echo h($configuracion['Configuracion']['variable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($configuracion['Configuracion']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($configuracion['Configuracion']['valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Configuracion'), array('action' => 'edit', $configuracion['Configuracion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Configuracion'), array('action' => 'delete', $configuracion['Configuracion']['id']), array(), __('Are you sure you want to delete # %s?', $configuracion['Configuracion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Configuracions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Configuracion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
