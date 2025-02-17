<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_016</title>
</head>

<body>
  <p>
  <?php
  // Foodクラス
  class Food {
    // プロパティ
    public $name;
    public $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // メソッド: priceを表示
    public function show_price() {
        echo "価格: " . $this->price . "円\n";
    }
  }

  // Animalクラス
  class Animal {
    // プロパティ
    public $name;
    public $height;
    public $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // メソッド: heightを表示
    public function show_height() {
        echo "高さ: " . $this->height . "cm\n";
    }
  }

  // インスタンスを作成
  $food = new Food("りんご", 150);
  $animal = new Animal("犬", 50, 20);

  // print_r関数でインスタンスを表示
  print_r($food);
  echo "<br>";

  print_r($animal);
  echo "<br>";

  // メソッドの呼び出し
  $food->show_price();
  echo "<br>";

  $animal->show_height();
 ?>
</p>
  
</body>
</html>