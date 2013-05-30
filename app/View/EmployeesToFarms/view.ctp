<div class="employeesToFarms view">
<h2><?php  echo __('Employees To Farm'); ?></h2>
	<dl>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeesToFarm['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $employeesToFarm['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farm'); ?></dt>
		<dd>
			<?php echo $this->Html->link($employeesToFarm['Farm']['id'], array('controller' => 'farms', 'action' => 'view', $employeesToFarm['Farm']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employees To Farm'), array('action' => 'edit', $employeesToFarm['EmployeesToFarm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employees To Farm'), array('action' => 'delete', $employeesToFarm['EmployeesToFarm']['id']), null, __('Are you sure you want to delete # %s?', $employeesToFarm['EmployeesToFarm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees To Farms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employees To Farm'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Farms'), array('controller' => 'farms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farm'), array('controller' => 'farms', 'action' => 'add')); ?> </li>
	</ul>
</div>
