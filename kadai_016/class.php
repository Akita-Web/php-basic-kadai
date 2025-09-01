<?php
// Step1. クラスを作成する

class Food {
    private $name;
    private $price;

    // コンストラクタで値を代入
    public function __construct($name, $price) {
        $this->name  = $name;
        $this->price = $price;
    }

    // priceを出力するメソッド
    public function show_price() {
        echo $this->price . "<br>";
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタで値を代入
    public function __construct($name, $height, $weight) {
        $this->name   = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightを出力するメソッド
    public function show_height() {
        echo $this->height . "<br>";
    }
}

// Step2. インスタンスを作成し、print_rで出力
$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

echo "<pre>";
print_r($food);
print_r($animal);
echo "</pre>";

// Step3. メソッドにアクセスして出力
$food->show_price();   // 250
$animal->show_height(); // 60
?>
