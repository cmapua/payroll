<div class="employees form">
<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend><?php echo __('Add Employee'); ?></legend>
	<?php
		/*
		echo $this->Form->input('employee_code');
		echo $this->Form->input('group_id');
		echo $this->Form->input('percent');
		echo $this->Form->input('trntype');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('MI');
		echo $this->Form->input('empaddr');
		echo $this->Form->input('rate');
		echo $this->Form->input('sssno');
		echo $this->Form->input('gross');
		echo $this->Form->input('deduction');
		echo $this->Form->input('net_pay');
		echo $this->Form->input('plate_no');
		echo $this->Form->input('remarks');
		echo $this->Form->input('photo_emp');
		echo $this->Form->input('pict_name');
		*/
		echo $this->Form->inputs();
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
	</ul>
</div>
