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
			
		<?php foreach ($data->post as $index => $item) { ?>
		<tr>
			<td><?php echo $data->params->prev * $data->params->limit + $index + 1; ?></td>
			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->PostCategory->title; ?></td>
			<td><small><?php echo $this->tag->linkTo(array('post/edit?id=' . $item->id, 'Edit')); ?> | <?php echo $this->tag->linkTo(array('post/delete?id=' . $item->id, 'Delete', 'onclick' => 'return confirm_delete()')); ?> </small></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<ul class="pager">
<?php if ($data->params->prev != '0') { ?>
  <li><a href="?page=<?php echo $data->params->prev; ?>">Previous</a></li>
  <?php } ?>
  <li><a href="#"><?php echo $data->params->page; ?> of <?php echo $data->params->all_pages; ?></a></li>

<?php if ($data->params->next != '0') { ?>
  <li><a href="?page=<?php echo $data->params->next; ?>">Next</a></li>
<?php } ?>

</ul>


