
    <?php

    //بداية مرحلة الدخوول للحساب
    
    // الربط بقاعدة البيانات
    $username = "bb0008fa13895e";
    $password = "855e553e" ;
    $database = new PDO("mysql:host=eu-cdbr-west-03.cleardb.net; dbname=heroku_86d27cbc62bff9e;",$username,$password);
    
     if(isset($_POST['login'])){
        $login = $database->prepare("SELECT * FROM addadmin WHERE Email_Department = :Email_Department AND Password = :Password " );
        $login->bindParam("Email_Department",$_POST['Email_Department']);
        $login->bindParam("Password",$_POST['Password']);
        $login->execute();
        if($login->rowCount()===1){
        $user = $login->fetchObject(); 
        
        
   
        session_start();
        $var =$user->id ;
           // initialize session variables
           $_SESSION["user_id"] =  $var;
           
           echo "<meta HTTP-EQUIV='REFRESH' content='0; url=dashboard.php'/>";


        ob_end_flush();
        echo '' ;
        }else{
         echo '
         <div class="alert alert-danger">
         كلمة مرور او بريد الكتروني غير صحيح 
         </div>
         ';   
        }
        }
        //نهاية مرحلة الدخول للحساب
        ?>


