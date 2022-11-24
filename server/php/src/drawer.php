<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Drawer</title>
</head>
<body>
    <div>
        <form>
            <input type="number" name="input" min="1">
            <button type="submit">click</button>
        </form>
    </div>
<?php
    if(array_key_exists('input', $_GET)){
        $num_int = (int) ($_GET['input']);
        $color = $num_int & 3;

        if($color == 0) $color = 'red';
        elseif($color == 1) $color = 'black';
        elseif($color == 2) $color = 'green';
        elseif($color == 3) $color = 'blue';

        $shape = $num_int >> 1 & 3;

        if($shape == 0) $shape = 'ellipse';
        elseif($shape == 1) $shape = 'rectangle';
        elseif($shape == 2) $shape = 'square';
        elseif($shape == 3) $shape = 'circle';

        $x = 50 + 100 * ($num_int >> 2 & 3); 
        $y = 50 + 100 * ($num_int >> 3 & 3); 

        if($shape == 'circle' || $shape == 'square') $x > $y ? $x=$y : $y=$x;

        echo '<div>' . 'Фигура: ' . $shape . '<br>Цвет: ' . $color . '<br>x: ' . $x . '<br>y: ' . $y . '<br>';

        $svg_code = '<svg width = "' . $x . '" height= "' . $y . '">';

        switch($shape){
            case 'circle':
                $svg_code .= '<circle cx="' . $x / 2 . '" cy ="' . $y / 2 . '" r="' . $x / 2 . '" fill = "' . $color . '" />';
                break;
            case 'square':
                $svg_code .= '<rect x="0" y="0" width="' . $x . '" height="' . $y . '" fill="' . $color . '" />';
                break;
            case 'rectangle':
                $svg_code .= '<rect x="0" y="0" width="' . $x . '" height="' . $y . '" fill="' . $color . '" />';
                break;
            case 'ellipse':
                $svg_code .= '<ellipse cx="' . $x / 2 . '" cy ="' . $y / 2 . '" rx="' . $x / 2 . '" ry="' . $y / 2 . '" fill = "' . $color . '" />';
                break;
        }

    echo $svg_code . '</svg>';
       }
?>
</body>
</html>