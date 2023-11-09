<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。


// ・現在日時（xxxx年xx月xx日（x曜日））
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)


//指定日の曜日を取得する
$today = date('Y年m月d日H時i分s秒');
$date = date('w', strtotime($today));
$week = [
  '日', //0
  '月', //1
  '火', //2
  '水', //3
  '木', //4
  '金', //5
  '土', //6
];

//現在時刻
echo date('Y年m月d日H時i分s秒'). '（'. $week[$date] . '曜日）<br>';
//3日後
echo date('Y年m月d日H時i分s秒',strtotime("+3 day")).'<br>';
//12時間前
echo date('Y年m月d日H時i分s秒',strtotime("-12 hour")).'<br>';
//2020年元旦から現在までの経過日数
date_default_timezone_set('Asia/Tokyo');
$day1 = new DateTime('now');
$day2 = new DateTime('2020-01-01');
$diff = $day2->diff($day1);
echo '2020年元旦から'. $diff->days. '日経過しました。';
?>