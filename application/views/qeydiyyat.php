<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
    <title>QEYDIYYAT</title>
</head>
<style>*{line-height: 22px;color:#fff;}body{ padding: 0px;margin: 0px; background:#2C3E52;font-family:Arial, Helvetica, sans-serif;}.dropdown{ margin: 0 auto;}nav{height: 60px;    background: #2C3E52;box-shadow: 0px 10px 15px rgb(0,0,0.1);color: #fff;}nav ul{    padding:0; margin: 0; float: right;margin-right: 30px; } nav ul li{ background: #2c3e50; position: relative; list-style: none; display: inline-block; } nav ul li a{ display: block; padding: 0 12px; color: white; text-decoration: none; line-height: 60px; font-size: 20px; } nav ul li a:hover{ background:#243342; } nav ul ul{ position: absolute; top: 55px; display: none; } nav ul li:hover> ul{ display: block; } nav ul ul li{ width: 150px; float: none; display: list-item; position: relative; } .qeyddiyyat{ position: absolute; top:50%; left: 50%; transform: translate(-50%, -50%); width: 350px; margin-top: 150px; } .qeyddiyyat h1{ text-align: center; font-size: 35px; text-transform:uppercase; margin: 50px 0px; } .qeyddiyyat p{ font-size: 20px; margin: 15px 0px; } .inp{ font-size: 15px; padding: 10px 7px; width: 100%; border: 0px; border-radius: 5px; outline: none; } .qeyddiyyat button{ color: black; font-size: 16px; font-weight: bold; margin: 30px 50%; transform: translateX(-50%); border-radius: 5px; padding: 15px 15px; border:0px ; background-color: #fff; } .qeyddiyyat button:hover{ color: red; } .qeyddiyyat input:hover{ color: red; } button:hover{ color: red; } .yazi:hover{ color: red; } a{ color:black; } a:hover{ color: blue; } #aa:hover{ color:darkgray; } input{color:black;} .</style>
<body>   
<div style="padding-bottom:40px;" class="qeyddiyyat">
    
    <h1>Qeydiyyat formu</h1>
    <form action="<?php echo base_url() ?>/Qeydiyyat/qeydol" method="post">
        <label for="fname">Adiniz:</label>
        <input class="inp" type="text" name="fname" placeholder="Adınızı daxil edin..." ><br>
        <span class="text-danger"><?php echo form_error('fname'); ?></span>
        <label for="">Soyadiniz:</label>
        <input class="inp" type="text" name="lname" placeholder="Soyadınızı daxil edin..." ><br>
        <span class="text-danger"><?php echo form_error('lname'); ?></span>
        <label for="email">E-mail:</label>
        <input class="inp" type="email" name="email" placeholder="Emailinizi daxil edin..." ><br>
        <span class="text-danger"><?php echo form_error('email'); ?></span>
        <label for="password">Şifrə:</label>
        <input class="inp" type="password" name="password" placeholder="Şifrənizi daxil edin..." ><br>
        <span class="text-danger"><?php if(form_error('password')){echo "<br>";}?></span>
        <label for="password2">Təkrar Şifrə:</label>
        <input class="inp" type="password" name="password2" placeholder="Şifrənizi təkrar daxil edin..." ><br>
        <span class="text-danger"><?php echo form_error('password'); ?></span>
        <input  type="checkbox" name="ifregistered" value="">
        <label for="ifregistered">Qeydiyyatdan keçdikdən sonra bizim şərtləri qəbul etmiş olursunuz...</label><br>
        <button type="submit"> TAMAMLA</button>
            <span style="display: block;text-align: center;">Artıq hesabınız var? <a id="aa" style="text-decoration:none;color: cyan; font-weight: 700;" href="<?php echo base_url()?>/Girish/login">Daxil Ol</a></span> 





    </form>



</div>
    
</body>
</html>