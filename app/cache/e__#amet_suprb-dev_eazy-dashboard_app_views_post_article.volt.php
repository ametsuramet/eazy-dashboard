<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Judul</th>
			<th>Kategori</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($page->items as $index => $item) { ?>
		<tr>
			<td><?php echo ($page->current - 1) * $params->limit + $index + 1; ?></td>
			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->PostCategory->title; ?></td>
			<td><small><?php echo $this->tag->linkTo(array('post/edit?id=' . $item->id, 'Edit')); ?> | <?php echo $this->tag->linkTo(array('post/delete?id=' . $item->id, 'Delete', 'onclick' => 'return confirm_delete()')); ?> </small></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<ul class="pager">
<?php if ($page->before != 1) { ?>
	<li><a href="?page=<?php echo $page->before; ?>">Previous</a></li>
<?php } ?>
	<li><a href="#"><?php echo $page->current; ?> of <?php echo $page->total_pages; ?></a></li>
<?php if ($page->next != $page->total_pages) { ?>
	<li><a href="?page=<?php echo $page->next; ?>">Next</a></li>
<?php } ?>
</ul>

