<div class="middle">
		<div class="container">
			<h1>Permissions</h1>

<?php echo $this->Form->create('ArosAcos');?>
	<table>
		<tr>
			<th>Group</th>
			<td>
				<?php //echo $this->Form->input('Permissions/group', $group_list) ?>
				<?php echo $this->Form->input('Permissions/group', 'Parent is required.') ?>
			</td>
			<td><?php echo $html->submit('Continue') ?></td>
		</tr>
	</table>
<br /><br />
<table>
    <tr>
        <!--<th>Id</th>-->
        <th>Group</th>
        <th>Object</th>
        <th>Create</th>
		<th>Read</th>
		<th>Update</th>
		<th>Delete</th>
    </tr>

   <!-- Here's where we loop through our $acos array, printing out aco info -->

    <?php foreach ($permissions as $key=>$permission): ?>
    <tr>
        <!--<td><?php //echo $permission['ArosAcos']['id']; ?></td>-->
		<?php foreach($aro as $ARO) : ?>
			<?php if($ARO['Aro']['id'] == $permission['ArosAcos']['aro_id']) echo '<td>' . $ARO['Aro']['alias'] . '</td>'; ?>
		<?php endforeach; ?>
		<?php foreach($aco as $ACO) : ?>
			<?php if($ACO['Aco']['id'] == $permission['ArosAcos']['aco_id']) echo '<td>' . $ACO['Aco']['alias'] . '</td>'; ?>
		<?php endforeach; ?>
        <td><?php echo $permission['ArosAcos']['_create']; ?></td>
		<td><?php echo $permission['ArosAcos']['_read']; ?></td>
		<td><?php echo $permission['ArosAcos']['_update']; ?></td>
		<td><?php echo $permission['ArosAcos']['_delete']; ?></td>
		<td>
			<?php echo $html->link('Edit', '/admin/permissions/edit/'.$permission['ArosAcos']['id']);?>
		</td>
    </tr>
    <?php endforeach; ?>
	<tr>
		<td><?php echo $this->Form->input('Arosacos/aro_id', $group_list) ?></td>
		<td><?php echo $this->Form->input('Arosacos/aco_id', $object_list) ?></td>
		<td><?php echo $this->Form->input('Arosacos/_create'); ?></td>
		<td><?php echo $this->Form->input('Arosacos/_read'); ?></td>
		<td><?php echo $this->Form->input('Arosacos/_update'); ?></td>
		<td><?php echo $this->Form->input('Arosacos/_delete'); ?></td>
	</tr>
	<tr>
		<td><?php echo $this->Form->end(__('Submit', true));?></td>
	</tr>
</table>
</form>


		</div>			
	</div>	
</div>

