<div class="tags view">
<h2><?php  __('Tag');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tag['Tag']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($tag['User']['name'], array('controller' => 'users', 'action' => 'view', $tag['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tag'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tag['Tag']['tag']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tag['Tag']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tag['Tag']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Tag', true)), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Tag', true)), array('action' => 'delete', $tag['Tag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tags', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tag', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Forwards', true)), array('controller' => 'forwards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Forward', true)), array('controller' => 'forwards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Forwards', true));?></h3>
	<?php if (!empty($tag['Forward'])):?>
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
		foreach ($tag['Forward'] as $forward):
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
