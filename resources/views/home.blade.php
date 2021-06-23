<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

 <h1>Welcome home {{ session('user_name') }} </h1>
    
 <button><a href="{{route('logout.index')}}">Log out</a></button>

</body>
</html>