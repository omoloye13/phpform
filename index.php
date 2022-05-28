<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuri registration form</title>
    <style>
        h1{
            text-align: center;
        }
        input{
            margin-top: 1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1> Zuri Registration Form</h1>
    <form method="POST" action="user_data.php">
        <label for="name">Name:</label>
        <input type="text" name="name"><br>
        <label for="email">Email:</label>
        <input type="email" name="email"><br>
        <label for="date">Date of Birth:</label>
        <input type="date" name="date"><br>
        <label for="gender">Gender:</label>
        <input type="text" name="gender"><br>
        <label for="country">Country:</label>
        <input type="text" name="country"><br>
        <button type="submit">Submit</button>
    </form>
       
    </div>
</body>
</html>