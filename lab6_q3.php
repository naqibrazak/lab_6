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

    $w = 5;
    $h = 10;
    $result = calculateArea($w, $h);
?>

    <h2>Calculate Area of Rectangle</h2>

    <p>Width: <?php echo $w; ?></p>
    <p>Height: <?php echo $h; ?></p>
    <p><strong>Area</strong> <?php echo $result;  ?></p>

</body>
</html>