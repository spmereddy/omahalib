<div class="memorials index">
	<h2><?php echo __('Memorials'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Mem_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Library_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Donor_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Item_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Party_Memorialized'); ?></th>
			<th><?php echo $this->Paginator->sort('Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Memorial_Inscription'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($memorials as $memorial): ?>
	<tr>
		<td><?php echo h($memorial['Memorial']['Mem_ID']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['Library_ID']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['Donor_ID']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['Item_ID']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['Party_Memorialized']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['Description']); ?>&nbsp;</td>
		<td><?php echo h($memorial['Memorial']['Memorial_Inscription']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $memorial['Memorial']['Mem_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $memorial['Memorial']['Mem_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $memorial['Memorial']['Mem_ID']), array('confirm' => __('Are you sure you want to delete # %s?', $memorial['Memorial']['Mem_ID']))); ?>
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
		<li><?php echo $this->Html->link(__('New Memorial'), array('action' => 'add')); ?></li>
	</ul>
</div>
