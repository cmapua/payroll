<div class="cashAdvances form">
<?php echo $this->Form->create('CashAdvance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cash Advance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('farm_id');
		echo $this->Form->input('bale_type');
		echo $this->Form->input('bale_amount');
		echo $this->Form->input('bale_cost');
		echo $this->Form->input('bale_date');
		echo $this->Form->input('cash_advancescol');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CashAdvance.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CashAdvance.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cash Advances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Farms'), array('controller' => 'farms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farm'), array('controller' => 'farms', 'action' => 'add')); ?> </li>
	</ul>
</div>
