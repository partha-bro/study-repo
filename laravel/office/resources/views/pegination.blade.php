<h1>List of Students</h1>

<table border="5" cellspacing="0" cellpadding="10">
	<thead>
		<tr>
			<th> ID </th>
			<th> NAME </th>
			<th> AGE </th>
			<th> CITY </th>
		</tr>
	</thead>
	<tbody>
		
		@foreach ($data as $d)
			<tr>
				<td>{{ $d['id'] }}</td>
				<td>{{ $d['student_name'] }}</td>
				<td>{{ $d['age'] }}</td>
				<td>{{ $d['city'] }}</td>
			</tr>
		@endforeach
	</tbody>
</table>

<div>
	{{ $data->links() }}
</div>

<style type="text/css">
	.w-5{
		display: none;
	}
</style>