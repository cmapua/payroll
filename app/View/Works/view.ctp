<div class="works view">
<h2><?php  echo __('Work'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($work['Work']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Code'); ?></dt>
		<dd>
			<?php echo h($work['Work']['work_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Type'); ?></dt>
		<dd>
			<?php echo h($work['Work']['work_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Basic Wage'); ?></dt>
		<dd>
			<?php echo h($work['Work']['basic_wage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($work['Work']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($work['Work']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Work'), array('action' => 'edit', $work['Work']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Work'), array('action' => 'delete', $work['Work']['id']), null, __('Are you sure you want to delete # %s?', $work['Work']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Works'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($work['Employee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Employee Code'); ?></th>
		<th><?php echo __('Work Id'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Percent'); ?></th>
		<th><?php echo __('Trntype'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('MI'); ?></th>
		<th><?php echo __('Empaddr'); ?></th>
		<th><?php echo __('Farm'); ?></th>
		<th><?php echo __('Farmname'); ?></th>
		<th><?php echo __('Farm2'); ?></th>
		<th><?php echo __('Fn2'); ?></th>
		<th><?php echo __('Farm3'); ?></th>
		<th><?php echo __('Fn3'); ?></th>
		<th><?php echo __('Groupcode'); ?></th>
		<th><?php echo __('Groupname'); ?></th>
		<th><?php echo __('Rate'); ?></th>
		<th><?php echo __('Sssno'); ?></th>
		<th><?php echo __('Gross'); ?></th>
		<th><?php echo __('Deduction'); ?></th>
		<th><?php echo __('Net Pay'); ?></th>
		<th><?php echo __('Plate No'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th><?php echo __('Photo Emp'); ?></th>
		<th><?php echo __('Pict Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($work['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['employee_code']; ?></td>
			<td><?php echo $employee['work_id']; ?></td>
			<td><?php echo $employee['group_id']; ?></td>
			<td><?php echo $employee['created']; ?></td>
			<td><?php echo $employee['modified']; ?></td>
			<td><?php echo $employee['percent']; ?></td>
			<td><?php echo $employee['trntype']; ?></td>
			<td><?php echo $employee['first_name']; ?></td>
			<td><?php echo $employee['last_name']; ?></td>
			<td><?php echo $employee['MI']; ?></td>
			<td><?php echo $employee['empaddr']; ?></td>
			<td><?php echo $employee['farm']; ?></td>
			<td><?php echo $employee['farmname']; ?></td>
			<td><?php echo $employee['farm2']; ?></td>
			<td><?php echo $employee['fn2']; ?></td>
			<td><?php echo $employee['farm3']; ?></td>
			<td><?php echo $employee['fn3']; ?></td>
			<td><?php echo $employee['groupcode']; ?></td>
			<td><?php echo $employee['groupname']; ?></td>
			<td><?php echo $employee['rate']; ?></td>
			<td><?php echo $employee['sssno']; ?></td>
			<td><?php echo $employee['gross']; ?></td>
			<td><?php echo $employee['deduction']; ?></td>
			<td><?php echo $employee['net_pay']; ?></td>
			<td><?php echo $employee['plate_no']; ?></td>
			<td><?php echo $employee['remarks']; ?></td>
			<td><?php echo $employee['photo_emp']; ?></td>
			<td><?php echo $employee['pict_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, __('Are you sure you want to delete # %s?', $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($work['Transaction'])): ?>
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
		foreach ($work['Transaction'] as $transaction): ?>
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
