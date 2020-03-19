<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <script type='text/javascript' src='./js/jquery.min.js'></script>
</head>
<body>
	<h1>Login</h1>
<form>
	Username:<br>
	<input type="text" id='uname' name="uname" ><br>
	<br>
	Password:<br>
	<input type="Password" id='pwd' name="pwd"><br>
	<br>
	<input type="button" name="Login" value="Login" onclick='javascript:psubmit()'><br>

	<a href="fg.html">Forgot Password?</a>
</form>
<script type='text/javascript'>
    function psubmit(){
            $.post('http://localhost:3000/api/clients/login',
            {
             "email": $('#uname').val(),
             "password" : $('#pwd').val()    
            }
            ).success(function(a,b,c){
                    console.log(arguments);
            });
    }

</script>
</body>
</html>