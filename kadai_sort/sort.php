<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $nums = [15, 4, 18, 23, 10 ];
        function sort_2way(&$array, $order){
        if($order === true){
        echo '昇順にソートします。<br>';
        sort($array);
        }elseif($order === false){
        echo '降順にソートします。<br>';
        rsort($array);
        }
        foreach($array as $value){
        echo $value . "<br>"; 
        }
        }
        sort_2way($nums, true);
        sort_2way($nums, false);
        ?>

        <!-- <?php
        // ここにコードを書いていく
        $nums = [15, 4, 18, 23, 10 ];
        
        // 昇順ソートの関数
        function bubbleSortAscending(&$array) {
            $n = count($array);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($array[$j] > $array[$j + 1]) {
                        // 要素を交換する
                        $temp = $array[$j];
                        $array[$j] = $array[$j + 1];
                        $array[$j + 1] = $temp;
                    }
                }
            }
            echo "昇順ソート: " . implode(", ", $array) . "<br>";
        }
        
        // 降順ソートの関数
        function bubbleSortDescending(&$array) {
            $n = count($array);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($array[$j] < $array[$j + 1]) {
                        // 要素を交換する
                        $temp = $array[$j];
                        $array[$j] = $array[$j + 1];
                        $array[$j + 1] = $temp;
                    }
                }
            }
            echo "降順ソート: " . implode(", ", $array) . "<br>";  
        }
        bubbleSortAscending($nums);
        bubbleSortDescending($nums);
        ?> -->
    </p>
</body>

</html>
