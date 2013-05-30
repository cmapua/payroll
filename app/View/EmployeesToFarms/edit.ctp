<div class="employeesToFarms form">
<?php echo $this->Form->create('EmployeesToFarm'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employees To Farm'); ?></legend>
	<?php
		echo $this->Form->input('employee_id');
		echo $this->Form->input('farm_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmployeesToFarm.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EmployeesToFarm.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employees To Farms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Farms'), array('controller' => 'farms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farm'), array('controller' => 'farms', 'action' => 'add')); ?> </li>
	</ul>
</div>
