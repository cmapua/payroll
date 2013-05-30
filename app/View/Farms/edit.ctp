<div class="farms form">
<?php echo $this->Form->create('Farm'); ?>
	<fieldset>
		<legend><?php echo __('Edit Farm'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('farm_code');
		echo $this->Form->input('farm_name');
		echo $this->Form->input('farm_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Farm.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Farm.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Farms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cash Advances'), array('controller' => 'cash_advances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Advance'), array('controller' => 'cash_advances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
