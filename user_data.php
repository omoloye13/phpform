<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REDIRECT</title>
</head>
<body> 
<?php
print_r($_POST);
$formfile = "./userdata.csv";
$formhandle = fopen($formfile, "r");
$formcontent = fread($formhandle, filesize($formfile));
echo($formcontent);
fclose($formhandle);
   ?>
</body>
</html>


