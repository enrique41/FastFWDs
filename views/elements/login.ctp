<div id="login">
			<table>
				<tr>
					<td><?php echo $this->Form->create(null, array('url' => '/users/login'));?></td>
					<td><?php echo $this->Form->input('email'); ?></td>
					<td><?php echo $this->Form->input('password'); ?></td>
					<td><?php echo $this->Form->end(__('Submit', true));?></td>
					<td><?php echo $html->link('Register', '/users/register'); ?></td>
					<td><?php echo $html->link('Forgot Password?', '/users/forgot_password'); ?></td>
				</tr>
			</table>
</div>