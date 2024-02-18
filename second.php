<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #indexed  array
    echo"this is my first php pogram in chetu in noida sctor63";
    echo"<br>";
    $cars=array('kapil','madhav','akhil in the way');
    echo"<br>";
    var_dump($cars);
    echo"<br>";
    $cars=array('volvo','audii','bile','ssosoooo');
    echo count($cars);
    echo"<br>";
    $cars=array('kk','mk','vk','kdf');
    var_dump($cars);
    echo $cars[1];
    $cars[1]="kkkkkkkk";
    var_dump($cars);
    #loop throw in index array
    $cars=array('volvo','audii','bile','ssosoooo','kkm','kkl');
    foreach($cars as $x){
        echo"$x<br>";

    } 
    #index number
    $cars[0]="audi";
    $cars[1]="range rover";
    $cars[2]="toyota";
    $cars[3]="my aim  in my future";
    array_push($cars,"manisha");
    var_dump($cars);
    #associative array
    #  








    


  







    ?>
    
</body>
</html>