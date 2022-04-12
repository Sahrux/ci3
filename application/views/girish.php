<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<style>
	*{ padding: 0px; margin: 0px; font-family: sans-serif; } body{ background-color: #2c3e52; background-size: cover; } .login{ width: 350px; top: 50%; left: 50%; transform: translate(-50% ,-50%); position: absolute; color: #fff; } .login h1{ font-size: 40px; text-align: center; text-transform: uppercase; margin: 40px 0; } .login p{ font-size: 20px; margin: 15px 0; } .login input{ font-size: 16px; width: 100%; padding: 15px 10px; border: 0; outline: none; border-radius: 6px; } .login button{ font-size: 18px; font-weight: bold; margin: 20px 90px; padding: 10px 15px; width: 50%; border-radius: 5px; }
</style>
<body >
	<div class="login">
		<h1>DAXİL OL</h1>
			<form action="<?php echo base_url() ?>/Girish/girish" method="post">
				<p>İstifadəçi adı</p>
				<input type="text" name="fname" placeholder="istifadəçi adınızı daxil edin..." required="" >
				<p>Şifrənizi daxil edin</p>
				<input type="password" name="password" id="" placeholder="şifrənizi daxil edin... "required="">
				<button type="submit" name="login">GİRİŞ</button>
				<p style="font-size: 15px;color:red;text-align: center;"><?php echo @$errmsg ?></p>
				<span style="display: block;text-align: center;">Hesabınız yoxdur? <a id="aa" style="text-decoration:none;color: cyan; font-weight: 700;" href="<?php echo base_url()?>/Qeydiyyat/">Hesab Yarat</a></span>

        </form>
    </div>
</body>
</html>