<?php
$username = "root";
$pass = "";
$hostname = "localhost";
$dbname = "my_regt_form";

$conn = mysqli_connect($hostname,$username,$pass,$dbname);
if($conn){
    echo "connected Successfully <br>";

    if(isset($_POST["submit"])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        
        if($pass == null){
            echo "Do not Leave the Password Field Empty";
        }
        else{
            $query = "insert into reg_information values('$fname',' $lname', '$email',' $password')";
    
            if($conn -> query($query)){
                echo "Data Submitted Successfully <br>";
            }
        }
        
    }
}

else{
        echo "Connection problem";
    }
?>