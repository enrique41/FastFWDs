<?php echo $this->renderElement('loginMenu'); ?>
			
<div id="content">
	<!--<div class="left">
		
	</div>-->

	<div class="right">
		<?php echo $this->renderElement('rightColumn'); ?>
	</div>

	<div class="middle">
		<div class="container">
			<h1>Add aco Group</h1>


<form method="post" action="<?php echo $html->url('/admin/permissions/add')?>">
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
			<td><?php echo $html->selectTag('Arosacos/aro_id', $group_list) ?></td>
			<td><?php echo $html->selectTag('Arosacos/aco_id', $object_list) ?></td>
			<td><?php echo $myHtml->checkbox('Arosacos/_create'); ?></td>
			<td><?php echo $myHtml->checkbox('Arosacos/_read'); ?></td>
			<td><?php echo $myHtml->checkbox('Arosacos/_update'); ?></td>
			<td><?php echo $myHtml->checkbox('Arosacos/_delete'); ?></td>
		</tr>
		<tr>
			<td><?php echo $html->submit('Save') ?></td>
		</tr>
	</table>
</form>
		</div>			
	</div>	
</div>

