<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function countWords($str){
        $sentence = explode(" ", $str);
        print_r(array_count_values($sentence));
    }
    countWords("Hello Hello good morning");
    }

?>
    
</body>
</html>