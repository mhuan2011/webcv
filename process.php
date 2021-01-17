
<?php
    include("config.php");
    

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //nhan du lieu tu form sau khi nhan submit
        $myusername = mysqli_real_escape_string($db, $_POST['username']);
        $mypassword = mysqli_real_escape_string($db, $_POST['password']);
        //cau sql truy van du lieu
        $sql = "SELECT id FROM login WHERE username = '$myusername' AND password = '$mypassword'";
        $result = mysqli_query($db, $sql); //du lieu lay ra dua vao bien result
        // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);




        $count = mysqli_num_rows($result);//so dong cua du lieu tuong duong so account

        if($count == 1){
            header("Location:welcome.php");
        }
        else {
           
            
        }

    }
?>