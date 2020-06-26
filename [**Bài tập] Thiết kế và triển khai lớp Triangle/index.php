<?php include "Triangle.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="color" placeholder="Color"><br/>
    <input type="text" name="side1" placeholder="side1"><br/>
    <input type="text" name="side2" placeholder="side2"><br/>
    <input type="text" name="side3" placeholder="side3"><br/>
    <button type="submit">Show</button>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $color = $_POST['color'];
    $side1 = $_POST['side1'];
    $side2 = $_POST['side2'];
    $side3 = $_POST['side3'];

    $triangle = new Triangle();
    $triangle->setColor($color);
    $triangle->setSide1($side1);
    $triangle->setSide2($side2);
    $triangle->setSide3($side3);

    $triangle->toString();

    $triangle->show();







}





?>


</body>
</html>






