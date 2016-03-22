<div class="announcements form">
<?php echo $this->Form->create('Announcement');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Announcement', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('group_id');
		echo $this->Form->input('approved_by');
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('expiration_date');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Announcement.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Announcement.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Announcements', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Groups', true)), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Group', true)), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>