<?php
// 下記のようにlesson1のファイルをインポートしてください。
// (他のファイルを参照する関数はいくつかあるので調べてください。)
// (lesson1の文字列がそのまま出力されてしまっていても大丈夫とします。)
require_once 'Lesson1.php';

// 下記のクラスを作成してください。

// Patient 
// lesson1からPersonを継承
class Patient extends Person{

// height: float 身長（ｍ）private
// weight: float 体重 (kg) private
    private float $height;
    private float $weight;

// __construct(name: string, age:int, gender: string, height: float, weight: float)
// 名前、年齢、性別、身長、体重を受け取り初期化する。
public function __construct($name, $age, $gender, $height, $weight){
    parent::__construct($name, $age, $gender);
    $this->height = $height;	
    $this->weight = $weight;
}

// calculateStandardWeight() :float
// 平均体重を返す （身長 × 身長 × 22)
public function calculateStandardWeight(){
    return $this -> height * $this -> height * 22;
}

// getHeight()
// 身長を返す
public function getHeight(){
    return $this -> height;
}

// getWeight()
// 体重を返す
public function getWeight(){
    return $this -> weight;
}

// クラスが完成したら適当なインスタンスを生成し、
// それぞれの関数を使用して下記のフォーマットで出力してください。

// 〇〇さんの身長は〇〇mなので平均体重は〇〇kgです。 現在の体重は〇〇kgです。
}
echo '<br><br>';
$yamada = new Patient('山田太郎', 30, '男', 1.70, 65.0);
echo ( $yamada -> name.'さんの身長は');
echo ( $yamada -> getHeight() .'mなので平均体重は');
echo ( $yamada -> calculateStandardWeight() . 'kgです。現在の体重は');
echo ( $yamada -> getWeight() .'kgです。');
?>