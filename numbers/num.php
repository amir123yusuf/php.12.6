<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 3;
        $a += $b;
        echo $a;
    ?><br>
    <?php
        $a = 17;
        $b = 6;
        $a %= $b;
        echo $a;
    ?><br>
    <?php
    $i = 1;
    $j = $i++;
    
    echo $j;
    ?><br>
    <?php
        $name = 'Антон';

        echo "Привет, $name\n\u{1F35E}";
    ?><br>
    <?php
    $name1 = 'Антон';
    $name2 = 'Борис';
    $name3 = 'Василий';
    $name4 = 'Григорий';
    $name5 = 'Дмитрий';
    
    $i = rand(1, 5);
    
    echo "Здравствуй, ${"name$i"}";
    ?><br>
    <?php
    $first = '20$US';
    
    $second = "20$US";
    
    echo $first;
    echo "\n";
    echo $second;
    ?>
    <?php 

$arr = array(
    array(0,5,-5),
    array("привет","мир"),
    array("name"=>"Amir","age"=>15)
    );
    
    for($i=0; $i < count($arr); $i++){
        for ($j=0; $j < count($arr[$i]); $j++) {
            echo $arr[$i][$j];
            echo "<br>";
        }
    }
?>
<?php
$date = ["a"=>"b", "c"=>"d", "e"=>"f", "f"=>"b"];

$values = array_values($date);
$keys = array_keys($date);

$merge = array_merge($values, $keys);
$unique = array_unique($merge);

echo (implode(array_values($unique)));
?>
</body>
</html>