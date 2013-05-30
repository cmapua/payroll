<div class="farms index">
	<h2><?php echo __('Farms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('farm_code'); ?></th>
			<th><?php echo $this->Paginator->sort('farm_name'); ?></th>
			<th><?php echo $this->Paginator->sort('farm_type'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($farms as $farm): ?>
	<tr>
		<td><?php echo h($farm['Farm']['id']); ?>&nbsp;</td>
		<td><?php echo h($farm['Farm']['farm_code']); ?>&nbsp;</td>
		<td><?php echo h($farm['Farm']['farm_name']); ?>&nbsp;</td>
		<td><?php echo h($farm['Farm']['farm_type']); ?>&nbsp;</td>
		<td><?php echo h($farm['Farm']['created']); ?>&nbsp;</td>
		<td><?php echo h($farm['Farm']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $farm['Farm']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $farm['Farm']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $farm['Farm']['id']), null, __('Are you sure you want to delete # %s?', $farm['Farm']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Farm'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cash Advances'), array('controller' => 'cash_advances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Advance'), array('controller' => 'cash_advances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
