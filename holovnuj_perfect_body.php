<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>View account</title>

   <link href="css/main.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    
    
   
    
    
  <body>
 
 
 
 
 
<?php
include_once "menu.php";
      ?>
      
      
       <div class="container">
      <div class="col-md-12" >
   <br>
    <div class="tabs">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab" >Постити</a></li>
            <li><a href="#tab_2" data-toggle="tab">Ферма</a></li>
            <li><a href="#tab_3" data-toggle="tab">Настройки</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab_1"><br>
                 
   
   <div class="row">
   <div class="col-md-3">
   
      <br>
             <br>
 
    
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-1">
                 Добавить пост
            </button>
              </div>
                    <div class="col-md-3">
                    
               <form enctype="multipart/form-data" method="post" action="script/download_txt_to_sql.php">
   <p>Загрузите файл с твитами</p>
   <p><input type="file" name="twit"></p>
   <button class="btn btn-success" type="submit">Загрузить</button>
  </form>
              <br>
            
           </div>
          
      <br>
             <br>

    
              <br>
  </div>
  
 

    
    <div class="modal" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Введите данные</h4>
                    <button class="close" type="button" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                    </button>
                </div>
                
                <form method="post" action="script/login_accaunt_post_h.php">
                <div class="modal-body">
                    <div class="form-group">
            <input name="picture" type="text" class="form-control" placeholder="Картинка:">
<br>                   
                        <textarea  name="text_twit" type="text" class="form-control" placeholder="Текст твита:"> </textarea>
    <br>               
            <input name="post_time" type="text" class="form-control" placeholder="Дата постинга:">
        <br>     
                <button class="btn btn-success" type="submit"  >Добавить</button>
                </div>
                 </div>
                </form>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button"  data-dismiss="modal">Отмена</button>
                    
                </div>
           
        </div>
    </div>
    </div>   
                
      

    
    
          <?php
       

    include_once("script/db.php");
    $result = mysqli_query ($connection, "SELECT * FROM post_h");
?>
    <table class='table table-striped table-bordered'>
       <tr>
            <th>Картинка</th>
            <th>Текст</th>
            <th>Дата твіта</th>
            <th></th>
       </tr>
       <tr>
        <form method='post' action='script/delete_accaunt_post_h.php' id="check_box">
            <button type='submit' class='btn btn-danger'> Удалить пост </button>
          <?php  $value=0;
              while ($myrow = mysqli_fetch_assoc($result)) { ?>
    


        
      <tr>
   <td class='height_td'> <img src= <?php echo $myrow['picture']; ?>> </td>
   <td><?php echo $myrow['text_twit']; ?></td>
   <td><?php echo $myrow['post_time']; ?></td>
   <td> <input type="checkbox" name="<?php echo $myrow['id']; ?>" value="<?php echo $value; ?>"/></td>
   
   
   </tr>
  <?php $value ++; ?>
    <?php } ?>
<input class="btn btn-primary" type="button" name="all" id="delete_all" rel="check_box" value="Отметить все чекбоксы" />
</form>
 <script>
    $('#delete_all').click(function(){
        $('input').prop('checked', true);
    });
</script>
  </table>   
                
                
             
         <p>Параграф с текстом1</p>
                 </div>
              
                
                
                <div class="tab-pane fade" id="tab_2"><br><p>Параграф с текстом2</p></div>
                
                
                
                <div class="tab-pane fade" id="tab_3"><br>
                
                  <div class="row">
   <div class="col-md-3">
   
      <br>
             <br>
 
    
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-2">
                 Добавить ключи
            </button>
             
              <br>
           </div>
    
    
              <br>
              
                 <?php
       

    include_once("script/db.php");
    $result = mysqli_query ($connection, "SELECT * FROM consumer_key_and_other");
?>
    <table class='table table-striped table-bordered'>
       <tr>
            <th>oauth_access_token</th>
            <th>oauth_access_token_secret</th>
            <th>consumer_key</th>
            <th>consumer_secret</th>
            <th></th>
       </tr>
       <tr>
        <form method='post' action='script/delete_consumer_key.php'>
            <button type='submit' class='btn btn-danger'> Удалить ключи </button>
          
             <?php   while ($myrow = mysqli_fetch_assoc($result)) { ?>
    


        
      <tr>
   <td> <?php echo $myrow['oauth_access_token']; ?></td>
   <td><?php echo $myrow['oauth_access_token_secret']; ?></td>
   <td><?php echo $myrow['consumer_key']; ?></td>
    <td><?php echo $myrow['consumer_secret']; ?></td>
   <td> <input type="checkbox" name="<?php echo $myrow['id']; ?>" /></td>
   
   
   </tr>
    <?php } ?>
</form>
  </table>   
          
         
  </div>
    
    <div class="modal" id="modal-2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Введите данные</h4>
                    <button class="close" type="button" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                    </button>
                </div>
                <form method="post" action="script/consumer_key.php">
                <div class="modal-body">
                    <div class="form-group">
       <h4> oauth_access_token: </h4>  <textarea name="oauth_access_token" type="text" class="form-control" placeholder="oauth_access_token">  </textarea>
<br>                   
                      <h4> oauth_access_token_secret: </h4>  <textarea name="oauth_access_token_secret" type="text" class="form-control" placeholder="oauth_access_token_secret">  </textarea>
<br>    
                <h4> consumer_key: </h4>  <textarea name="consumer_key" type="text" class="form-control" placeholder="consumer_key">  </textarea>
<br>    
                <h4> consumer_secret: </h4>  <textarea name="consumer_secret" type="text" class="form-control" placeholder="consumer_secret">  </textarea>
<br>    
                <button class="btn btn-success" type="submit"  >Добавить</button>
                </div>
                 </div>
                </form>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button"  data-dismiss="modal">Отмена</button>
                    
                </div>
           
        </div>
    </div>
    </div> 
                
                
                <h3>Які аканути ретвітити?</h3>
                
                
                
                </div>
            </div>
        </div>
    </div>
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>

