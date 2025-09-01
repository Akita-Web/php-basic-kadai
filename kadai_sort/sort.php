<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // Step1. 独自のソート関数：標準関数で実装（戻り値なし・値渡し）
        function sort_2way($array, $order) {
            // TRUEなら昇順、TRUE以外は降順として扱う
            if ($order === true) {
                sort($array);   // 昇順
                echo "【昇順ソート】<br>";
            } else {
                rsort($array);  // 降順
                echo "【降順ソート】<br>";
            }

            // foreachで1行ずつ表示
            foreach ($array as $value) {
                echo $value . "<br>";
            }
            echo "<hr>"; // 区切り（任意）
        }

        // Step2. ソート対象の配列を用意
        $nums = [15, 4, 18, 23, 10];

        // Step3. 昇順 → 降順 の順で呼び出し   
        sort_2way($nums, true);   // 昇順
        sort_2way($nums, false);  // 降順
        ?>
    </p>
</body>

</html>
