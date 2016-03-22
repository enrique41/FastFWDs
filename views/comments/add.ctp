<div class="comments form">
<?php echo $this->Form->create('Comment');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Comment', true)); ?></legend>
	<?php
		echo $this->Form->input('post_id');
		echo $this->Form->input('author');
		echo $this->Form->input('email');
		echo $this->Form->input('author_url');
		echo $this->Form->input('author_ip');
		echo $this->Form->input('date');
		echo $this->Form->input('date_gmt');
		echo $this->Form->input('content');
		echo $this->Form->input('approved');
		echo $this->Form->input('agent');
		echo $this->Form->input('type');
		echo $this->Form->input('parent');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Comments', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Posts', true)), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Post', true)), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>