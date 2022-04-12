<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>ADMIN</title>

</head>
<style type="text/css">
    *{ font-family: Arial, Helvetica, sans-serif; padding: 0px; margin: 0px; box-sizing: border-box; list-style: none; text-decoration: none; } body{ background: #f3f5f9; } .navesas{ display: flex; position: relative; } .navesas .navbarm{ position: fixed; width: 200px; height: 100%; background: #4b4276; padding: 30px 0px; } .navesas .navbarm h2{ color: #fff; text-transform: uppercase; text-align: center; margin-bottom: 30px; } .navesas .navbarm ul li{ padding: 15px; border-bottom: 1px solid rgb(0, 0,0,0.05); border-top: 1px solid rgb(225, 225,225,0.05); } .navesas .navbarm ul li a{ color: #f3f5f9; display: block;} 
        .updtd{
            position: absolute;
            
            left: 120%;
            top: 5%;
        }
        .w3-input{
            margin-top: 10px;
            width: 220px;
        }
       
</style>
<body>
    <nav>
        <div class="navesas">

            <div class="navbarm">
                <h2>SƏHİFƏNİZ</h2>
                <ul>
                    <li><a href="">FOTOLAR</a></li>
                    <li><a href="">MESAJLAR</a></li>
                    <li><a href=""> MƏQALƏLƏRİM</a></li>
                    <li><a href="">TAKİB</a></li>
                    <li><a href="<?php echo base_url('Admin/logout') ?>">  <i class="fa-solid fa-arrow-right-from-bracket"></i> ÇIXIŞ </a>
                        </li>


                </ul>
                <div class="updtd">
            <div class="w3-container">
              
              <div class="w3-card-4">
                <div class="w3-container w3-blue">
                  <h2>REDAKTƏ</h2>
                </div>

                <form class="w3-container" method="post" action="<?php echo base_url() ?>Admin/update">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <p>
            <input class="w3-input" type="text" name="fname" value="<?php echo $fname; ?>">
                  <label>AD</label></p>
                  <p>     
                  <input class="w3-input" type="text" name="lname" value="<?php echo $lname; ?>">
                  <label>SOYAD</label></p>
                  <p>     
                  <input class="w3-input" type="password" name="password" value="">
                  <label>PASSWORD</label></p>
                  <p>     
                  <input class="w3-input" type="password" name="password2" value="">
                  <label>RE-PASSWORD</label></p>
                  <p style="padding-bottom:10px;">
                  <input class="w3-input w3-gray" type="submit"  value="Edit">
                      
                  </p>
                </form>
              </div>
            </div>

            </div>






            </div>





        </div>










    </nav>
</body>

</html>