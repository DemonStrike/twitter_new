 <?php
session_start();

if(!isset($_POST['log']) or $_POST['pass']==''){
    $_POST['log']=$_SESSION['log'];
    $_POST['pass']=$_SESSION['pass'];
}

if($_POST['log']== 'DemonStrike' and $_POST['pass']=='BlazingCreature') {
    $_SESSION['log']=$_POST['log'];
    $_SESSION['pass']=$_POST['pass'];
    
    readfile('add.php');
    
}
   
   else {
       echo "Не верно";
   }
?>