<div class="libraries index">
	<h2><?php echo __('Libraries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Library_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Library_Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Library_Address'); ?></th>
			<th><?php echo $this->Paginator->sort('Library_City'); ?></th>
			<th><?php echo $this->Paginator->sort('Library_State'); ?></th>
			<th><?php echo $this->Paginator->sort('Library_Zip'); ?></th>
			<th><?php echo $this->Paginator->sort('Librarian'); ?></th>
			<th><?php echo $this->Paginator->sort('Librarian_Email'); ?></th>
			<th><?php echo $this->Paginator->sort('Work_Phone'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($libraries as $library): ?>
	<tr>
		<td><?php echo h($library['Library']['Library_ID']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['Library_Name']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['Library_Address']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['Library_City']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['Library_State']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['Library_Zip']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['Librarian']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['Librarian_Email']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['Work_Phone']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $library['Library']['Library_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $library['Library']['Library_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $library['Library']['Library_ID']), array('confirm' => __('Are you sure you want to delete # %s?', $library['Library']['Library_ID']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	<li class="active"><a href="users">Home</a></li>
	</ul>
	<ul>
	<li><?php echo $this->Html->link( "Logout", array('action'=>'logout') ); ?></li>
	
	<ul>
		<li><?php echo $this->Html->link(__('New Library'), array('action' => 'add')); ?></li>
	</ul>
</div>
