<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Multi User Level Dengan PHP dan MySQLi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password Anda Salah!";
        }else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		<head>
	<body>
      <meta charset="utf-8">
      <title>Login Remember Me</title>
   </head>
   <body>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">

			<div class="form-label-group">
				<select class="form-control" name="level">
					<option value="Admin">Admin</option>
					<option value="Pegawai">Pegawai</option>
					<option value="Pengurus">Pengurus</option>
				</select>
			</div>

			<p><label for="remember"><input type="checkbox" name="remember" value="true"/> Remember Me</label></p>

			<label class="checkbox">
                  <span class="pull-right">
                      <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
  
                  </span>
              </label>
			  
			  <p><input type="text" class="form-control1" name="vercode" placeholder="Verification Code" maxlength="5" autocomplete="off" required style="width: 225px; height: 26px;" />&nbsp;
			  <img src="captcha.php"></p>
			

			<p><input type="submit" class="tombol_login" value="LOGIN"></p>
 
			<br/>
			<br/>
			
		
	</div>
 
 
</body>
</html>