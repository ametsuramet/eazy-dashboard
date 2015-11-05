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
		{% for index,item in page.items %}
		<tr>
			<td>{{(page.current-1)*params.limit+index+1}}</td>
			<td>{{item.title}}</td>
			<td>{{item.PostCategory.title}}</td>
			<td><small>{{ link_to('post/edit?id='~item.id,'Edit') }} | {{ link_to('post/delete?id='~item.id,'Delete','onclick' : 'return confirm_delete()') }} </small></td>
		</tr>
		{% endfor %}
	</tbody>
</table>
<ul class="pager">
{% if page.current is not 1 %}
	<li><a href="?page={{page.before}}">Previous</a></li>
{% endif %}
	<li><a href="#">{{page.current}} of {{page.total_pages}}</a></li>
{% if page.next is not page.total_pages %}
	<li><a href="?page={{page.next}}">Next</a></li>
{% endif %}
</ul>

