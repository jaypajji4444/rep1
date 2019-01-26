<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Login</title>
<style>
body{
    background-image:url(purple.jpg);
    background-size:cover;
    background-position:center;
}
.box{
    border:2px solid black; width:400px; position:relative; padding:10px 20px; background-color:none;
}

label{
    font-weight:bold;   font-size:20px;
}

.heading{
    font-weight:bold;
    font-size:30px;
    padding:10px;
}
</style>
</head>
<body>
<div  align="center" style="padding-top:120px">
    <div class="box" align="left">
        <div class="heading">Login</div><hr>
<form method="post">
<b><label>UserName::</b></label><br><input type="text" name="user" placeholder="Enter your name..." ><br>
<b><label>Password ::</b></label><br><input type="password" name="pass"placeholder="Enter your password..."><br>
<br>
<label><input type="checkbox" >Remember me</label>
<br><br>
<button type="submit" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-log-in"></span> Log in
        </button> OR
<a href="registercode.php">NewUser?</a> OR
<a href="demo.php">BackHome</a>
<br>

</form>
</div></div>
</body>
</html>