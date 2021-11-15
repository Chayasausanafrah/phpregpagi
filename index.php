<?php
session_start();
if(isset($_SESSION['username'])){
      header("location:home.php");
}
      if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagaluser"){
                  echo "<SCRIPT>alert('Username dan Password tidak sesuai !');window.location='index.php'</SCRIPT>";
            }else if($_GET['pesan']=="gagalaktif"){
                  echo "<SCRIPT>alert('User tidak aktif !');window.location='index.php'</SCRIPT>";
            }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>login</title>
      <style type="text/css">
body{
     font-family: Segoe UI;
     background:  #7a58ff;
}

  .login {
    width: 400px;
    height: 330;
    background: #fff;
    margin-top:120px;
    margin-left:auto;
    margin-right: auto;
    padding:20px;
    border-radius: 4px;
  }
  input[type=text], input[type=password] {
      border: 1px solid #ddd;
	padding: 10px;
	width: 95%;
	border-radius: 2px;
	outline: none;
	margin-top: 10px;
	margin-bottom: 20px;
  }
  label, h1 {
  text-transform: uppercase;
  font-weight: bold;
  }
  h2 {
  text-align: center;
  font-size: 40px;
  color: #7a58ff;
  }

  input[type=submit]{
    font-size: 15px;
    background: #7a58ff;
    color: #fff;
    border: none;
    border-radius: 2px;
    padding: 12px 20px;
    cursor:pointer;
    margin-top: 10px;
 }

 input[type=submit]:hover{
    opacity:0.9;
 }
  </style>
</head>
<body>
      <div class="login">
      <center><h2>Login</h2></center>
            <form action="cek_login.php" method="post" onSubmit="validasi()">
            <div>
			<label>Username</label>
			<input type="text" name="username" id="username">
            </div>      
		<div>
			<label>Password</label>
			<input type="password" name="password" id="password">
            </div>
		<div>
                  <input type="submit" value="Login" class="tombol">
            </div>
            </form>     	
      </div>
</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username!= "" && password!="") {
			return true;
		}else{
			alert('Username & Password harus di isi !');
		}
	}
</script>
</html>