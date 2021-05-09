<h1> Upload File </h1>
<form action='upload' method="post" enctype="multipart/form-data">
	@csrf
	<input type="file" name="file" ><br><br>
	<button>Upload file</button>
</form>