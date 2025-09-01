<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Step1. 独自のソート関数を作る
        function sort_2way(&$array, $order) {
        // 配列の要素数を取得
        $count = count($array);

        // バブルソートで実装
        for ($i = 0; $i < $count - 1; $i++) {
            for ($j = 0; $j < $count - $i - 1; $j++) {
                // 昇順の場合
                if ($order === true) {
                    if ($array[$j] > $array[$j + 1]) {
                        // 値を入れ替え
                        $temp = $array[$j];
                        $array[$j] = $array[$j + 1];
                        $array[$j + 1] = $temp;
                    }
                } else { 
                    // 降順の場合
                    if ($array[$j] < $array[$j + 1]) {
                        $temp = $array[$j];
                        $array[$j] = $array[$j + 1];
                        $array[$j + 1] = $temp;
                    }
                }
            }
        }
    }         

    // Step2. ソート対象の配列を用意する
    $nums = [15, 4, 18, 23, 10];

    // Step3. 昇順ソート
    sort_2way($nums, true);
    echo "昇順ソート結果: " . implode(", ", $nums) . "<br>";

    // Step3. 降順ソート
    $nums = [15, 4, 18, 23, 10]; // 元の配列に戻す
    sort_2way($nums, false);
    echo "降順ソート結果: " . implode(", ", $nums) . "<br>";
        ?>
    </p>
</body>

</html>