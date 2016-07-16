7<html>
<body>

<?php
$arr = [
        array(
            "name" => "MacBook Pro",
            "desc" => "awesome Laptop",
            "price" => NULL,
            "img" => "fake_macbook.jpg"
            ),         
        array(
            "name" => "MacBook Pro1",
            "desc" => "awesome Laptop1",
            "price" => NULL,
            "img" => "fake_macbook1.jpg"
            )
        ];
    echo asort($arr);
    $SortArr = array(
            "name" => "MacBook Pro1",
            "desc" => "awesome Laptop1",
            "price" => NULL,
            "img" => "fake_macbook1.jpg"
            );
    var_dump($SortArr);
    echo ksort($SortArr);
        
    foreach($SortArr as $x => $x_value) {
        echo "<br>";
        echo "Key=" . $x . ", Value=" . $x_value;
    
}
    foreach ($SortArr as $sort){
        echo "$sort";
        
    }
        var_dump($SortArr['name']);
        var_dump($arr[0]['name']);

    
    
    ?>
</body>
</html>
