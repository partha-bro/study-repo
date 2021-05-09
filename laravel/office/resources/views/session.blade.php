<h1>User Login</h1>

<form action="session_2" method="post">
	@csrf
	<input type="text" name="username" placeholder="Enter your name" > <br><br>
	<input type="password" name="password" placeholder="Enter your password" > <br><br>
	<button>Login</button>
</form>
