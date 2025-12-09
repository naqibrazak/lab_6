<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q2</title>
</head>

<body>
    
<?php 
    function calculateArea($width, $height) {
        $area = $width * $height;
        return $area;
    }

    $w = 4;
    $h = 2;
    $result = calculateArea($w, $h);

    echo"<b>The area of a rectangle with a width of $w and $h is $result</b>";
?>

</body>
</html>