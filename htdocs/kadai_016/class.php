<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>class</title>
</head>

<body>
    <p>
        <?php
        // Foodクラスの定義
        class Food
        {
            private $name;
            private $price;

            // コンストラクタ
            public function __construct($name, $price)
            {
                $this->name = $name;
                $this->price = $price;
            }

            // priceプロパティの値を出力するメソッド
            public function show_price()
            {
                echo $this->price . "<br>";
            }
        }

        // Animalクラスの定義
        class Animal
        {
            private $name;
            private $height;
            private $weight;

            // コンストラクタ
            public function __construct($name, $height, $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // heightプロパティの値を出力するメソッド
            public function show_height()
            {
                echo $this->height . "<br>";
            }
        }

        // Foodクラスのインスタンス生成
        $food = new Food("potato", 250);
        echo "<pre>";
        print_r($food);
        echo "</pre><br>";
        
        // Animalクラスのインスタンス生成
        $animal = new Animal("dog", 60, 5000);
        echo "<pre>";
        print_r($animal);
        echo "</pre><br>";
        
        // プロパティ値の出力
        $food->show_price();
        $animal->show_height();        
        ?>
    </p>
</body>

</html>
