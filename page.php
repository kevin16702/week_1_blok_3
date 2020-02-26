<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <div class= "imagecontainer">
<img id="image" src="">
<p id="txt"></p>
</div>
</body>
</html>
<?php
date_default_timezone_set('Europe/Amsterdam');
$time = date("H:i");
$hour = (int) date("Hi");
?>

<script>
    var time = "<?php echo $time ?>"
    var goedenavond = "goedenavond <br> het is nu " + time;
    var goedenacht = "goedenacht <br> het is nu " + time;
    var goedemorgen = "goedemorgen <br> het is nu " + time;
    var goedemiddag = "goedemiddag <br> het is nu " + time;
</script>

<?php
    if($hour >= 000 && $hour < 600){
    echo '<script type="text/javascript">
    document.getElementById("image").src= "night.png";
    document.getElementById("txt").innerHTML = goedenacht;
    </script>';
}   elseif($hour >= 600 && $hour < 1200){
    echo '<script type="text/javascript">
    document.getElementById("txt").innerHTML = goedemorgen;
    document.getElementById("image").src= "morning.png";
    </script>';
}   elseif($hour >= 1200 && $hour < 1800){
    echo '<script type="text/javascript">
    document.getElementById("image").src= "afternoon.png";
    document.getElementById("txt").innerHTML = goedemiddag;
    </script>';
}   elseif($hour >= 1800 && $hour < 000){
    echo '<script type="text/javascript">
    document.getElementById("image").src= "evening.png";
    document.getElementById("txt").innerHTML = goedenavond;
    </script>';
}
?>