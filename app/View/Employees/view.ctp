<div class="employees view">
<h2><?php  echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee Code'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['employee_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['work_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Id'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['group_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Percent'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['percent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trntype'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['trntype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MI'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['MI']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empaddr'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['empaddr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farm'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['farm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farmname'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['farmname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farm2'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['farm2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fn2'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['fn2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farm3'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['farm3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fn3'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['fn3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groupcode'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['groupcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groupname'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['groupname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sssno'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['sssno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gross'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['gross']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deduction'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['deduction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Net Pay'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['net_pay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plate No'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['plate_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Emp'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['photo_emp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pict Name'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['pict_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['id']), null, __('Are you sure you want to delete # %s?', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
	</ul>
</div>
