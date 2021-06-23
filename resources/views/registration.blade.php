<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
    <form method="post">
		

			<table border="1" >
                <tr>
					<td>Full name</td>
					<td><input type="text" name="fullname" value="{{old('fullname')}}"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
                </tr>
                <tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
                </tr>
                <tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirm_password" value="{{old('confirm_password')}}"></td>
				</tr>
                <tr>
					<td>Address</td>
					<td><input type="text" name="address" value="{{old('address')}}"></td>
				</tr>
                <tr>
					<td>Company name</td>
					<td><input type="text" name="companyN_name" value="{{old('company_name')}}"></td>
				</tr>
                <tr>
					<td>Phone number</td>
					<td><input type="text" name="phone_number" value="{{old('phone_number')}}"></td>
				</tr>
                <tr>
					<td>City</td>
					<td><input type="text" name="city" value="{{old('city')}}"></td>
                </tr>
                <tr>
					<td>Country</td>
					<td><input type="text" name="country" value="{{old('country')}}"></td>
				</tr>

                <br><br>
				<tr>
					<td><input type="submit" name="submit" value="Sign up">   
				</tr>
			</table>

	

	</form>
</body>
</html>