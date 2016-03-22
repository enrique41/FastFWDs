<div class="users index">
	<h2><?php __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<!--<th><?php echo $this->Paginator->sort('facebookid');?></th>-->
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<!--<th><?php echo $this->Paginator->sort('password');?></th>-->
			<th><?php echo $this->Paginator->sort('email');?></th>
			<!--<th><?php echo $this->Paginator->sort('birthdate');?></th>-->
			<th><?php echo $this->Paginator->sort('newsletter_status');?></th>
			<!--<th><?php echo $this->Paginator->sort('url');?></th>-->
			<th><?php echo $this->Paginator->sort('registered');?></th>
			<!--<th><?php echo $this->Paginator->sort('activation_key');?></th>-->
			<!--<th><?php echo $this->Paginator->sort('fb_session_key');?></th>-->
			<!--<th><?php echo $this->Paginator->sort('status');?></th>-->
			<!--<th><?php echo $this->Paginator->sort('display_name');?></th>-->
			<th><?php echo $this->Paginator->sort('group_id');?></th>
			<th><?php echo $this->Paginator->sort('last_access');?></th>
			<!--<th><?php echo $this->Paginator->sort('modified');?></th>-->
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
		<!--<td><?php echo $user['User']['facebookid']; ?>&nbsp;</td>-->
		<td><?php echo $user['User']['name']; ?>&nbsp;</td>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<!--<td><?php echo $user['User']['password']; ?>&nbsp;</td>-->
		<td><?php echo $user['User']['email']; ?>&nbsp;</td>
		<!--<td><?php echo $user['User']['birthdate']; ?>&nbsp;</td>-->
		<td><?php echo $user['User']['newsletter_status']; ?>&nbsp;</td>
		<!--<td><?php echo $user['User']['url']; ?>&nbsp;</td>-->
		<td><?php echo $user['User']['registered']; ?>&nbsp;</td>
		<td><?php echo $user['User']['activation_key']; ?>&nbsp;</td>
		<!--<td><?php echo $user['User']['fb_session_key']; ?>&nbsp;</td>-->
		<td><?php echo $user['User']['status']; ?>&nbsp;</td>
		<!--<td><?php echo $user['User']['display_name']; ?>&nbsp;</td>-->
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<td><?php echo $user['User']['last_access']; ?>&nbsp;</td>
		<td><?php echo $user['User']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Groups', true)), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Group', true)), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Announcements', true)), array('controller' => 'announcements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Announcement', true)), array('controller' => 'announcements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Biographies', true)), array('controller' => 'biographies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Biography', true)), array('controller' => 'biographies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Comments', true)), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Comment', true)), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Fastfwds', true)), array('controller' => 'fastfwds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Fastfwd', true)), array('controller' => 'fastfwds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Favorites', true)), array('controller' => 'favorites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Favorite', true)), array('controller' => 'favorites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Feedbacks', true)), array('controller' => 'feedbacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Feedback', true)), array('controller' => 'feedbacks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Forwards', true)), array('controller' => 'forwards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Forward', true)), array('controller' => 'forwards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Forwards Tags', true)), array('controller' => 'forwards_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Forwards Tag', true)), array('controller' => 'forwards_tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Posts', true)), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Post', true)), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Settings', true)), array('controller' => 'settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Setting', true)), array('controller' => 'settings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tags', true)), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tag', true)), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>