<?php
include 'Dbconnect.php';

if(isset($_POST["submitbtn"])){
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    echo "welcome ".$firstname." ".$lastname."<br>"; 

    $query = "insert into information values('$firstname','$lastname')";
    
    if($conn -> query($query)){
        echo "Submitted successfully <br>";
    }
    else
    {
        echo "not submitted successfully<br>";
    }
    
}
//echo "welcome ".$firstname." ".$lastname;

?>