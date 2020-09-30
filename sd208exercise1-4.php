<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ( $x =1 ; $x <= 100; $x++)
    {
        
        if($x % 3 == 0 and $x % 5 == 0 ){
            echo "Fizz Buzz";
        }elseif($x % 3 == 0){
            echo "Fizz";
        }elseif($x % 5 == 0 )
        {
            echo "Buzz";
        } 
        echo $x;
        echo "<br>";
    }
    

    ?>
</body>
</html>