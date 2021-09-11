<h1>Students list</h1>

<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>City</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>

		@foreach($data as $item)
			<tr>
				<td>{{$item['id']}}</td>
				<td>{{$item['student_name']}}</td>
				<td>{{$item['age']}}</td>
				<td>{{$item['city']}}</td>
				<td><a href="{{'edit/'.$item['id']}}">Edit</a></td>
				<td><a href="{{'delete/'.$item['id']}}">Delete</a></td>
			</tr>
		@endforeach
	</table>