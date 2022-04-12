<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>ADMIN</title>

</head>
<style type="text/css">
    *{ font-family: Arial, Helvetica, sans-serif; padding: 0px; margin: 0px; box-sizing: border-box; list-style: none; text-decoration: none; } body{ background: #f3f5f9; } .navesas{ display: flex; position: relative; } .navesas .navbarm{ position: fixed; width: 200px; height: 100%; background: #4b4276; padding: 30px 0px; } .navesas .navbarm h2{ color: #fff; text-transform: uppercase; text-align: center; margin-bottom: 30px; } .navesas .navbarm ul li{ padding: 15px; border-bottom: 1px solid rgb(0, 0,0,0.05); border-top: 1px solid rgb(225, 225,225,0.05); } .navesas .navbarm ul li a{ color: #f3f5f9; display: block; } .navesas .mainconteck{ width: 100%; margin-left: 200px; } .navesas .mainconteck .header{ padding: 20px; background: #fff; color: #717171; border-bottom: 1px solid #e0e4e8; } .info{ margin: 20px; color: #717171; line-height: 25px; } .info div{ margin-bottom: 20px; }
        .delete{ text-transform: none; background: red; color: white; } 
        .edit{ text-transform: none; background: darkblue; color: white; }  
        
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


            </div>

            <div class="mainconteck">
                <div class="header"><h1 style="text-transform:uppercase;">SALAAAAMMMM, <?php echo @$sesdata ?> </h1>  </div>
                <div class="info">

            <table align='center' cellspacing=5 cellpadding=5 id="data_table" border=1>
        <tr>
        <th>ID</th>
        <th>AD</th>
        <th>SOYAD </th>
        <th>E-MAIL</th>
        </tr>

        <?php  foreach ($vbdata as $row) { ?>
        <tr id="<?php echo $row->id; ?>" >
        <td name='id'><?php echo $row->id;?></td>   
        <td id="fname"><?php echo $row->fname;?></td>
        <td id="lname"><?php echo $row->lname;?></td>
        <td id="email"><?php echo $row->email;?></td>
        <td>
        <button class="edit"><a style="color:white;" href="<?php echo base_url() ?>/Admin/gotoedit/<?php echo $row->id; ?>">Edit</a></button>
        <button class="delete"><a style="color:white;" href="<?php echo base_url() ?>/delete>Delete</a></button">
        
        </td>
        </tr>
       <?php } ?>


        </table>

                </div>






            </div>





        </div>










    </nav>
</body>

</html>