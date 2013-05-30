<div class="transactions view">
<h2><?php  echo __('Transaction'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $transaction['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farm'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['Farm']['id'], array('controller' => 'farms', 'action' => 'view', $transaction['Farm']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['Work']['id'], array('controller' => 'works', 'action' => 'view', $transaction['Work']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Income'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['income']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsDaily'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['isDaily']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transaction'), array('action' => 'edit', $transaction['Transaction']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transaction'), array('action' => 'delete', $transaction['Transaction']['id']), null, __('Are you sure you want to delete # %s?', $transaction['Transaction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Farms'), array('controller' => 'farms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farm'), array('controller' => 'farms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Works'), array('controller' => 'works', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work'), array('controller' => 'works', 'action' => 'add')); ?> </li>
	</ul>
</div>
