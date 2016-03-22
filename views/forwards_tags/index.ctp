<div class="forwardsTags index">
	<h2><?php __('Forwards Tags');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('forward_id');?></th>
			<th><?php echo $this->Paginator->sort('tag_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($forwardsTags as $forwardsTag):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $forwardsTag['ForwardsTag']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($forwardsTag['Forward']['title'], array('controller' => 'forwards', 'action' => 'view', $forwardsTag['Forward']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($forwardsTag['Tag']['id'], array('controller' => 'tags', 'action' => 'view', $forwardsTag['Tag']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($forwardsTag['User']['name'], array('controller' => 'users', 'action' => 'view', $forwardsTag['User']['id'])); ?>
		</td>
		<td><?php echo $forwardsTag['ForwardsTag']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $forwardsTag['ForwardsTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $forwardsTag['ForwardsTag']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $forwardsTag['ForwardsTag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $forwardsTag['ForwardsTag']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Forwards Tag', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Forwards', true)), array('controller' => 'forwards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Forward', true)), array('controller' => 'forwards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Tags', true)), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Tag', true)), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>