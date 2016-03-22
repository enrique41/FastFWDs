<div class="announcements index">
	<h2><?php __('Announcements');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('group_id');?></th>
			<th><?php echo $this->Paginator->sort('approved_by');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('expiration_date');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($announcements as $announcement):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $announcement['Announcement']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($announcement['User']['name'], array('controller' => 'users', 'action' => 'view', $announcement['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($announcement['Group']['name'], array('controller' => 'groups', 'action' => 'view', $announcement['Group']['id'])); ?>
		</td>
		<td><?php echo $announcement['Announcement']['approved_by']; ?>&nbsp;</td>
		<td><?php echo $announcement['Announcement']['title']; ?>&nbsp;</td>
		<td><?php echo $announcement['Announcement']['content']; ?>&nbsp;</td>
		<td><?php echo $announcement['Announcement']['created']; ?>&nbsp;</td>
		<td><?php echo $announcement['Announcement']['expiration_date']; ?>&nbsp;</td>
		<td><?php echo $announcement['Announcement']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $announcement['Announcement']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $announcement['Announcement']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $announcement['Announcement']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $announcement['Announcement']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Announcement', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Groups', true)), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Group', true)), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>