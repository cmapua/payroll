<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<strong>
				Payroll System
			</strong>
			<!-- <h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1> -->
			<div id="menu">
				<?php
					$user = $this->Session->read('Auth.User');
					if(!empty($user)) {
						echo 'currently logged in as <strong>' . $user['username'] . '</strong>. ';
						echo $this->Html->link(__('Logout'), '/users/logout');

						//only show nav menu when logged in
						//temporary navigation menu
						echo '&emsp;&emsp;';
						echo '<strong>Quick Navigation:</strong>&emsp;';
						echo $this->Html->link('Users', '/users/index');
						echo ' | ';
						echo $this->Html->link('Employees', '/employees/index');
						echo ' | ';
						echo $this->Html->link('Employee Groups', '/groups/index');
						echo ' | ';
						echo $this->Html->link('Works', '/works/index');
						echo ' | ';
						echo $this->Html->link('Farms', '/farms/index');
						echo ' | ';
						echo $this->Html->link('Cash Advances', '/cash_advances/index');
						echo ' | ';
						echo $this->Html->link('Transactions', '/transactions/index');
						//echo '</fieldset>';
					} else {
						echo 'you are not logged in. ';
						echo $this->Html->link(__('Log in'), '/users/login');
					}
				?>	
			</div>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
