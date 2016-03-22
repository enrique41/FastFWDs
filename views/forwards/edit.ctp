<div class="forwards form">
<?php echo $this->Form->create('Forward');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Forward', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('date');
		echo $this->Form->input('date_gmt');
		echo $this->Form->input('content');
		echo $this->Form->input('title');
		echo $this->Form->input('status');
		echo $this->Form->input('origin');
		echo $this->Form->input('snopes_link');
		echo $this->Form->input('factcheck');
		echo $this->Form->input('forwards_count');
		echo $this->Form->input('views');
		echo $this->Form->input('comment_status');
		echo $this->Form->input('password');
		echo $this->Form->input('name');
		echo $this->Form->input('modified_gmt');
		echo $this->Form->input('parent');
		echo $this->Form->input('guid');
		echo $this->Form->input('type');
		echo $this->Form->input('mime_type');
		echo $this->Form->input('comment_count');
		echo $this->Form->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Forward.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Forward.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Forwards', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Fastfwds', true)), array('controller' => 'fastfwds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Fastfwd', true)), array('controller' => 'fastfwds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Favorites', true)), array('controller' => 'favorites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Favorite', true)), array('controller' => 'favorites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Feedbacks', true)), array('controller' => 'feedbacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Feedback', true)), array('controller' => 'feedbacks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tags', true)), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tag', true)), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>