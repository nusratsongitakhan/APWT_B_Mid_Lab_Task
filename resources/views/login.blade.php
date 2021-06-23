<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

<a href="{{route('registration.index')}}">Create new account</a>


	<form method="post">
	<table>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="login"></td>
		</tr>
	</table>
	</form>
@foreach  ($errors->all() as $error )

{{$error}}<br>

@endforeach

{{session('msg')}}


	
</body>
</html>