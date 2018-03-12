<?php
/**
 * Created by PhpStorm.
 * User: sinor
 * Date: 12.03.2018
 * Time: 16:06
 */

if (isset($_COOKIE['colour'])){
    $colour = $_COOKIE['colour'];
} else $colour = 'white';

if (isset($_POST)){
    if (isset($_POST['colour'])){
        $colour = $_POST['colour'];
        if (!isset($_COOKIE['colour'])){
            setcookie('colour', $colour,time()+7200);
        }
        $_COOKIE['colour']=$colour;
    }
}
echo <<<EOD
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color:$colour;">

<div class="container">
  <form action="" method="post">
    <div class="form-group">
      <label for="sel1">Выберети цвет фона:</label>
      <select class="form-control" id="colourSelector" name="colour">
            <option value = "#000000">Black (черный)</option>
            <option value = "#0000FF">Blue (голубой)</option>
            <option value = "#FF00FF">Fuchsia (фуксин)</option>
            <option value = "#808080">Gray (серый)</option>
            <option value = "#008000">Green (зеленый)</option>
            <option value = "#00FF00">Lime (ярко-зеленый)</option>
            <option value = "#800000">Maroon (темно-бордовый)</option>
            <option value = "#000080">Navy (темно-синий)</option>
            <option value = "#808000">Olive (оливковый)</option>
            <option value = "#800080">Purple (фиолетовый)</option>
            <option value = "#FF0000">Red (красный)</option>
            <option value = "#C0C0C0">Silver (серебряный)</option>
            <option value = "#008080">Teal (серо-зеленый)</option>
            <option value = "#FFFFFF">White (белый)</option>
            <option value = "#FFFF00">Yellow (желтый)</option>
      </select>
      <br>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
EOD;
