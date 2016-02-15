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
 

<div class="container"> 
   
   <div class="row">
   <div class="col-md-3">
   
      <br>
             <br>
 
    
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-1">
                 Add
            </button>
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
                
                <form method="post" action="script/login_accaunt.php">
                <div class="modal-body">
                    <div class="form-group">
            <input name="login_accaunt" type="text" class="form-control" placeholder="Логин:">
<br>                   
            <input name="number_twit" type="text" class="form-control" placeholder="Число твитов:">
    <br>               
            <input name="number_folowers" type="text" class="form-control" placeholder="Число фоловеров:">
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
      
      
      <div class="row">
            <?php
       

include_once("script/db.php");
       
       
       
       $result = mysql_query ("SELECT * FROM login_accaunts", $connection);
    
    
     echo "<table class='table table-striped table-bordered'>
   <tr>
    <th></th>
    <th>Назва акаунту</th>
    <th>Кількість твітів</th>
    <th>Кількість фоловерів</th>
    <th></th>
   </tr>
    
        <form method='post' action='script/delete_accaunt.php'>
            <button type='submit' class='btn btn-danger'>
                 Delete
            </button>";
          
          
while ($myrow = mysql_fetch_assoc($result)) {
       
    echo 
       

        
      "<tr>
        <td align='center'> <a  href= 'ferma.php'><span class='glyphicon glyphicon-send'></span></a></td>
   <td> <a target=_blank href= ". ($myrow[login_accaunt]) .">". ($myrow[login_accaunt]) . "</a> </td>
   <td>" . ($myrow[number_twit]) . "</td>
   <td>" . ($myrow[number_folowers]) . "</td>
   <td> <input type=checkbox name=".$myrow['id']."> </td>
   
   
   </tr>";
}

  "</table>
   </form>"
           
?>
      </div>
      
       </div>
       
       
       

    
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>

