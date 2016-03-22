<div class="forwards view">
<h2><?php  __('Forward');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($forward['User']['name'], array('controller' => 'users', 'action' => 'view', $forward['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date Gmt'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['date_gmt']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Origin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['origin']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Snopes Link'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['snopes_link']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Factcheck'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['factcheck']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Forwards Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['forwards_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Views'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['views']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['comment_status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified Gmt'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['modified_gmt']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['parent']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Guid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['guid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mime Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['mime_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forward['Forward']['comment_count']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Forward', true)), array('action' => 'edit', $forward['Forward']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Forward', true)), array('action' => 'delete', $forward['Forward']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $forward['Forward']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Forwards', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Forward', true)), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Fastfwds', true));?></h3>
	<?php if (!empty($forward['Fastfwd'])):?>
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
		foreach ($forward['Fastfwd'] as $fastfwd):
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
	<?php if (!empty($forward['Favorite'])):?>
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
		foreach ($forward['Favorite'] as $favorite):
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
	<?php if (!empty($forward['Feedback'])):?>
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
		foreach ($forward['Feedback'] as $feedback):
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
	<h3><?php printf(__('Related %s', true), __('Tags', true));?></h3>
	<?php if (!empty($forward['Tag'])):?>
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
		foreach ($forward['Tag'] as $tag):
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
