<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $colors = array("Red", "Green", "Blue", "Yellow");
    $arr2d = [[1,2,3], [4,5,6], [7,8,9], [10,11,12], [11,13,]];
    echo $colors[0];

    for($i = 0; $i < count($colors); $i++){
        echo "<br>" . $colors[$i];
    }
    for($i = 0; $i < count($arr2d); $i++){
        for($j = 0; $j < count($arr2d[$i]); $j++){
            echo "<br>" . $arr2d[$i][$j];
        }
    } 
    print_r($arr2d);
    
    $arrAssociate = [
        "name" => "Kan Sovichai",
        "id" => 2,
    ];
    foreach($arrAssociate as $key => $value){
        echo $key.$value."<br>";
    }
    $array = array(1,2,3,4,5,6,7,8,9,10);
    //delete the itemin the back of the array
    array_pop($array);
    foreach($array as $arr){
        echo $arr."<br>";
    }
    //push an item to the back of the array
    array_push($array,10);
    foreach($array as $arr){
        echo $arr."<br>";
    }
    //use the shift to remove the front item
    array_shift($array);
    foreach($array as $arr){
        echo $arr."<br>";
    }
    //Use unshift to add from the front
    array_unshift($array,1);
    foreach($array as $arr){
        echo $arr."<br>";
    }
    if(in_array(11, $array)){
        echo "1 is in the array";
        foreach($array as $arr){
            echo $arr."<br>";
        }
    }
    else{
        echo "1 is not in the array";
        foreach($array as $arr){
            echo $arr."<br>";
        }
    }

    ?>
</body>
</html>