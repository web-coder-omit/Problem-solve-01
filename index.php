<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function twoSum($nums, $target) {
            sort($nums);
            $nums_lenth = count($nums);
            for($a = 0; $a<$nums_lenth;$a++){
                for($b = $a + 1;$b < $nums_lenth;$b++){
                    if($nums[$a]+$nums[$b] == $target){
                        return ($a .",". $b);
                    }
                    }
                }
            };
            $nums = [100,200,92,10,192];
            $target = 192;
            $result = twoSum($nums,$target);
            echo $result;
       ?>    
</body>
</html>