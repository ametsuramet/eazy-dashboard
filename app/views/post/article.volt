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
			
		{% for index,item in data.post %}
		<tr>
			<td>{{data.params.prev*data.params.limit+index+1}}</td>
			<td>{{item.title}}</td>
			<td>{{item.PostCategory.title}}</td>
			<td><small>{{ link_to('post/edit?id='~item.id,'Edit') }} | {{ link_to('post/delete?id='~item.id,'Delete','onclick' : 'return confirm_delete()') }} </small></td>
		</tr>
		{% endfor %}
	</tbody>
</table>
<ul class="pager">
{% if data.params.prev is not "0" %}
  <li><a href="?page={{data.params.prev}}">Previous</a></li>
  {% endif %}
  <li><a href="#">{{data.params.page}} of {{data.params.all_pages}}</a></li>

{% if data.params.next is not "0" %}
  <li><a href="?page={{data.params.next}}">Next</a></li>
{% endif %}

</ul>


