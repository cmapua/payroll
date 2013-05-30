<div class="employees index">
	<h2><?php echo __('Employees'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_code'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('percent'); ?></th>
			<th><?php echo $this->Paginator->sort('trntype'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('MI'); ?></th>
			<th><?php echo $this->Paginator->sort('empaddr'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			<th><?php echo $this->Paginator->sort('sssno'); ?></th>
			<th><?php echo $this->Paginator->sort('gross'); ?></th>
			<th><?php echo $this->Paginator->sort('deduction'); ?></th>
			<th><?php echo $this->Paginator->sort('net_pay'); ?></th>
			<th><?php echo $this->Paginator->sort('plate_no'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('photo_emp'); ?></th>
			<th><?php echo $this->Paginator->sort('pict_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($employees as $employee): ?>
	<tr>
		<td><?php echo h($employee['Employee']['id']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['employee_code']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['group_id']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['created']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['modified']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['percent']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['trntype']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['MI']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['empaddr']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['rate']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['sssno']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['gross']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['deduction']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['net_pay']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['plate_no']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['photo_emp']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['pict_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employee['Employee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?></li>
	</ul>
</div>
