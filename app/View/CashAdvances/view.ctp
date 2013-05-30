<div class="cashAdvances view">
<h2><?php  echo __('Cash Advance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cashAdvance['CashAdvance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cashAdvance['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $cashAdvance['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farm'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cashAdvance['Farm']['id'], array('controller' => 'farms', 'action' => 'view', $cashAdvance['Farm']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cashAdvance['CashAdvance']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cashAdvance['CashAdvance']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bale Type'); ?></dt>
		<dd>
			<?php echo h($cashAdvance['CashAdvance']['bale_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bale Amount'); ?></dt>
		<dd>
			<?php echo h($cashAdvance['CashAdvance']['bale_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bale Cost'); ?></dt>
		<dd>
			<?php echo h($cashAdvance['CashAdvance']['bale_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bale Date'); ?></dt>
		<dd>
			<?php echo h($cashAdvance['CashAdvance']['bale_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash Advancescol'); ?></dt>
		<dd>
			<?php echo h($cashAdvance['CashAdvance']['cash_advancescol']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cash Advance'), array('action' => 'edit', $cashAdvance['CashAdvance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cash Advance'), array('action' => 'delete', $cashAdvance['CashAdvance']['id']), null, __('Are you sure you want to delete # %s?', $cashAdvance['CashAdvance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cash Advances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Advance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Farms'), array('controller' => 'farms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farm'), array('controller' => 'farms', 'action' => 'add')); ?> </li>
	</ul>
</div>
