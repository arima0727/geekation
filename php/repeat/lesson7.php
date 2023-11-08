<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>数字並び替えプログラム</title>
</head>
<body>
<?php
$arr = array(99, 3, 12, 45, 60, 100, 31, 7, 28);
for($i=0; $i<count($arr); $i++){
     $target = count($arr)-$i;
     for($j=1; $j<$target; $j++){
          if($arr[$j]<$arr[$j-1]){
               $swap = $arr[$j];
               $arr[$j] = $arr[$j-1];
               $arr[$j-1] = $swap;}
     }
}
foreach($arr as $val){
    echo $val.", ";
}
?>
</body>
</html>
