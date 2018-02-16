<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>wedding php </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
        $con = mysqli_connect("localhost","usr","AfdWqjBOgyugRHSF","wedding");
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $number = $_POST['number'];

        mysqli_query($con,"SET NAMES utf8");

        $sql="INSERT INTO Attenders(name,mobile,people) VALUES('$name', '$mobile', '$number');";

        mysqli_query($con,$sql)
        
    ?>
</body>
</html>