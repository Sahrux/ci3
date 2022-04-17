<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    
   
    <title>ADMIN</title>

</head>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<style type="text/css">
    *{ font-family: Arial, Helvetica, sans-serif; padding: 0px; margin: 0px; box-sizing: border-box; list-style: none; text-decoration: none; } body{ color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px; } .navesas{ display: flex; position: relative; } .navesas .navbarm{ position: fixed; width: 200px; height: 100%; background: #4b4276; padding: 30px 0px; } .navesas .navbarm h2{ color: #fff; text-transform: uppercase; text-align: center; margin-bottom: 30px; } .navesas .navbarm ul li{ padding: 15px; border-bottom: 1px solid rgb(0, 0,0,0.05); border-top: 1px solid rgb(225, 225,225,0.05); } .navesas .navbarm ul li a{ color: #f3f5f9; display: block; } .navesas .mainconteck{ width: 100%; margin-left: 200px; } .navesas .mainconteck .header{ padding: 20px; background: #fff; color: #717171; border-bottom: 1px solid #e0e4e8; } 
        .table-responsive { position: absolute; top: 100px; left: 270px; } .table-wrapper { background: #fff; padding: 20px 25px; border-radius: 3px; min-width: 600px; max-width: 800px; box-shadow: 0 1px 1px rgba(0,0,0,.05); } .table-title { padding-bottom: 15px; background: #435d7d; color: #fff; padding: 16px 30px; min-width: 100%; margin: -20px -25px 10px; border-radius: 3px 3px 0 0; } .table-title h2 { margin: 5px 0 0; font-size: 24px; } .table-title .btn-group { float: right; } .table-title .btn { color: #fff; float: right; font-size: 13px; border: none; min-width: 50px; border-radius: 2px; border: none; outline: none !important; margin-left: 10px; } .table-title .btn i { float: left; font-size: 21px; margin-right: 5px; } .table-title .btn span { float: left; margin-top: 2px; } table.table tr th, table.table tr td { border-color: #e9e9e9; padding: 12px 15px; vertical-align: middle; } table.table tr th:first-child { width: 30px; } table.table tr th:last-child { width: 30px; } table.table-striped tbody tr:nth-of-type(odd) { background-color: #fcfcfc; } table.table-striped.table-hover tbody tr:hover { background: #f5f5f5; } table.table th i { font-size: 13px; margin: 0 5px; cursor: pointer; } table.table td:last-child i { opacity: 0.9; font-size: 22px; margin: 0 5px; } table.table td a { font-weight: bold; color: #566787; display: inline-block; text-decoration: none; outline: none !important; } table.table td a:hover { color: #2196F3; } table.table td a.edit { color: #FFC107; } table.table td a.delete { color: #F44336; } table.table td i { font-size: 19px; } table.table .avatar { border-radius: 50%; vertical-align: middle; margin-right: 10px; } .pagination { float: right; margin: 0 0 5px; } .pagination li a { border: none; font-size: 13px; min-width: 30px; min-height: 30px; color: #999; margin: 0 2px; line-height: 30px; border-radius: 2px !important; text-align: center; padding: 0 6px; } .pagination li a:hover { color: #666; } .pagination li.active a, .pagination li.active a.page-link { background: #03A9F4; } .pagination li.active a:hover { background: #0397d6; } .pagination li.disabled i { color: #ccc; } .pagination li i { font-size: 16px; padding-top: 6px } .hint-text { float: left; margin-top: 10px; font-size: 13px; } /* Custom checkbox */ .custom-checkbox { position: relative; } .custom-checkbox input[type="checkbox"] { opacity: 0; position: absolute; margin: 5px 0 0 3px; z-index: 9; } .custom-checkbox label:before{ width: 18px; height: 18px; } .custom-checkbox label:before { content: ''; margin-right: 10px; display: inline-block; vertical-align: text-top; background: white; border: 1px solid #bbb; border-radius: 2px; box-sizing: border-box; z-index: 2; } .custom-checkbox input[type="checkbox"]:checked + label:after { content: ''; position: absolute; left: 6px; top: 3px; width: 6px; height: 11px; border: solid #000; border-width: 0 3px 3px 0; transform: inherit; z-index: 3; transform: rotateZ(45deg); } .custom-checkbox input[type="checkbox"]:checked + label:before { border-color: #03A9F4; background: #03A9F4; } .custom-checkbox input[type="checkbox"]:checked + label:after { border-color: #fff; } .custom-checkbox input[type="checkbox"]:disabled + label:before { color: #b8b8b8; cursor: auto; box-shadow: none; background: #ddd; } /* Modal styles */ .modal .modal-dialog { max-width: 400px; } .modal .modal-header, .modal .modal-body, .modal .modal-footer { padding: 20px 30px; } .modal .modal-content { border-radius: 3px; font-size: 14px; } .modal .modal-footer { background: #ecf0f1; border-radius: 0 0 3px 3px; } .modal .modal-title { display: inline-block; } .modal .form-control { border-radius: 2px; box-shadow: none; border-color: #dddddd; } .modal textarea.form-control { resize: vertical; } .modal .btn { border-radius: 2px; min-width: 100px; } .modal form label { font-weight: normal; }</style>
<script>
$(document).ready(function(){
    $(".emeliyyat").click(function(){
        var id = $(this).attr('id');
        $("#editedid").val(id);
        $("#deletedid").val(id);
    }); 
    $('.checked').change(function() {
        var status=$(this).prop('checked');
        var id=$(this).attr('id');
      $.ajax({
         type: "POST",
         url: "<?=base_url()?>/Admin/switch", 
         data: {"status":status,"id":id},
         success: 
              function(data){
                alert(data);  //as a debugging message.
              }
          });
     return false;
    });

});

</script>
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
                <div class="header"><h1 style=" margin-left: 50px;text-transform:uppercase;">SALAAAAMMMM, <?php echo @$sesdata ?> </h1>  </div>
                <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>İstifadəçiləri <b>İdarə Et</b></h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Yeni İstifadəçi Əlavə Et</span></a>
                                                         
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ad</th>
                                    <th>Soyad</th>
                                    <th>E-mail</th>
                                    <th>Status</th>
                                    <th>Əkşns</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  foreach ($vbdata as $row) { ?>

                                <tr>
                                    <td name='id'><?php echo $row->id;?></td>   
                                    <td name="fname"><?php echo $row->fname;?></td>
                                    <td name="lname"><?php echo $row->lname;?></td>
                                    <td name="email"><?php echo $row->email;?></td>
                                    <td name="status">
                                    <input 
                                        class="checked" 
                                        type="checkbox"
                                         data-toggle="toggle" 
                                         data-on="Aktiv" 
                                         data-off="Passiv" 
                                         data-onstyle="success" 
                                         data-offstyle="danger" 
                                         id="<?php echo $row->id;?>"
                                         <?php echo ($row->status==1) ? "checked" : "";?>
                                     >
                                    </td>
                                    <td>
                                        <a href="#editEmployeeModal" class="edit emeliyyat" id="<?php echo $row->id;?>" data-toggle="modal"  > <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                        <a  href="#deleteEmployeeModal" id="<?php echo $row->id;?>" class="delete emeliyyat" data-toggle="modal" ><i class="material-icons" data-toggle="tooltip"  title="Delete">&#xE872;</i></a>
                                        
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="clearfix" >
                           <!--  <div class="hint-text">  <b><?php echo $count ?></b> istifadəçidən <b><?php echo $per_page ?></b> istifadəçi göstərilir </div> -->
                            <?php echo $links;?>
                        </div>
                    </div>
                </div>        
            </div>
                <!-- Add Modal HTML -->
                <div id="addEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" action="<?= base_url() ?>Admin/addnewuser">
                                <div class="modal-header">                      
                                    <h4 class="modal-title">İstifadəçi Əlavə Et</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">                    
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="fname" class="form-control" placeholder="Adınızı daxil edin" >
                                    </div>
                                    <div class="form-group">
                                        <label>Soyad</label>
                                        <input type="text" name="lname" class="form-control" placeholder="Soyadınızı daxil edin">
                                    </div> 
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="Emailinizi daxil edin">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Şifrənizi daxil edin" >
                                    </div>
                                    <div class="form-group">
                                        <label>Re-Password</label>
                                        <input type="password" name='password2' class="form-control" placeholder="Təkrar Şifrə">
                                    </div>                  
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="İmtina">
                                    <input type="submit" class="btn btn-success" value="Tamamla">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal HTML -->
                <div id="editEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" action="<?php echo base_url();?>/Admin/update">
                                <div class="modal-header">                      
                                    <h4 class="modal-title">Redəktə Et</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">                    
                                    <div class="form-group">
                                        <label>Ad</label>
                                        <input type="text" name="modfname" class="form-control"placeholder="Adinizi daxil edin " >
                                    </div>
                                    <div class="form-group">
                                        <label>Soyad</label>
                                        <input type="text" name="modlname" class="form-control"  placeholder="Soyadınızı daxil edin " >
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" name="status" class="form-control"  placeholder="Status teyin edin " >
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Re-Password</label>
                                        <input type="password" name="password2" class="form-control" >
                                    </div>                  
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="editedid" id="editedid" value="">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Imtina">
                                    <input type="submit" class="btn btn-info" value="Saxla">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Delete Modal HTML -->
                <div id="deleteEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" action="<?php echo base_url()?>/Admin/delete">
                                <div class="modal-header">                      
                                    <h4 class="modal-title">İstifadəçini sil</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <input type="hidden" id="deletedid" name="deletedid" value="hello">
                                <div class="modal-body">                    
                                    <p>Silmək istədiyinizdən əminsiniz?</p>
                                    <p class="text-warning"><small>Sildikdən sonra datanı geri qaytara bilməzsiniz</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>