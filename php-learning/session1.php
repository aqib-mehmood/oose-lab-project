<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form submitting</title>
</head>
<body>
    <form method="post" action="action.php">
        <div class="form-group">
            <label for="FirstName">FirstName:</label>
            <input type="text" id="FirstName" placeholder="Enter FirstName" name="FirstName">
        </div>
        <div class="form-group">
            <label for="LastName">LastName:</label>
            <input type="text" id="LastName" placeholder="Enter LastName" name="LastName">
        </div>
        <button type="submit" name="submitbtn">Submit</button>
    </form>
</body>
</html>