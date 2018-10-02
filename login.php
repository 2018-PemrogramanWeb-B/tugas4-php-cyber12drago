 <?php 
    session_start();

        $err=$user= $pass='';
            if(isset($_POST['username'])){
                $user = $_POST['username'];
                $pass = $_POST['pass'];
            }

        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            if($user!='Refadi'|| $pass!='refadi123'){
                 header("location: main.php");
            }
            else{
               $_SESSION['login'] = $user;
                header("location: time.php");
            }
        }
?>
