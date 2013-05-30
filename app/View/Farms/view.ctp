<div class="farms view">
<h2><?php  echo __('Farm'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($farm['Farm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farm Code'); ?></dt>
		<dd>
			<?php echo h($farm['Farm']['farm_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farm Name'); ?></dt>
		<dd>
			<?php echo h($farm['Farm']['farm_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farm Type'); ?></dt>
		<dd>
			<?php echo h($farm['Farm']['farm_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($farm['Farm']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($farm['Farm']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Farm'), array('action' => 'edit', $farm['Farm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Farm'), array('action' => 'delete', $farm['Farm']['id']), null, __('Are you sure you want to delete # %s?', $farm['Farm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Farms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Farm'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cash Advances'), array('controller' => 'cash_advances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Advance'), array('controller' => 'cash_advances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cash Advances'); ?></h3>
	<?php if (!empty($farm['CashAdvance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Farm Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Bale Type'); ?></th>
		<th><?php echo __('Bale Amount'); ?></th>
		<th><?php echo __('Bale Cost'); ?></th>
		<th><?php echo __('Bale Date'); ?></th>
		<th><?php echo __('Cash Advancescol'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($farm['CashAdvance'] as $cashAdvance): ?>
		<tr>
			<td><?php echo $cashAdvance['id']; ?></td>
			<td><?php echo $cashAdvance['employee_id']; ?></td>
			<td><?php echo $cashAdvance['farm_id']; ?></td>
			<td><?php echo $cashAdvance['created']; ?></td>
			<td><?php echo $cashAdvance['modified']; ?></td>
			<td><?php echo $cashAdvance['bale_type']; ?></td>
			<td><?php echo $cashAdvance['bale_amount']; ?></td>
			<td><?php echo $cashAdvance['bale_cost']; ?></td>
			<td><?php echo $cashAdvance['bale_date']; ?></td>
			<td><?php echo $cashAdvance['cash_advancescol']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cash_advances', 'action' => 'view', $cashAdvance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cash_advances', 'action' => 'edit', $cashAdvance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cash_advances', 'action' => 'delete', $cashAdvance['id']), null, __('Are you sure you want to delete # %s?', $cashAdvance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cash Advance'), array('controller' => 'cash_advances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($farm['Transaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Farm Id'); ?></th>
		<th><?php echo __('Work Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Income'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('IsDaily'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($farm['Transaction'] as $transaction): ?>
		<tr>
			<td><?php echo $transaction['id']; ?></td>
			<td><?php echo $transaction['employee_id']; ?></td>
			<td><?php echo $transaction['farm_id']; ?></td>
			<td><?php echo $transaction['work_id']; ?></td>
			<td><?php echo $transaction['created']; ?></td>
			<td><?php echo $transaction['modified']; ?></td>
			<td><?php echo $transaction['income']; ?></td>
			<td><?php echo $transaction['area']; ?></td>
			<td><?php echo $transaction['isDaily']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transactions', 'action' => 'view', $transaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transactions', 'action' => 'edit', $transaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transactions', 'action' => 'delete', $transaction['id']), null, __('Are you sure you want to delete # %s?', $transaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
