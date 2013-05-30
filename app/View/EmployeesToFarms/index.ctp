<div class="employeesToFarms index">
	<h2><?php echo __('Employees To Farms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('employee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('farm_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employeesToFarms as $employeesToFarm): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($employeesToFarm['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeesToFarm['Employee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($employeesToFarm['Farm']['id'], array('controller' => 'farms', 'action' => 'view', $employeesToFarm['Farm']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employeesToFarm['EmployeesToFarm']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employeesToFarm['EmployeesToFarm']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employeesToFarm['EmployeesToFarm']['id']), null, __('Are you sure you want to delete # %s?', $employeesToFarm['EmployeesToFarm']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employees To Farm'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Farms'), array('controller' => 'farms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farm'), array('controller' => 'farms', 'action' => 'add')); ?> </li>
	</ul>
</div>
