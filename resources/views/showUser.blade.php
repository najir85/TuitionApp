<!DOCTYPE html>
<html>
<head>
	<title>userinformation</title>
</head>
<body>
	<h1>UserInformation</h1>
	@foreach($userinfos as $user)
	<li>name:  <?php echo $user->name ?>  </li><br>
	<li>contact:  <?php echo $user->contact?>  </li><br>
	<li>institute:  <?php echo $user->institute ?>  </li><br>
	<hr>

	@endforeach

</body>
</html>
