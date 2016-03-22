<div class="favorites index">
	<h2><?php __('Favorites');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('forward_id');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($favorites as $favorite):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $favorite['Favorite']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($favorite['User']['name'], array('controller' => 'users', 'action' => 'view', $favorite['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($favorite['Forward']['title'], array('controller' => 'forwards', 'action' => 'view', $favorite['Forward']['id'])); ?>
		</td>
		<td><?php echo $favorite['Favorite']['status']; ?>&nbsp;</td>
		<td><?php echo $favorite['Favorite']['created']; ?>&nbsp;</td>
		<td><?php echo $favorite['Favorite']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $favorite['Favorite']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $favorite['Favorite']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $favorite['Favorite']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $favorite['Favorite']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Favorite', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Forwards', true)), array('controller' => 'forwards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Forward', true)), array('controller' => 'forwards', 'action' => 'add')); ?> </li>
	</ul>
</div>