<div class="forwards index">
	<h2><?php __('Forwards');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('date_gmt');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('origin');?></th>
			<th><?php echo $this->Paginator->sort('snopes_link');?></th>
			<th><?php echo $this->Paginator->sort('factcheck');?></th>
			<th><?php echo $this->Paginator->sort('forwards_count');?></th>
			<th><?php echo $this->Paginator->sort('views');?></th>
			<th><?php echo $this->Paginator->sort('comment_status');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_gmt');?></th>
			<th><?php echo $this->Paginator->sort('parent');?></th>
			<th><?php echo $this->Paginator->sort('guid');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('mime_type');?></th>
			<th><?php echo $this->Paginator->sort('comment_count');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($forwards as $forward):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $forward['Forward']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($forward['User']['name'], array('controller' => 'users', 'action' => 'view', $forward['User']['id'])); ?>
		</td>
		<td><?php echo $forward['Forward']['date']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['date_gmt']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['content']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['title']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['status']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['origin']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['snopes_link']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['factcheck']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['forwards_count']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['views']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['comment_status']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['password']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['name']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['modified']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['modified_gmt']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['parent']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['guid']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['type']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['mime_type']; ?>&nbsp;</td>
		<td><?php echo $forward['Forward']['comment_count']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $forward['Forward']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $forward['Forward']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $forward['Forward']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $forward['Forward']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Forward', true)), array('action' => 'add')); ?></li>
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
