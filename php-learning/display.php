<?php
include 'Dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    
    <ul>
        <?php
        $query= "select * from information";
        $result = $conn -> query($query);
        while($row = mysqli_fetch_array($result)){
            $firstname = $row['first_name'];
            $lastname = $row['last_name'];
        
        ?>

        <li><?php echo "Full Name : ".$firstname." ".$lastname."<br>";?></li>
        

        <?php
        }
        ?>

    </ul>

</body>
</html>