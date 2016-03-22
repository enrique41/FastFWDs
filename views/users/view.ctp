<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Facebookid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['facebookid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birthdate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['birthdate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Newsletter Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['newsletter_status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registered'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['registered']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Activation Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['activation_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fb Session Key'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['fb_session_key']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Display Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['display_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Access'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['last_access']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('User', true)), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('User', true)), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Announcements', true));?></h3>
	<?php if (!empty($user['Announcement'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Group Id'); ?></th>
		<th><?php __('Approved By'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Expiration Date'); ?></th>
		<th><?php __('Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Announcement'] as $announcement):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $announcement['id'];?></td>
			<td><?php echo $announcement['user_id'];?></td>
			<td><?php echo $announcement['group_id'];?></td>
			<td><?php echo $announcement['approved_by'];?></td>
			<td><?php echo $announcement['title'];?></td>
			<td><?php echo $announcement['content'];?></td>
			<td><?php echo $announcement['created'];?></td>
			<td><?php echo $announcement['expiration_date'];?></td>
			<td><?php echo $announcement['status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'announcements', 'action' => 'view', $announcement['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'announcements', 'action' => 'edit', $announcement['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'announcements', 'action' => 'delete', $announcement['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $announcement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Announcement', true)), array('controller' => 'announcements', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Biographies', true));?></h3>
	<?php if (!empty($user['Biography'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Body'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Biography'] as $biography):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $biography['id'];?></td>
			<td><?php echo $biography['user_id'];?></td>
			<td><?php echo $biography['title'];?></td>
			<td><?php echo $biography['body'];?></td>
			<td><?php echo $biography['status'];?></td>
			<td><?php echo $biography['created'];?></td>
			<td><?php echo $biography['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'biographies', 'action' => 'view', $biography['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'biographies', 'action' => 'edit', $biography['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'biographies', 'action' => 'delete', $biography['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $biography['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Biography', true)), array('controller' => 'biographies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Comments', true));?></h3>
	<?php if (!empty($user['Comment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Post Id'); ?></th>
		<th><?php __('Author'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Author Url'); ?></th>
		<th><?php __('Author Ip'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Date Gmt'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Approved'); ?></th>
		<th><?php __('Agent'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Parent'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Comment'] as $comment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $comment['id'];?></td>
			<td><?php echo $comment['post_id'];?></td>
			<td><?php echo $comment['author'];?></td>
			<td><?php echo $comment['email'];?></td>
			<td><?php echo $comment['author_url'];?></td>
			<td><?php echo $comment['author_ip'];?></td>
			<td><?php echo $comment['date'];?></td>
			<td><?php echo $comment['date_gmt'];?></td>
			<td><?php echo $comment['content'];?></td>
			<td><?php echo $comment['approved'];?></td>
			<td><?php echo $comment['agent'];?></td>
			<td><?php echo $comment['type'];?></td>
			<td><?php echo $comment['parent'];?></td>
			<td><?php echo $comment['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Comment', true)), array('controller' => 'comments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Fastfwds', true));?></h3>
	<?php if (!empty($user['Fastfwd'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Forward Id'); ?></th>
		<th><?php __('Fwd Email'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Message'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Fastfwd'] as $fastfwd):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $fastfwd['id'];?></td>
			<td><?php echo $fastfwd['user_id'];?></td>
			<td><?php echo $fastfwd['forward_id'];?></td>
			<td><?php echo $fastfwd['fwd_email'];?></td>
			<td><?php echo $fastfwd['name'];?></td>
			<td><?php echo $fastfwd['message'];?></td>
			<td><?php echo $fastfwd['status'];?></td>
			<td><?php echo $fastfwd['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'fastfwds', 'action' => 'view', $fastfwd['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'fastfwds', 'action' => 'edit', $fastfwd['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'fastfwds', 'action' => 'delete', $fastfwd['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fastfwd['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Fastfwd', true)), array('controller' => 'fastfwds', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Favorites', true));?></h3>
	<?php if (!empty($user['Favorite'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Forward Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Favorite'] as $favorite):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $favorite['id'];?></td>
			<td><?php echo $favorite['user_id'];?></td>
			<td><?php echo $favorite['forward_id'];?></td>
			<td><?php echo $favorite['status'];?></td>
			<td><?php echo $favorite['created'];?></td>
			<td><?php echo $favorite['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'favorites', 'action' => 'view', $favorite['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'favorites', 'action' => 'edit', $favorite['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'favorites', 'action' => 'delete', $favorite['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $favorite['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Favorite', true)), array('controller' => 'favorites', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Feedbacks', true));?></h3>
	<?php if (!empty($user['Feedback'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Forward Id'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Subject'); ?></th>
		<th><?php __('Message'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Reviewed By'); ?></th>
		<th><?php __('Reviewer Notes'); ?></th>
		<th><?php __('Response'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Feedback'] as $feedback):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $feedback['id'];?></td>
			<td><?php echo $feedback['user_id'];?></td>
			<td><?php echo $feedback['forward_id'];?></td>
			<td><?php echo $feedback['email'];?></td>
			<td><?php echo $feedback['subject'];?></td>
			<td><?php echo $feedback['message'];?></td>
			<td><?php echo $feedback['created'];?></td>
			<td><?php echo $feedback['modified'];?></td>
			<td><?php echo $feedback['reviewed_by'];?></td>
			<td><?php echo $feedback['reviewer_notes'];?></td>
			<td><?php echo $feedback['response'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'feedbacks', 'action' => 'view', $feedback['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'feedbacks', 'action' => 'edit', $feedback['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'feedbacks', 'action' => 'delete', $feedback['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $feedback['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Feedback', true)), array('controller' => 'feedbacks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Forwards', true));?></h3>
	<?php if (!empty($user['Forward'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Date Gmt'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Origin'); ?></th>
		<th><?php __('Snopes Link'); ?></th>
		<th><?php __('Factcheck'); ?></th>
		<th><?php __('Forwards Count'); ?></th>
		<th><?php __('Views'); ?></th>
		<th><?php __('Comment Status'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified Gmt'); ?></th>
		<th><?php __('Parent'); ?></th>
		<th><?php __('Guid'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Mime Type'); ?></th>
		<th><?php __('Comment Count'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Forward'] as $forward):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $forward['id'];?></td>
			<td><?php echo $forward['user_id'];?></td>
			<td><?php echo $forward['date'];?></td>
			<td><?php echo $forward['date_gmt'];?></td>
			<td><?php echo $forward['content'];?></td>
			<td><?php echo $forward['title'];?></td>
			<td><?php echo $forward['status'];?></td>
			<td><?php echo $forward['origin'];?></td>
			<td><?php echo $forward['snopes_link'];?></td>
			<td><?php echo $forward['factcheck'];?></td>
			<td><?php echo $forward['forwards_count'];?></td>
			<td><?php echo $forward['views'];?></td>
			<td><?php echo $forward['comment_status'];?></td>
			<td><?php echo $forward['password'];?></td>
			<td><?php echo $forward['name'];?></td>
			<td><?php echo $forward['modified'];?></td>
			<td><?php echo $forward['modified_gmt'];?></td>
			<td><?php echo $forward['parent'];?></td>
			<td><?php echo $forward['guid'];?></td>
			<td><?php echo $forward['type'];?></td>
			<td><?php echo $forward['mime_type'];?></td>
			<td><?php echo $forward['comment_count'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'forwards', 'action' => 'view', $forward['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'forwards', 'action' => 'edit', $forward['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'forwards', 'action' => 'delete', $forward['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $forward['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Forward', true)), array('controller' => 'forwards', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Forwards Tags', true));?></h3>
	<?php if (!empty($user['ForwardsTag'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Forward Id'); ?></th>
		<th><?php __('Tag Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['ForwardsTag'] as $forwardsTag):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $forwardsTag['id'];?></td>
			<td><?php echo $forwardsTag['forward_id'];?></td>
			<td><?php echo $forwardsTag['tag_id'];?></td>
			<td><?php echo $forwardsTag['user_id'];?></td>
			<td><?php echo $forwardsTag['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'forwards_tags', 'action' => 'view', $forwardsTag['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'forwards_tags', 'action' => 'edit', $forwardsTag['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'forwards_tags', 'action' => 'delete', $forwardsTag['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $forwardsTag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Forwards Tag', true)), array('controller' => 'forwards_tags', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Groups', true));?></h3>
	<?php if (!empty($user['Group'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Group'] as $group):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $group['id'];?></td>
			<td><?php echo $group['user_id'];?></td>
			<td><?php echo $group['name'];?></td>
			<td><?php echo $group['description'];?></td>
			<td><?php echo $group['created'];?></td>
			<td><?php echo $group['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'groups', 'action' => 'view', $group['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'groups', 'action' => 'edit', $group['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'groups', 'action' => 'delete', $group['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $group['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Group', true)), array('controller' => 'groups', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Posts', true));?></h3>
	<?php if (!empty($user['Post'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Body'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Post'] as $post):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $post['id'];?></td>
			<td><?php echo $post['user_id'];?></td>
			<td><?php echo $post['title'];?></td>
			<td><?php echo $post['body'];?></td>
			<td><?php echo $post['created'];?></td>
			<td><?php echo $post['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'posts', 'action' => 'delete', $post['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Post', true)), array('controller' => 'posts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Settings', true));?></h3>
	<?php if (!empty($user['Setting'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Setting'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Numeric Value'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Description'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Setting'] as $setting):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $setting['id'];?></td>
			<td><?php echo $setting['user_id'];?></td>
			<td><?php echo $setting['setting'];?></td>
			<td><?php echo $setting['value'];?></td>
			<td><?php echo $setting['numeric_value'];?></td>
			<td><?php echo $setting['created'];?></td>
			<td><?php echo $setting['modified'];?></td>
			<td><?php echo $setting['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'settings', 'action' => 'view', $setting['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'settings', 'action' => 'edit', $setting['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'settings', 'action' => 'delete', $setting['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $setting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Setting', true)), array('controller' => 'settings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Tags', true));?></h3>
	<?php if (!empty($user['Tag'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Tag'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Tag'] as $tag):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tag['id'];?></td>
			<td><?php echo $tag['user_id'];?></td>
			<td><?php echo $tag['tag'];?></td>
			<td><?php echo $tag['description'];?></td>
			<td><?php echo $tag['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tags', 'action' => 'delete', $tag['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tag', true)), array('controller' => 'tags', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
