<?php echo $this->renderElement('loginMenu'); ?>
			
<div id="content">
	<!--<div class="left">
		
	</div>-->

	<div class="right">
		<?php echo $this->renderElement('rightColumn'); ?>
	</div>

	<div class="middle">
		<div class="container">
			<h1>Edit Post</h1>
<form method="post" action="<?php echo $html->url('/admin/permissions/edit')?>">
	<?php echo $html->hidden('ArosAcos/id'); ?>
	<table>
		<tr>
			<th>Groups</th>
			<th>Objects</th>
			<th>Create</th>
			<th>Read</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		<tr>
			<td><?php echo $html->selectTag('ArosAcos/aro_id', $group_list) ?></td>
			<td><?php echo $html->selectTag('ArosAcos/aco_id', $object_list) ?></td>
			<td><?php echo $myHtml->checkbox('ArosAcos/_create'); ?></td>
			<td><?php echo $myHtml->checkbox('ArosAcos/_read'); ?></td>
			<td><?php echo $myHtml->checkbox('ArosAcos/_update'); ?></td>
			<td><?php echo $myHtml->checkbox('ArosAcos/_delete'); ?></td>
		</tr>
		<tr>
			<td><?php echo $html->submit('Save') ?></td>
		</tr>
	</table>
</form>
		</div>			
	</div>	
</div>

