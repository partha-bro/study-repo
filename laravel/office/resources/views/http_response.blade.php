<h1>User Login</h1>

<form action="submit" method="get">
	@csrf

	<input type="text" name="username" placeholder="Enter your name" > <br><br>
	<input type="password" name="password" placeholder="Enter your password" > <br><br>
	<button>Login</button>
</form>

<br>
<h1>post</h1>
<br/>

<form action="submit" method="post">
	@csrf
	<input type="text" name="username" placeholder="Enter your name" > <br><br>
	<input type="password" name="password" placeholder="Enter your password" > <br><br>
	<button>Login</button>
</form>

<br>
<h1>put</h1>
<br/>

<form action="submit" method="post">
	@csrf
	{{method_field('PUT')}}
	<input type="text" name="username" placeholder="Enter your name" > <br><br>
	<input type="password" name="password" placeholder="Enter your password" > <br><br>
	<button>Login</button>
</form>

<br>
<h1>delete</h1>
<br/>

<form action="submit" method="post">
	@csrf
	{{method_field('DELETE')}}
	<input type="text" name="username" placeholder="Enter your name" > <br><br>
	<input type="password" name="password" placeholder="Enter your password" > <br><br>
	<button>Login</button>
</form>