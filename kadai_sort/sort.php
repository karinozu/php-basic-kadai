<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 配列のソートと出力を行う関数の定義
        function sort_and_output(&$array, $order) {
            if ($order) {
                // 昇順の場合
                sort($array);
                echo "昇順にソートします。<br>";
            } else {
                // 降順の場合
                rsort($array);
                echo "降順にソートします。<br>";
            }

            // 配列の内容を出力
            foreach ($array as $num) {
                echo $num . "<br>";
            }
            echo "<br>"; // 区切り用の改行
        }

        // ソートする配列の宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順でソートと出力
        sort_and_output($nums, true);

        // 降順でソートと出力
        sort_and_output($nums, false);
        ?>
    </p>
</body>

</html>
