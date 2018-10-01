<?php 
include 'session.php';
if(!isset($_SESSION['login'])) {
    header('location: main.php');
}
?>
<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    <div id="time">
        <?php
        date_default_timezone_set('Asia/Jakarta');
        $get=getdate();
        $hour=$get['hours'];
        if($hour>= 4 && $hour< 11 ) {
            $times='Pagi';
        }
        else if($hour >= 11 && $hour< 15) {
            $times='Siang';
        }
        else if($hour >= 15 && $hour< 19) {
            $times='Sore';
        }
        else{
            $times='Malam';
        }

        echo "<h1>Selamat $times $user_login</h1>";
        ?>

    </div>

    <form action="logout.php">
        <div class="clearfix">
            <button type="submit" value="Logout">Logout</button>
        </div>
    </form>
    
</body>
</html>