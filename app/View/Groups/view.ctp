<div class="groups view">
<h2><?php  echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Code'); ?></dt>
		<dd>
			<?php echo h($group['Group']['group_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Name'); ?></dt>
		<dd>
			<?php echo h($group['Group']['group_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($group['Group']['contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($group['Group']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Contractor'); ?></dt>
		<dd>
			<?php echo h($group['Group']['group_contractor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($group['Group']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($group['Group']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Employees'); ?></h3>
	<?php if (!empty($group['Employee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Employee Code'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Percent'); ?></th>
		<th><?php echo __('Trntype'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('MI'); ?></th>
		<th><?php echo __('Empaddr'); ?></th>
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
		foreach ($group['Employee'] as $employee): ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['employee_code']; ?></td>
			<td><?php echo $employee['group_id']; ?></td>
			<td><?php echo $employee['created']; ?></td>
			<td><?php echo $employee['modified']; ?></td>
			<td><?php echo $employee['percent']; ?></td>
			<td><?php echo $employee['trntype']; ?></td>
			<td><?php echo $employee['first_name']; ?></td>
			<td><?php echo $employee['last_name']; ?></td>
			<td><?php echo $employee['MI']; ?></td>
			<td><?php echo $employee['empaddr']; ?></td>
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
