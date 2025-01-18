<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数の定義
        function sort_2way(&$array, $order)
        {
            if ($order) {
                // 昇順の場合
                sort($array);
            } else {
                // 降順の場合
                rsort($array);
            }
        }

        // ソートする配列の宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順でソート
        sort_2way($nums, true);
        echo "昇順にソートします。<br>";
        foreach ($nums as $num) {
            echo $num . "<br>";
        }

        echo "<br>"; // 区切り用の改行

        // 降順でソート
        sort_2way($nums, false);
        echo "降順にソートします。<br>";
        foreach ($nums as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>

</html>
